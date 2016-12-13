<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_28fdd07185ef86ac50ffc7e99ac54692817ffa75ad18ffd1cd2327daf4c5c6dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_a3e75f6d70783bb8ac5852655ef1048f497bf3e2b94deb9ed5ddef02759af04d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3e75f6d70783bb8ac5852655ef1048f497bf3e2b94deb9ed5ddef02759af04d->enter($__internal_a3e75f6d70783bb8ac5852655ef1048f497bf3e2b94deb9ed5ddef02759af04d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3e75f6d70783bb8ac5852655ef1048f497bf3e2b94deb9ed5ddef02759af04d->leave($__internal_a3e75f6d70783bb8ac5852655ef1048f497bf3e2b94deb9ed5ddef02759af04d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0c1cdd6725c28018ece027f6751235d2c68957947a98cc0c1fcd049d3aa0b94c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c1cdd6725c28018ece027f6751235d2c68957947a98cc0c1fcd049d3aa0b94c->enter($__internal_0c1cdd6725c28018ece027f6751235d2c68957947a98cc0c1fcd049d3aa0b94c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_0c1cdd6725c28018ece027f6751235d2c68957947a98cc0c1fcd049d3aa0b94c->leave($__internal_0c1cdd6725c28018ece027f6751235d2c68957947a98cc0c1fcd049d3aa0b94c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_50e6165e932cf5d21a345bf8b0c63e5265b0fff736da33eaf5811860b4ae290e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50e6165e932cf5d21a345bf8b0c63e5265b0fff736da33eaf5811860b4ae290e->enter($__internal_50e6165e932cf5d21a345bf8b0c63e5265b0fff736da33eaf5811860b4ae290e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_50e6165e932cf5d21a345bf8b0c63e5265b0fff736da33eaf5811860b4ae290e->leave($__internal_50e6165e932cf5d21a345bf8b0c63e5265b0fff736da33eaf5811860b4ae290e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\WebuyShop\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
