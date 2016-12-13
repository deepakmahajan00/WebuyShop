<?php

/* @WebuyShopFront/Security/myOrders.html.twig */
class __TwigTemplate_2026c797d1139510b7e5ceeca3cef6ebb801363756d4dcea03ad032c4c20ad82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebuyShopFrontBundle::layout.html.twig", "@WebuyShopFront/Security/myOrders.html.twig", 1);
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
        $__internal_5c332ef6ee1103b4ed854c24db616c09039319940446e14df770ad7e5f3dd89e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c332ef6ee1103b4ed854c24db616c09039319940446e14df770ad7e5f3dd89e->enter($__internal_5c332ef6ee1103b4ed854c24db616c09039319940446e14df770ad7e5f3dd89e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebuyShopFront/Security/myOrders.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c332ef6ee1103b4ed854c24db616c09039319940446e14df770ad7e5f3dd89e->leave($__internal_5c332ef6ee1103b4ed854c24db616c09039319940446e14df770ad7e5f3dd89e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e0208d8fd795d36e18f9af3bbebda2c4c0931dc79a2263ea770d8e3a7c33b95b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0208d8fd795d36e18f9af3bbebda2c4c0931dc79a2263ea770d8e3a7c33b95b->enter($__internal_e0208d8fd795d36e18f9af3bbebda2c4c0931dc79a2263ea770d8e3a7c33b95b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                    <td>Product</td>
                    <td>Price</td>
                    <td>Status</td>
                </thead>
            ";
                // line 14
                $context["arrayComment"] = $this->getAttribute($this->getAttribute($this->getAttribute($context["data"], "cart", array()), "cp", array()), "getValues", array());
                // line 15
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["arrayComment"]) ? $context["arrayComment"] : $this->getContext($context, "arrayComment")));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 16
                    echo "                <tr>

                    <td>";
                    // line 18
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "product", array()), "title", array()), "html", null, true);
                    echo "</td>
                    <td>";
                    // line 19
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "product", array()), "price", array()), 2, ".", ","), "html", null, true);
                    echo " INR</td>
                    <td>
                    ";
                    // line 21
                    if (($this->getAttribute($context["data"], "status", array()) == 1)) {
                        // line 22
                        echo "                        ORDERED
                    ";
                    } elseif (($this->getAttribute(                    // line 23
$context["data"], "status", array()) == 2)) {
                        // line 24
                        echo "                        PROCESSED
                    ";
                    } elseif (($this->getAttribute(                    // line 25
$context["data"], "status", array()) == 3)) {
                        // line 26
                        echo "                        APPROVED
                    ";
                    }
                    // line 28
                    echo "                    </td>
                </tr>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 31
                echo "            </table>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "
    ";
        } else {
            // line 35
            echo "        <h1>No order made yet</h1>
    ";
        }
        // line 37
        echo "
";
        
        $__internal_e0208d8fd795d36e18f9af3bbebda2c4c0931dc79a2263ea770d8e3a7c33b95b->leave($__internal_e0208d8fd795d36e18f9af3bbebda2c4c0931dc79a2263ea770d8e3a7c33b95b_prof);

    }

    public function getTemplateName()
    {
        return "@WebuyShopFront/Security/myOrders.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 37,  116 => 35,  112 => 33,  105 => 31,  97 => 28,  93 => 26,  91 => 25,  88 => 24,  86 => 23,  83 => 22,  81 => 21,  76 => 19,  72 => 18,  68 => 16,  63 => 15,  61 => 14,  50 => 7,  45 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
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
                    <td>Product</td>
                    <td>Price</td>
                    <td>Status</td>
                </thead>
            {% set arrayComment = data.cart.cp.getValues %}
            {% for item in arrayComment %}
                <tr>

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

{% endblock %}", "@WebuyShopFront/Security/myOrders.html.twig", "C:\\xampp\\htdocs\\WebuyShop\\src\\WebuyShop\\FrontBundle\\Resources\\views\\Security\\myOrders.html.twig");
    }
}
