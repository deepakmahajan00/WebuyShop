<?php

/* @WebuyShopFront/Security/addCart.html.twig */
class __TwigTemplate_0acde678b28d7b109f1ea1ae15794e958bcf9fae5e3cbf473390a7d1ffb6fb8c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c0ac9e0a5913b24d8f4f3dc99e8c827ae6ef5e7a61e19117e20867bbddb25108 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0ac9e0a5913b24d8f4f3dc99e8c827ae6ef5e7a61e19117e20867bbddb25108->enter($__internal_c0ac9e0a5913b24d8f4f3dc99e8c827ae6ef5e7a61e19117e20867bbddb25108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebuyShopFront/Security/addCart.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_c0ac9e0a5913b24d8f4f3dc99e8c827ae6ef5e7a61e19117e20867bbddb25108->leave($__internal_c0ac9e0a5913b24d8f4f3dc99e8c827ae6ef5e7a61e19117e20867bbddb25108_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_504eb9ef66d60890ac768276fc26f6ef32374056ceb71e5b0ddcfe7e5086f8fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_504eb9ef66d60890ac768276fc26f6ef32374056ceb71e5b0ddcfe7e5086f8fc->enter($__internal_504eb9ef66d60890ac768276fc26f6ef32374056ceb71e5b0ddcfe7e5086f8fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "   ";
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
        echo "
";
        
        $__internal_504eb9ef66d60890ac768276fc26f6ef32374056ceb71e5b0ddcfe7e5086f8fc->leave($__internal_504eb9ef66d60890ac768276fc26f6ef32374056ceb71e5b0ddcfe7e5086f8fc_prof);

    }

    public function getTemplateName()
    {
        return "@WebuyShopFront/Security/addCart.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  35 => 2,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block body %}
   {{ message }}
{% endblock %}", "@WebuyShopFront/Security/addCart.html.twig", "C:\\xampp\\htdocs\\WebuyShop\\src\\WebuyShop\\FrontBundle\\Resources\\views\\Security\\addCart.html.twig");
    }
}
