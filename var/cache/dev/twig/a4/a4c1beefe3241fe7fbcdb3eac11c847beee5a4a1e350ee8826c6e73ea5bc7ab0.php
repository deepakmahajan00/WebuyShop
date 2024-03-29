<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_06de0779e1b94289fb2e94a8b1292d0126d4f33b8971580456d993df17bbf8f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_389b38e16d8ee99f871eeb31a9488f31ea5136603912fde7416171afbfc01c54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_389b38e16d8ee99f871eeb31a9488f31ea5136603912fde7416171afbfc01c54->enter($__internal_389b38e16d8ee99f871eeb31a9488f31ea5136603912fde7416171afbfc01c54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_389b38e16d8ee99f871eeb31a9488f31ea5136603912fde7416171afbfc01c54->leave($__internal_389b38e16d8ee99f871eeb31a9488f31ea5136603912fde7416171afbfc01c54_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e8448b89c5928a7e70eae8030160aaa34d64f9b38d77e27615e93230bd0ede27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8448b89c5928a7e70eae8030160aaa34d64f9b38d77e27615e93230bd0ede27->enter($__internal_e8448b89c5928a7e70eae8030160aaa34d64f9b38d77e27615e93230bd0ede27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e8448b89c5928a7e70eae8030160aaa34d64f9b38d77e27615e93230bd0ede27->leave($__internal_e8448b89c5928a7e70eae8030160aaa34d64f9b38d77e27615e93230bd0ede27_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_04d3dc653f55d1ddffaa14d43e237c674619496a7cbdce3b914360790ad45b92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04d3dc653f55d1ddffaa14d43e237c674619496a7cbdce3b914360790ad45b92->enter($__internal_04d3dc653f55d1ddffaa14d43e237c674619496a7cbdce3b914360790ad45b92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_04d3dc653f55d1ddffaa14d43e237c674619496a7cbdce3b914360790ad45b92->leave($__internal_04d3dc653f55d1ddffaa14d43e237c674619496a7cbdce3b914360790ad45b92_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4c428d7dfc7bd561c847cd5b925c7cf384a118ce14857a583d8cdcffb469b728 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c428d7dfc7bd561c847cd5b925c7cf384a118ce14857a583d8cdcffb469b728->enter($__internal_4c428d7dfc7bd561c847cd5b925c7cf384a118ce14857a583d8cdcffb469b728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_4c428d7dfc7bd561c847cd5b925c7cf384a118ce14857a583d8cdcffb469b728->leave($__internal_4c428d7dfc7bd561c847cd5b925c7cf384a118ce14857a583d8cdcffb469b728_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\WebuyShop\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
