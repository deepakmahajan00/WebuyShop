<?php

/* @WebuyShopFront/Default/index.html.twig */
class __TwigTemplate_c01d57ef41f4097dd90c9c2a30d1398db22f10172795000c9ee6b2b5e689accc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebuyShopFrontBundle::layout.html.twig", "@WebuyShopFront/Default/index.html.twig", 1);
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
        $__internal_7f701d89b5ecaeeaa5b2e67730614dd6ec822407f5dc3372972b7a3c6c3e994d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f701d89b5ecaeeaa5b2e67730614dd6ec822407f5dc3372972b7a3c6c3e994d->enter($__internal_7f701d89b5ecaeeaa5b2e67730614dd6ec822407f5dc3372972b7a3c6c3e994d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebuyShopFront/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f701d89b5ecaeeaa5b2e67730614dd6ec822407f5dc3372972b7a3c6c3e994d->leave($__internal_7f701d89b5ecaeeaa5b2e67730614dd6ec822407f5dc3372972b7a3c6c3e994d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8d4fd3c3d034853e8d9e216b38cb70cfcdf6a8dfe5c348c678edc1285593bed7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d4fd3c3d034853e8d9e216b38cb70cfcdf6a8dfe5c348c678edc1285593bed7->enter($__internal_8d4fd3c3d034853e8d9e216b38cb70cfcdf6a8dfe5c348c678edc1285593bed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "
";
        
        $__internal_8d4fd3c3d034853e8d9e216b38cb70cfcdf6a8dfe5c348c678edc1285593bed7->leave($__internal_8d4fd3c3d034853e8d9e216b38cb70cfcdf6a8dfe5c348c678edc1285593bed7_prof);

    }

    public function getTemplateName()
    {
        return "@WebuyShopFront/Default/index.html.twig";
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
{% endblock %}", "@WebuyShopFront/Default/index.html.twig", "C:\\xampp\\htdocs\\WebuyShop\\src\\WebuyShop\\FrontBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
