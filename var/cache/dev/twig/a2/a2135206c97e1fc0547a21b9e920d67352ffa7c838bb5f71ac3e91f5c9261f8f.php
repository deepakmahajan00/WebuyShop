<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e81f9da08e9af25d84b80139bf15f43acfc710a2147bcf20de9d9f40bfae9b48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a8d25e3ccdf40913e76d74712ddd3b2f6f45f9cab6a93b6ceddb49231d47941c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8d25e3ccdf40913e76d74712ddd3b2f6f45f9cab6a93b6ceddb49231d47941c->enter($__internal_a8d25e3ccdf40913e76d74712ddd3b2f6f45f9cab6a93b6ceddb49231d47941c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8d25e3ccdf40913e76d74712ddd3b2f6f45f9cab6a93b6ceddb49231d47941c->leave($__internal_a8d25e3ccdf40913e76d74712ddd3b2f6f45f9cab6a93b6ceddb49231d47941c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3f6080a8d1534871ac23a4990f19e10e4c46771e3e1cb78332b3141a8aff3abf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f6080a8d1534871ac23a4990f19e10e4c46771e3e1cb78332b3141a8aff3abf->enter($__internal_3f6080a8d1534871ac23a4990f19e10e4c46771e3e1cb78332b3141a8aff3abf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3f6080a8d1534871ac23a4990f19e10e4c46771e3e1cb78332b3141a8aff3abf->leave($__internal_3f6080a8d1534871ac23a4990f19e10e4c46771e3e1cb78332b3141a8aff3abf_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_92f4b500c327e9c680f58e243064b698e537e9ca6054e15dc2bea358be33313b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92f4b500c327e9c680f58e243064b698e537e9ca6054e15dc2bea358be33313b->enter($__internal_92f4b500c327e9c680f58e243064b698e537e9ca6054e15dc2bea358be33313b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_92f4b500c327e9c680f58e243064b698e537e9ca6054e15dc2bea358be33313b->leave($__internal_92f4b500c327e9c680f58e243064b698e537e9ca6054e15dc2bea358be33313b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_380fdc98db4dde3111a1c208c76364795f9efae9ac9c4dbff613bf34fdc1a828 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_380fdc98db4dde3111a1c208c76364795f9efae9ac9c4dbff613bf34fdc1a828->enter($__internal_380fdc98db4dde3111a1c208c76364795f9efae9ac9c4dbff613bf34fdc1a828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_380fdc98db4dde3111a1c208c76364795f9efae9ac9c4dbff613bf34fdc1a828->leave($__internal_380fdc98db4dde3111a1c208c76364795f9efae9ac9c4dbff613bf34fdc1a828_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\WebuyShop\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
