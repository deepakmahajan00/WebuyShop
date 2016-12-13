<?php

/* WebuyShopFrontBundle:Security:showCart.html.twig */
class __TwigTemplate_3b577f2cbfee25c8599625d677bdb239dcb022c66d1a64912505c2da04c11ece extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebuyShopFrontBundle::layout.html.twig", "WebuyShopFrontBundle:Security:showCart.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebuyShopFrontBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5b9013ec25582d0c723d7daaf2e99fb5a539be528eef1aa31d6a0757dca2ea1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b9013ec25582d0c723d7daaf2e99fb5a539be528eef1aa31d6a0757dca2ea1b->enter($__internal_5b9013ec25582d0c723d7daaf2e99fb5a539be528eef1aa31d6a0757dca2ea1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebuyShopFrontBundle:Security:showCart.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b9013ec25582d0c723d7daaf2e99fb5a539be528eef1aa31d6a0757dca2ea1b->leave($__internal_5b9013ec25582d0c723d7daaf2e99fb5a539be528eef1aa31d6a0757dca2ea1b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b1c9cebbb57d27f77cd940ac75cb8255e702419f52729f9baa445a8ccbf70d56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1c9cebbb57d27f77cd940ac75cb8255e702419f52729f9baa445a8ccbf70d56->enter($__internal_b1c9cebbb57d27f77cd940ac75cb8255e702419f52729f9baa445a8ccbf70d56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    ";
        // line 5
        if (array_key_exists("order", $context)) {
            // line 6
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")));
            foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                // line 7
                echo "            ";
                $context["arrayComment"] = $this->getAttribute($this->getAttribute($this->getAttribute($context["data"], "cart", array()), "cp", array()), "getValues", array());
                // line 8
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["arrayComment"]) ? $context["arrayComment"] : $this->getContext($context, "arrayComment")));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 9
                    echo "                <div class=\"rcorners2\">
                    <section>
                        <span class=\"alignleft\">
                            <h2>";
                    // line 12
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "product", array()), "title", array()), "html", null, true);
                    echo "</h2>
                            <h3>";
                    // line 13
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "product", array()), "description", array()), "html", null, true);
                    echo "</h3>

                            <p><h3><a class=\"alignright\" href=\"";
                    // line 15
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_item", array("item" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
                    echo "\">remove</a></h3></p>
                        </span>
                        <span class=\"alignright\">
                            ";
                    // line 18
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "product", array()), "price", array()), 2, ".", ","), "html", null, true);
                    echo " INR
                        </span>
                    </section>
                </div>

            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 24
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "        ";
            if ((isset($context["checkout"]) ? $context["checkout"] : $this->getContext($context, "checkout"))) {
                // line 26
                echo "            <p>
                <a class=\"button\" href=\"";
                // line 27
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("checkout");
                echo "\" style=\"float: right;\">Check-out</a>
            </p>
        ";
            } else {
                // line 30
                echo "            <h1>No item in for checkout</h1>
        ";
            }
            // line 32
            echo "    ";
        }
        
        $__internal_b1c9cebbb57d27f77cd940ac75cb8255e702419f52729f9baa445a8ccbf70d56->leave($__internal_b1c9cebbb57d27f77cd940ac75cb8255e702419f52729f9baa445a8ccbf70d56_prof);

    }

    public function getTemplateName()
    {
        return "WebuyShopFrontBundle:Security:showCart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 32,  108 => 30,  102 => 27,  99 => 26,  96 => 25,  90 => 24,  78 => 18,  72 => 15,  67 => 13,  63 => 12,  58 => 9,  53 => 8,  50 => 7,  45 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'WebuyShopFrontBundle::layout.html.twig' %}

{% block body %}

    {% if order is defined %}
        {% for data in order %}
            {% set arrayComment = data.cart.cp.getValues %}
            {% for item in arrayComment %}
                <div class=\"rcorners2\">
                    <section>
                        <span class=\"alignleft\">
                            <h2>{{  item.product.title }}</h2>
                            <h3>{{ item.product.description }}</h3>

                            <p><h3><a class=\"alignright\" href=\"{{ path('delete_item', {'item': item.id}) }}\">remove</a></h3></p>
                        </span>
                        <span class=\"alignright\">
                            {{  item.product.price|number_format(2, '.', ',')  }} INR
                        </span>
                    </section>
                </div>

            {% endfor %}
        {% endfor %}
        {% if checkout %}
            <p>
                <a class=\"button\" href=\"{{ path('checkout') }}\" style=\"float: right;\">Check-out</a>
            </p>
        {% else %}
            <h1>No item in for checkout</h1>
        {% endif %}
    {% endif %}
{% endblock %}", "WebuyShopFrontBundle:Security:showCart.html.twig", "C:\\xampp\\htdocs\\WebuyShop\\src\\WebuyShop\\FrontBundle/Resources/views/Security/showCart.html.twig");
    }
}
