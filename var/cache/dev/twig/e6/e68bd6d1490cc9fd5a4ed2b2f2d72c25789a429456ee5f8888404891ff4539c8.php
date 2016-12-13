<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_462310c5996f75b73b2e96e86bb5f6a80ff43ed6f43a923da0aa25133dd0d59a extends Twig_Template
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
        $__internal_6bde7c5e9b2ef6010388894c90e3c4a1eb28c56f40c21d13eaa0a9a9cbf11d35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bde7c5e9b2ef6010388894c90e3c4a1eb28c56f40c21d13eaa0a9a9cbf11d35->enter($__internal_6bde7c5e9b2ef6010388894c90e3c4a1eb28c56f40c21d13eaa0a9a9cbf11d35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_6bde7c5e9b2ef6010388894c90e3c4a1eb28c56f40c21d13eaa0a9a9cbf11d35->leave($__internal_6bde7c5e9b2ef6010388894c90e3c4a1eb28c56f40c21d13eaa0a9a9cbf11d35_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_dc7190fc384c6693ae664cf6818661efa181e019f5bbbfa674b3951b74806f6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc7190fc384c6693ae664cf6818661efa181e019f5bbbfa674b3951b74806f6d->enter($__internal_dc7190fc384c6693ae664cf6818661efa181e019f5bbbfa674b3951b74806f6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_dc7190fc384c6693ae664cf6818661efa181e019f5bbbfa674b3951b74806f6d->leave($__internal_dc7190fc384c6693ae664cf6818661efa181e019f5bbbfa674b3951b74806f6d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\xampp\\htdocs\\WebuyShop\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
