<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_37c475f17350958b4bd7b03f030172190b0f2aab0e386701739046590eccfef8 extends Twig_Template
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
        $__internal_5c472cf9a22f01b46982a6a565194c42cb172011273f890158fc45885ebf122c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c472cf9a22f01b46982a6a565194c42cb172011273f890158fc45885ebf122c->enter($__internal_5c472cf9a22f01b46982a6a565194c42cb172011273f890158fc45885ebf122c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c472cf9a22f01b46982a6a565194c42cb172011273f890158fc45885ebf122c->leave($__internal_5c472cf9a22f01b46982a6a565194c42cb172011273f890158fc45885ebf122c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_14bbd59884309836d92f7c81f32a6bdb3486e51f2ad8ce2036ef81a61015a6a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14bbd59884309836d92f7c81f32a6bdb3486e51f2ad8ce2036ef81a61015a6a9->enter($__internal_14bbd59884309836d92f7c81f32a6bdb3486e51f2ad8ce2036ef81a61015a6a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_14bbd59884309836d92f7c81f32a6bdb3486e51f2ad8ce2036ef81a61015a6a9->leave($__internal_14bbd59884309836d92f7c81f32a6bdb3486e51f2ad8ce2036ef81a61015a6a9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_591839d8b913b5c28247c815e45585cecf47ac0221d1c0e25ac4c304153d6346 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_591839d8b913b5c28247c815e45585cecf47ac0221d1c0e25ac4c304153d6346->enter($__internal_591839d8b913b5c28247c815e45585cecf47ac0221d1c0e25ac4c304153d6346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_591839d8b913b5c28247c815e45585cecf47ac0221d1c0e25ac4c304153d6346->leave($__internal_591839d8b913b5c28247c815e45585cecf47ac0221d1c0e25ac4c304153d6346_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d8c3cc4912ff4f4f67cfd3d981e7b835c6faab75cf80e0d628159023d8edc5d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8c3cc4912ff4f4f67cfd3d981e7b835c6faab75cf80e0d628159023d8edc5d2->enter($__internal_d8c3cc4912ff4f4f67cfd3d981e7b835c6faab75cf80e0d628159023d8edc5d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d8c3cc4912ff4f4f67cfd3d981e7b835c6faab75cf80e0d628159023d8edc5d2->leave($__internal_d8c3cc4912ff4f4f67cfd3d981e7b835c6faab75cf80e0d628159023d8edc5d2_prof);

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
