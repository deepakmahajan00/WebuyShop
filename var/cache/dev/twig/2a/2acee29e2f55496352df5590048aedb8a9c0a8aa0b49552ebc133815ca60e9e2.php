<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_2814feb698669df30dd033b9ca4bf99eccb7be41ef19f72287b93f5a985d9f08 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fc7e13be7703fd4cd3e2487f3332261668b7fa01769f1f6c3f6bbfaaa70ae801 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc7e13be7703fd4cd3e2487f3332261668b7fa01769f1f6c3f6bbfaaa70ae801->enter($__internal_fc7e13be7703fd4cd3e2487f3332261668b7fa01769f1f6c3f6bbfaaa70ae801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_fc7e13be7703fd4cd3e2487f3332261668b7fa01769f1f6c3f6bbfaaa70ae801->leave($__internal_fc7e13be7703fd4cd3e2487f3332261668b7fa01769f1f6c3f6bbfaaa70ae801_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_1e1d285d294bee155013bcf7757630526e909ba4eebabfee628e214d4137450e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e1d285d294bee155013bcf7757630526e909ba4eebabfee628e214d4137450e->enter($__internal_1e1d285d294bee155013bcf7757630526e909ba4eebabfee628e214d4137450e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_1e1d285d294bee155013bcf7757630526e909ba4eebabfee628e214d4137450e->leave($__internal_1e1d285d294bee155013bcf7757630526e909ba4eebabfee628e214d4137450e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\xampp\\htdocs\\WebuyShop\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
