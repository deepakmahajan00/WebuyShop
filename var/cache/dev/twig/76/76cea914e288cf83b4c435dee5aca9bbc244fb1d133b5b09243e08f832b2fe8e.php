<?php

/* @WebuyShopFront/Security/categories.html.twig */
class __TwigTemplate_2a14aac450034697554a5901451c957ed69d634cdd12df86839fdbeafd803df7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebuyShopFrontBundle::layout.html.twig", "@WebuyShopFront/Security/categories.html.twig", 1);
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
        $__internal_6227495cdad8c8d8de41d642d76972d26b377e2929e152ac0b571776af485312 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6227495cdad8c8d8de41d642d76972d26b377e2929e152ac0b571776af485312->enter($__internal_6227495cdad8c8d8de41d642d76972d26b377e2929e152ac0b571776af485312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebuyShopFront/Security/categories.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6227495cdad8c8d8de41d642d76972d26b377e2929e152ac0b571776af485312->leave($__internal_6227495cdad8c8d8de41d642d76972d26b377e2929e152ac0b571776af485312_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_719409d8bdec913ef80208b21636458ef8835f146361ab69be56349fb348087a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_719409d8bdec913ef80208b21636458ef8835f146361ab69be56349fb348087a->enter($__internal_719409d8bdec913ef80208b21636458ef8835f146361ab69be56349fb348087a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 5
            echo "        <div class=\"rcorners2\">
            <h2>Category : ";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "categoryName", array()), "html", null, true);
            echo "</h2>
        </div>
            <section>
                <div class=\"container\">
                ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category"], "po", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
                // line 11
                echo "                    <div class=\"row\">
                        <a class=\"link\" href=\"/blog/";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["blog"], "blog", array()), "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["blog"], "blog", array()), "title", array()), "html", null, true);
                echo "</a>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "                </div>
            </section>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_719409d8bdec913ef80208b21636458ef8835f146361ab69be56349fb348087a->leave($__internal_719409d8bdec913ef80208b21636458ef8835f146361ab69be56349fb348087a_prof);

    }

    public function getTemplateName()
    {
        return "@WebuyShopFront/Security/categories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 15,  62 => 12,  59 => 11,  55 => 10,  48 => 6,  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
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
    {% for category in categories %}
        <div class=\"rcorners2\">
            <h2>Category : {{ category.categoryName }}</h2>
        </div>
            <section>
                <div class=\"container\">
                {% for blog in category.po %}
                    <div class=\"row\">
                        <a class=\"link\" href=\"/blog/{{ blog.blog.id }}\">{{ blog.blog.title }}</a>
                    </div>
                {% endfor %}
                </div>
            </section>
    {% endfor %}
{% endblock %}", "@WebuyShopFront/Security/categories.html.twig", "C:\\xampp\\htdocs\\WebuyShop\\src\\WebuyShop\\FrontBundle\\Resources\\views\\Security\\categories.html.twig");
    }
}
