<?php

/* @WebuyShopFront/Security/checkout.html.twig */
class __TwigTemplate_b3abd47be4bb16a7c7c6232039ec14e7eb9815c167f2703b6b31e0df27c374f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebuyShopFrontBundle::layout.html.twig", "@WebuyShopFront/Security/checkout.html.twig", 1);
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
        $__internal_5ed9134dcf12c5c6eead4225f46cdd0ed7d01a9640f6894e100c352171ec5436 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ed9134dcf12c5c6eead4225f46cdd0ed7d01a9640f6894e100c352171ec5436->enter($__internal_5ed9134dcf12c5c6eead4225f46cdd0ed7d01a9640f6894e100c352171ec5436_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebuyShopFront/Security/checkout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ed9134dcf12c5c6eead4225f46cdd0ed7d01a9640f6894e100c352171ec5436->leave($__internal_5ed9134dcf12c5c6eead4225f46cdd0ed7d01a9640f6894e100c352171ec5436_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cb51ddd19c714171f293ba5333ff2c4cdbfa8286c0d87f50e4cf2f99873e4923 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb51ddd19c714171f293ba5333ff2c4cdbfa8286c0d87f50e4cf2f99873e4923->enter($__internal_cb51ddd19c714171f293ba5333ff2c4cdbfa8286c0d87f50e4cf2f99873e4923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    ";
        // line 5
        if (array_key_exists("message", $context)) {
            // line 6
            echo "        <h1>";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "</h1>
    ";
        }
        
        $__internal_cb51ddd19c714171f293ba5333ff2c4cdbfa8286c0d87f50e4cf2f99873e4923->leave($__internal_cb51ddd19c714171f293ba5333ff2c4cdbfa8286c0d87f50e4cf2f99873e4923_prof);

    }

    public function getTemplateName()
    {
        return "@WebuyShopFront/Security/checkout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
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

    {% if message is defined %}
        <h1>{{ message }}</h1>
    {% endif %}
{% endblock %}", "@WebuyShopFront/Security/checkout.html.twig", "C:\\xampp\\htdocs\\WebuyShop\\src\\WebuyShop\\FrontBundle\\Resources\\views\\Security\\checkout.html.twig");
    }
}
