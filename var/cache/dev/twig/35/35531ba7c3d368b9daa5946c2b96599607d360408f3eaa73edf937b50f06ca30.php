<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_b7a0680b2de17c6ef9bb88ffee708cab2885c359f408357aa54827ffcb638b32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_af580bec2693014212dcc70ff6ef8872518605efb4bba4eacf5ed914b5f355ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af580bec2693014212dcc70ff6ef8872518605efb4bba4eacf5ed914b5f355ef->enter($__internal_af580bec2693014212dcc70ff6ef8872518605efb4bba4eacf5ed914b5f355ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af580bec2693014212dcc70ff6ef8872518605efb4bba4eacf5ed914b5f355ef->leave($__internal_af580bec2693014212dcc70ff6ef8872518605efb4bba4eacf5ed914b5f355ef_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6abd3d54d69f8805d004f98f32a94e42e3cc616e6a94f045623bf1732128ec97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6abd3d54d69f8805d004f98f32a94e42e3cc616e6a94f045623bf1732128ec97->enter($__internal_6abd3d54d69f8805d004f98f32a94e42e3cc616e6a94f045623bf1732128ec97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6abd3d54d69f8805d004f98f32a94e42e3cc616e6a94f045623bf1732128ec97->leave($__internal_6abd3d54d69f8805d004f98f32a94e42e3cc616e6a94f045623bf1732128ec97_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_875da20f94fea7a4a6464f9d575045733953a1e44b362a1be48b7702c8bf8f4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_875da20f94fea7a4a6464f9d575045733953a1e44b362a1be48b7702c8bf8f4e->enter($__internal_875da20f94fea7a4a6464f9d575045733953a1e44b362a1be48b7702c8bf8f4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_875da20f94fea7a4a6464f9d575045733953a1e44b362a1be48b7702c8bf8f4e->leave($__internal_875da20f94fea7a4a6464f9d575045733953a1e44b362a1be48b7702c8bf8f4e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bcfd0dcbdfb27eeaf187cfc98c1dd8686aac9690392e053f1d548a6ae5bbb6c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcfd0dcbdfb27eeaf187cfc98c1dd8686aac9690392e053f1d548a6ae5bbb6c3->enter($__internal_bcfd0dcbdfb27eeaf187cfc98c1dd8686aac9690392e053f1d548a6ae5bbb6c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_bcfd0dcbdfb27eeaf187cfc98c1dd8686aac9690392e053f1d548a6ae5bbb6c3->leave($__internal_bcfd0dcbdfb27eeaf187cfc98c1dd8686aac9690392e053f1d548a6ae5bbb6c3_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "C:\\xampp\\htdocs\\WebuyShop\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
