<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_e1617e7c36d2f124916bf8f42c7ae15689edcd25100c9d18204319d9752922ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_93b45c2bd349da5d1f45fcbeddf748aa7e67fc6fd35c5ca6731a444260e2ce90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93b45c2bd349da5d1f45fcbeddf748aa7e67fc6fd35c5ca6731a444260e2ce90->enter($__internal_93b45c2bd349da5d1f45fcbeddf748aa7e67fc6fd35c5ca6731a444260e2ce90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93b45c2bd349da5d1f45fcbeddf748aa7e67fc6fd35c5ca6731a444260e2ce90->leave($__internal_93b45c2bd349da5d1f45fcbeddf748aa7e67fc6fd35c5ca6731a444260e2ce90_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8ccf352bf1e70ef7da7b9b238168a24c8d9332073c715935c2a7e2f5107ca6ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ccf352bf1e70ef7da7b9b238168a24c8d9332073c715935c2a7e2f5107ca6ab->enter($__internal_8ccf352bf1e70ef7da7b9b238168a24c8d9332073c715935c2a7e2f5107ca6ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_8ccf352bf1e70ef7da7b9b238168a24c8d9332073c715935c2a7e2f5107ca6ab->leave($__internal_8ccf352bf1e70ef7da7b9b238168a24c8d9332073c715935c2a7e2f5107ca6ab_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_61cbe296773a5455756924f0bad620ee4d7ec223c22ecd5e5d0b6a303ad07430 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61cbe296773a5455756924f0bad620ee4d7ec223c22ecd5e5d0b6a303ad07430->enter($__internal_61cbe296773a5455756924f0bad620ee4d7ec223c22ecd5e5d0b6a303ad07430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_61cbe296773a5455756924f0bad620ee4d7ec223c22ecd5e5d0b6a303ad07430->leave($__internal_61cbe296773a5455756924f0bad620ee4d7ec223c22ecd5e5d0b6a303ad07430_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\WebuyShop\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
