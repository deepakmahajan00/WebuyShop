<?php

/* @WebuyShopFront/Security/homepage.html.twig */
class __TwigTemplate_a1d9717db1ee14adc86c47478c9fa5da2eb24735f6d853b4fa1629e71c92edf2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebuyShopFrontBundle::layout.html.twig", "@WebuyShopFront/Security/homepage.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebuyShopFrontBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_25d429b429a19e8d3459276b1e41736b63df5accbd11c07c93e689c920710f98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25d429b429a19e8d3459276b1e41736b63df5accbd11c07c93e689c920710f98->enter($__internal_25d429b429a19e8d3459276b1e41736b63df5accbd11c07c93e689c920710f98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebuyShopFront/Security/homepage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25d429b429a19e8d3459276b1e41736b63df5accbd11c07c93e689c920710f98->leave($__internal_25d429b429a19e8d3459276b1e41736b63df5accbd11c07c93e689c920710f98_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fa70f7caf40059fe39df085919037f33bcebdf3483ed6923c7206917022b24ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa70f7caf40059fe39df085919037f33bcebdf3483ed6923c7206917022b24ec->enter($__internal_fa70f7caf40059fe39df085919037f33bcebdf3483ed6923c7206917022b24ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"alignright\">
        <span>Sort By :</span>
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 7
            echo "            <a class=\"navigation-link\" href=\"/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "categoryName", array()), "html", null, true);
            echo "</a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "    </div>
    <div>
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 12
            echo "            <div class=\"rcorners2\">
                <section>
                    <h2><a class=\"link\" href=\"/blog/";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "title", array()), "html", null, true);
            echo "</a></h2>
                    <p>
                        <span>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "description", array()), "html", null, true);
            echo "</span>
                        <span class=\"alignright\">
                            <a id=\"add_product_cart\" class=\"button\"  href=\"";
            // line 18
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_cart");
            echo "\" url-data=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
            echo "\" rel=\"nofollow\" style=\"float: left;\">Add Cart</a>
                        </span>
                    </p>
                    <p>
                    <span class=\"alignleft\"><strong>Category :</strong>
                        ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "category", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 24
                echo "                            <a class=\"navigation-link\" href=\"/blog-category/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "categoryName", array()), "html", null, true);
                echo "</a>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "                    </span>
                        <span class=\"alignright\"><strong>Created At :</strong> ";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["product"], "createdAt", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</span>
                    </p>

                </section>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "    </div>
";
        
        $__internal_fa70f7caf40059fe39df085919037f33bcebdf3483ed6923c7206917022b24ec->leave($__internal_fa70f7caf40059fe39df085919037f33bcebdf3483ed6923c7206917022b24ec_prof);

    }

    // line 35
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8e4b9cefae57ffd959bf539a13453d52324662dfc0452ee20f2f092fdb9540de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e4b9cefae57ffd959bf539a13453d52324662dfc0452ee20f2f092fdb9540de->enter($__internal_8e4b9cefae57ffd959bf539a13453d52324662dfc0452ee20f2f092fdb9540de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 36
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script>
        \$(document).ready(function() {
            \$('.button').on('click', function(e) {
                e.preventDefault();

                var \$anchor = \$(this);
                var url = \$(this).attr('href');

                \$.ajax({
                    type: \"POST\",
                    url: url,
                    data: {
                        product: \$(this).attr('url-data')
                    },
                    dataType: \"json\",
                    success: function(response) {
                    },
                    error: function (response) {
                        \$anchor.after('<span>&#10004; Added! </span>');
                    }
                });
            });
        });
    </script>
";
        
        $__internal_8e4b9cefae57ffd959bf539a13453d52324662dfc0452ee20f2f092fdb9540de->leave($__internal_8e4b9cefae57ffd959bf539a13453d52324662dfc0452ee20f2f092fdb9540de_prof);

    }

    public function getTemplateName()
    {
        return "@WebuyShopFront/Security/homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 36,  132 => 35,  124 => 33,  112 => 27,  109 => 26,  98 => 24,  94 => 23,  84 => 18,  79 => 16,  72 => 14,  68 => 12,  64 => 11,  60 => 9,  49 => 7,  45 => 6,  41 => 4,  35 => 3,  11 => 1,);
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
    <div class=\"alignright\">
        <span>Sort By :</span>
        {% for category in categories %}
            <a class=\"navigation-link\" href=\"/{{ category.id }}\">{{ category.categoryName }}</a>
        {% endfor %}
    </div>
    <div>
        {% for product in products %}
            <div class=\"rcorners2\">
                <section>
                    <h2><a class=\"link\" href=\"/blog/{{ product.id }}\">{{ product.title }}</a></h2>
                    <p>
                        <span>{{ product.description }}</span>
                        <span class=\"alignright\">
                            <a id=\"add_product_cart\" class=\"button\"  href=\"{{ path('add_cart') }}\" url-data=\"{{ product.id }}\" rel=\"nofollow\" style=\"float: left;\">Add Cart</a>
                        </span>
                    </p>
                    <p>
                    <span class=\"alignleft\"><strong>Category :</strong>
                        {% for category in product.category %}
                            <a class=\"navigation-link\" href=\"/blog-category/{{ category.id }}\">{{ category.categoryName }}</a>
                        {% endfor %}
                    </span>
                        <span class=\"alignright\"><strong>Created At :</strong> {{ product.createdAt|date('Y-m-d H:i:s') }}</span>
                    </p>

                </section>
            </div>
        {% endfor %}
    </div>
{% endblock %}
{% block javascripts %}
    {{ parent() }}

    <script>
        \$(document).ready(function() {
            \$('.button').on('click', function(e) {
                e.preventDefault();

                var \$anchor = \$(this);
                var url = \$(this).attr('href');

                \$.ajax({
                    type: \"POST\",
                    url: url,
                    data: {
                        product: \$(this).attr('url-data')
                    },
                    dataType: \"json\",
                    success: function(response) {
                    },
                    error: function (response) {
                        \$anchor.after('<span>&#10004; Added! </span>');
                    }
                });
            });
        });
    </script>
{% endblock %}", "@WebuyShopFront/Security/homepage.html.twig", "C:\\xampp\\htdocs\\WebuyShop\\src\\WebuyShop\\FrontBundle\\Resources\\views\\Security\\homepage.html.twig");
    }
}
