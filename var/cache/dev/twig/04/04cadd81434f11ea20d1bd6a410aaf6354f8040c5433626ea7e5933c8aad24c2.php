<?php

/* @WebuyShopFront/layout.html.twig */
class __TwigTemplate_ba6816df386f5299231f404a46b2c7c2e024b9cd1a52da20489df10765e0ea0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@WebuyShopFront/layout.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1aab2f72c72efc065c5ab11f36ca0d1468226e1a9cf3f2a418c5bfb6e7e91996 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1aab2f72c72efc065c5ab11f36ca0d1468226e1a9cf3f2a418c5bfb6e7e91996->enter($__internal_1aab2f72c72efc065c5ab11f36ca0d1468226e1a9cf3f2a418c5bfb6e7e91996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebuyShopFront/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1aab2f72c72efc065c5ab11f36ca0d1468226e1a9cf3f2a418c5bfb6e7e91996->leave($__internal_1aab2f72c72efc065c5ab11f36ca0d1468226e1a9cf3f2a418c5bfb6e7e91996_prof);

    }

    public function getTemplateName()
    {
        return "@WebuyShopFront/layout.html.twig";
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
", "@WebuyShopFront/layout.html.twig", "C:\\xampp\\htdocs\\WebuyShop\\src\\WebuyShop\\FrontBundle\\Resources\\views\\layout.html.twig");
    }
}
