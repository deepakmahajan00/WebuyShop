<?php

/* WebuyShopFrontBundle:Security:categories.html.twig */
class __TwigTemplate_deb419350f0843f7ea3e43a0c374a01939559b16d01ceff9dd51023b142822f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebuyShopFrontBundle::layout.html.twig", "WebuyShopFrontBundle:Security:categories.html.twig", 1);
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
        $__internal_da09b2a0813cdb3d791714008dff77219f082bca17e214878491c1ecdbc97490 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da09b2a0813cdb3d791714008dff77219f082bca17e214878491c1ecdbc97490->enter($__internal_da09b2a0813cdb3d791714008dff77219f082bca17e214878491c1ecdbc97490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebuyShopFrontBundle:Security:categories.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da09b2a0813cdb3d791714008dff77219f082bca17e214878491c1ecdbc97490->leave($__internal_da09b2a0813cdb3d791714008dff77219f082bca17e214878491c1ecdbc97490_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_47b59c8830c294f118727bdd570f2cc3043b3226e75d9fa2407f830d5c0195f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47b59c8830c294f118727bdd570f2cc3043b3226e75d9fa2407f830d5c0195f0->enter($__internal_47b59c8830c294f118727bdd570f2cc3043b3226e75d9fa2407f830d5c0195f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_47b59c8830c294f118727bdd570f2cc3043b3226e75d9fa2407f830d5c0195f0->leave($__internal_47b59c8830c294f118727bdd570f2cc3043b3226e75d9fa2407f830d5c0195f0_prof);

    }

    public function getTemplateName()
    {
        return "WebuyShopFrontBundle:Security:categories.html.twig";
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
{% endblock %}", "WebuyShopFrontBundle:Security:categories.html.twig", "C:\\xampp\\htdocs\\WebuyShop\\src\\WebuyShop\\FrontBundle/Resources/views/Security/categories.html.twig");
    }
}
