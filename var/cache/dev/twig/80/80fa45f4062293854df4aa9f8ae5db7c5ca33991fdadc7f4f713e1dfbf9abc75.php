<?php

/* WebuyShopFrontBundle::layout.html.twig */
class __TwigTemplate_0d2e5b318efa373a3264e7dfdc3c02eb9512909dfaf3ad6e28619e9efae31ba3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "WebuyShopFrontBundle::layout.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_76ccdaebe6898a073956eafa65be66bc64738dc2c587d3b916948b18080830dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76ccdaebe6898a073956eafa65be66bc64738dc2c587d3b916948b18080830dc->enter($__internal_76ccdaebe6898a073956eafa65be66bc64738dc2c587d3b916948b18080830dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebuyShopFrontBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76ccdaebe6898a073956eafa65be66bc64738dc2c587d3b916948b18080830dc->leave($__internal_76ccdaebe6898a073956eafa65be66bc64738dc2c587d3b916948b18080830dc_prof);

    }

    public function getTemplateName()
    {
        return "WebuyShopFrontBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}
", "WebuyShopFrontBundle::layout.html.twig", "C:\\xampp\\htdocs\\WebuyShop\\src\\WebuyShop\\FrontBundle/Resources/views/layout.html.twig");
    }
}
