<?php

/* WebuyShopFrontBundle:Default:index.html.twig */
class __TwigTemplate_532f1b680fb0be29b311792f9bc8b0aa7e84e25129f882ce26383ff46987c1b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebuyShopFrontBundle::layout.html.twig", "WebuyShopFrontBundle:Default:index.html.twig", 1);
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
        $__internal_d37f496b1013aae170bd58db54d3f20ae5cda962e00fd8c6134eb7df6c703e6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d37f496b1013aae170bd58db54d3f20ae5cda962e00fd8c6134eb7df6c703e6f->enter($__internal_d37f496b1013aae170bd58db54d3f20ae5cda962e00fd8c6134eb7df6c703e6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebuyShopFrontBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d37f496b1013aae170bd58db54d3f20ae5cda962e00fd8c6134eb7df6c703e6f->leave($__internal_d37f496b1013aae170bd58db54d3f20ae5cda962e00fd8c6134eb7df6c703e6f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_290d26047b3a6d5327916c86b6168e10410dbf9b4d4ac5edf4a7c325db9091a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_290d26047b3a6d5327916c86b6168e10410dbf9b4d4ac5edf4a7c325db9091a5->enter($__internal_290d26047b3a6d5327916c86b6168e10410dbf9b4d4ac5edf4a7c325db9091a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "
";
        
        $__internal_290d26047b3a6d5327916c86b6168e10410dbf9b4d4ac5edf4a7c325db9091a5->leave($__internal_290d26047b3a6d5327916c86b6168e10410dbf9b4d4ac5edf4a7c325db9091a5_prof);

    }

    public function getTemplateName()
    {
        return "WebuyShopFrontBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
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
    {{ name }}
{% endblock %}", "WebuyShopFrontBundle:Default:index.html.twig", "C:\\xampp\\htdocs\\WebuyShop\\src\\WebuyShop\\FrontBundle/Resources/views/Default/index.html.twig");
    }
}
