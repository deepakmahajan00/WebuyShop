<?php

namespace WebuyShop\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\Security\Core\SecurityContextInterface;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use WebuyShop\FrontBundle\Entity\Cart;
use WebuyShop\FrontBundle\Entity\CartProduct;
use WebuyShop\FrontBundle\Entity\Orders;
use WebuyShop\FrontBundle\Entity\Product;


class SecurityController extends Controller
{
    /**
     * @Route("/login", name="login_form")
     * @Template()
     */
    public function loginAction(Request $request)
    {
        $session = $request->getSession();

        $error = $session->get(SecurityContextInterface::AUTHENTICATION_ERROR);
        $session->remove(SecurityContextInterface::AUTHENTICATION_ERROR);

        if ($this->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->redirectToRoute('homepage');
        }

        return array(
            'last_username' => $session->get(SecurityContextInterface::LAST_USERNAME),
            'error'         => $error,
        );
    }

    /**
     * @Route("/login_check", name="login_check")
     */
    public function loginCheckAction()
    {
    }

    /**
     * @Route("/logout", name="logout")
     */
    public function logoutAction()
    {
    }

    /**
     * @Route("/", name="homepage")
     * @Route("/{category}", name="category_homepage", requirements={"category": "\d+"})
     * @Template()
     */
    public function homepageAction($category = null)
    {
        if (!$this->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->redirectToRoute('logout');
        }

        $em = $this->getDoctrine()->getManager();

        if ($category == null) {
            $criteria = $this->get('webuyshop.front.service.product_service')->createCriteria([]);
            $products = $this->get('webuyshop.front.service.product_service')->getAll($criteria);
        } else {
            $products = $this->get('webuyshop.front.service.product_service')->findByCategory(
                ['category' => $category]
            );
        }

        $criteria = $this->get('webuyshop.front.service.category_service')->createCriteria(
            []
        );
        $categories = $this->get('webuyshop.front.service.category_service')->getAll($criteria);

        return $this->render('WebuyShopFrontBundle:Security:homepage.html.twig',
            ['products' => $products, 'categories' => $categories]);
    }

    /**
     * @Route("/add_cart", name="add_cart")
     * @Method({"POST"})
     * @Template()
     */
    public function addCartAction(Request $request)
    {
        if (!$this->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->redirectToRoute('logout');
        }

        $em = $this->getDoctrine()->getManager();

        $criteria = $this->get('webuyshop.front.service.product_service')->createCriteria(
            ['id' => $this->get('request')->request->get('product')]
        );
        $product = $this->get('webuyshop.front.service.product_service')->getAll($criteria);

        $order = $this->get('webuyshop.front.service.order_service')->findOneByStatus(['status' => Orders::ORDERED]);

        if ($order) {
            $cart = $em->getRepository('WebuyShopFrontBundle:Cart')->find($order[0]->getCart());

            $cartProduct = new CartProduct();
            $cartProduct->setCart($cart);
            $cartProduct->setProduct($product[0]);
            $em->persist($cartProduct);

        } else {
            $cart = new Cart();
            $cart->setUser($this->getUser());
            $em->persist($cart);

            $cartProduct = new CartProduct();
            $cartProduct->setCart($cart);
            $cartProduct->setProduct($product[0]);
            $em->persist($cartProduct);

            $order = new Orders();
            $order->setCart($cart);
            $order->setUser($this->getUser());
            $order->setStatus(Orders::ORDERED);
            $em->persist($order);
        }


        try {
            $em->flush();
            $message = "Added !";
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }

        return array(
            'message' => $message
        );
    }

    /**
     * @Route("/show_cart", name="show_cart")
     * @Template()
     */
    public function showCartAction()
    {
        if (!$this->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->redirectToRoute('logout');
        }

        $order = $this->get('webuyshop.front.service.order_service')->findCartItems(['user_id' => $this->getUser(), 'status' => Orders::ORDERED]);

        $showCheckout = true;
        if (empty($order)) {
            $showCheckout = false;
        }


        return $this->render('WebuyShopFrontBundle:Security:showCart.html.twig',
            ['order' => $order, 'checkout' => $showCheckout]);
    }

    /**
     * @Route("/checkout", name="checkout")
     * @Template()
     */
    public function checkoutAction()
    {
        if (!$this->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->redirectToRoute('logout');
        }

        $order = $this->get('webuyshop.front.service.order_service')->findOrder(['user_id' => $this->getUser(), 'status' => Orders::ORDERED]);

        $em = $this->getDoctrine()->getManager();

        $orders = $em->getRepository('WebuyShopFrontBundle:Orders')->find($order[0]->getId());
        $orders->setStatus(Orders::APPROVED);

        try{
            $em->flush();
            $message = "Order checkout successfully";
        } catch (Exception $e) {
            $message = $e->getMessage();
        }

        return $this->render('WebuyShopFrontBundle:Security:checkout.html.twig',
            ['message' => $message]);
    }

    /**
     * @Route("/delete_item", name="delete_item")
     * @Template()
     */
    public function deleteItemAction(Request $request)
    {
        if (!$this->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->redirectToRoute('logout');
        }

        $em = $this->getDoctrine()->getManager();

        $cp = $em->getRepository('WebuyShopFrontBundle:CartProduct')->find($request->get('item'));
        $em->remove($cp);

        try{
            $em->flush();
            return $this->redirectToRoute('show_cart');
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    /**
     * @Route("/orders", name="my_orders")
     * @Template()
     */
    public function myOrdersAction()
    {
        if (!$this->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->redirectToRoute('logout');
        }

        $em = $this->getDoctrine()->getManager();

        $orders = $em->getRepository('WebuyShopFrontBundle:Orders')->findAll(['user' => $this->getUser()]);

        return $this->render('WebuyShopFrontBundle:Security:myOrders.html.twig',
            ['orders' => $orders]);
    }
}