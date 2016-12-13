<?php

/* WebuyShopFrontBundle:Security:checkout.html.twig */
class __TwigTemplate_decafae31f5a67111f2f2981fa67e316f647893c742c8026b5d28196dc0cc2ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebuyShopFrontBundle::layout.html.twig", "WebuyShopFrontBundle:Security:checkout.html.twig", 1);
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
        $__internal_b0d8ad55a256d54f5d76bca3f9257abaea5ece79af2ad72352560619b6acd2a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0d8ad55a256d54f5d76bca3f9257abaea5ece79af2ad72352560619b6acd2a0->enter($__internal_b0d8ad55a256d54f5d76bca3f9257abaea5ece79af2ad72352560619b6acd2a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebuyShopFrontBundle:Security:checkout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0d8ad55a256d54f5d76bca3f9257abaea5ece79af2ad72352560619b6acd2a0->leave($__internal_b0d8ad55a256d54f5d76bca3f9257abaea5ece79af2ad72352560619b6acd2a0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_28df9092ed89fa4166649e598a7fb1e04ad249387b3ed8737076ecdce9fe5a3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28df9092ed89fa4166649e598a7fb1e04ad249387b3ed8737076ecdce9fe5a3c->enter($__internal_28df9092ed89fa4166649e598a7fb1e04ad249387b3ed8737076ecdce9fe5a3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_28df9092ed89fa4166649e598a7fb1e04ad249387b3ed8737076ecdce9fe5a3c->leave($__internal_28df9092ed89fa4166649e598a7fb1e04ad249387b3ed8737076ecdce9fe5a3c_prof);

    }

    public function getTemplateName()
    {
        return "WebuyShopFrontBundle:Security:checkout.html.twig";
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
{% endblock %}", "WebuyShopFrontBundle:Security:checkout.html.twig", "C:\\xampp\\htdocs\\WebuyShop\\src\\WebuyShop\\FrontBundle/Resources/views/Security/checkout.html.twig");
    }
}
