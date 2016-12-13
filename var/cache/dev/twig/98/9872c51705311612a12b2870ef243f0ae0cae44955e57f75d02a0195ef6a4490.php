<?php

/* WebuyShopFrontBundle:Security:myOrders.html.twig */
class __TwigTemplate_7a78db38a7d931a4e6fcba39e71f9a8e21e37de3975925296bff52e39982d52b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebuyShopFrontBundle::layout.html.twig", "WebuyShopFrontBundle:Security:myOrders.html.twig", 1);
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
        $__internal_3bdf194bde0f481befcac4a897f7132a1027ef918cf6ca5f83f70a1bb3e86dd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bdf194bde0f481befcac4a897f7132a1027ef918cf6ca5f83f70a1bb3e86dd7->enter($__internal_3bdf194bde0f481befcac4a897f7132a1027ef918cf6ca5f83f70a1bb3e86dd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebuyShopFrontBundle:Security:myOrders.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3bdf194bde0f481befcac4a897f7132a1027ef918cf6ca5f83f70a1bb3e86dd7->leave($__internal_3bdf194bde0f481befcac4a897f7132a1027ef918cf6ca5f83f70a1bb3e86dd7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e17926caad3ed45ce51f22a008c94662e8bca9d63daaa431abbfab8d5704a979 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e17926caad3ed45ce51f22a008c94662e8bca9d63daaa431abbfab8d5704a979->enter($__internal_e17926caad3ed45ce51f22a008c94662e8bca9d63daaa431abbfab8d5704a979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    ";
        // line 5
        if ((isset($context["orders"]) ? $context["orders"] : $this->getContext($context, "orders"))) {
            // line 6
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["orders"]) ? $context["orders"] : $this->getContext($context, "orders")));
            foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                // line 7
                echo "            <figure> Order :";
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "id", array()), "html", null, true);
                echo "</figure>
            <table class=\"table\">
                <thead>
                    <td>Item</td>
                    <td>Product</td>
                    <td>Price</td>
                    <td>Status</td>
                </thead>
            ";
                // line 15
                $context["arrayComment"] = $this->getAttribute($this->getAttribute($this->getAttribute($context["data"], "cart", array()), "cp", array()), "getValues", array());
                // line 16
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["arrayComment"]) ? $context["arrayComment"] : $this->getContext($context, "arrayComment")));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 17
                    echo "                <tr>
                    <td>";
                    // line 18
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "product", array()), "id", array()), "html", null, true);
                    echo "</td>
                    <td>";
                    // line 19
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "product", array()), "title", array()), "html", null, true);
                    echo "</td>
                    <td>";
                    // line 20
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "product", array()), "price", array()), 2, ".", ","), "html", null, true);
                    echo " INR</td>
                    <td>
                    ";
                    // line 22
                    if (($this->getAttribute($context["data"], "status", array()) == 1)) {
                        // line 23
                        echo "                        ORDERED
                    ";
                    } elseif (($this->getAttribute(                    // line 24
$context["data"], "status", array()) == 2)) {
                        // line 25
                        echo "                        PROCESSED
                    ";
                    } elseif (($this->getAttribute(                    // line 26
$context["data"], "status", array()) == 3)) {
                        // line 27
                        echo "                        APPROVED
                    ";
                    }
                    // line 29
                    echo "                    </td>
                </tr>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 32
                echo "            </table>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "
    ";
        } else {
            // line 36
            echo "        <h1>No order made yet</h1>
    ";
        }
        // line 38
        echo "
";
        
        $__internal_e17926caad3ed45ce51f22a008c94662e8bca9d63daaa431abbfab8d5704a979->leave($__internal_e17926caad3ed45ce51f22a008c94662e8bca9d63daaa431abbfab8d5704a979_prof);

    }

    public function getTemplateName()
    {
        return "WebuyShopFrontBundle:Security:myOrders.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 38,  120 => 36,  116 => 34,  109 => 32,  101 => 29,  97 => 27,  95 => 26,  92 => 25,  90 => 24,  87 => 23,  85 => 22,  80 => 20,  76 => 19,  72 => 18,  69 => 17,  64 => 16,  62 => 15,  50 => 7,  45 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
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

    {% if orders %}
        {% for data in orders %}
            <figure> Order :{{ data.id }}</figure>
            <table class=\"table\">
                <thead>
                    <td>Item</td>
                    <td>Product</td>
                    <td>Price</td>
                    <td>Status</td>
                </thead>
            {% set arrayComment = data.cart.cp.getValues %}
            {% for item in arrayComment %}
                <tr>
                    <td>{{  item.product.id }}</td>
                    <td>{{  item.product.title }}</td>
                    <td>{{  item.product.price|number_format(2, '.', ',')  }} INR</td>
                    <td>
                    {% if data.status == 1 %}
                        ORDERED
                    {% elseif data.status == 2 %}
                        PROCESSED
                    {% elseif data.status == 3 %}
                        APPROVED
                    {% endif %}
                    </td>
                </tr>
            {% endfor %}
            </table>
        {% endfor %}

    {% else %}
        <h1>No order made yet</h1>
    {% endif %}

{% endblock %}", "WebuyShopFrontBundle:Security:myOrders.html.twig", "C:\\xampp\\htdocs\\WebuyShop\\src\\WebuyShop\\FrontBundle/Resources/views/Security/myOrders.html.twig");
    }
}
