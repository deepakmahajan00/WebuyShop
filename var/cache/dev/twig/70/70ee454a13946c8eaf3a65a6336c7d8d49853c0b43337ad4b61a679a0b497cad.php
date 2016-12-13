<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_19031ea198361afe8bafc630c3916dd7937129433f115809cc423625a986dc24 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2ac5526da4c2d39a98a2990e8b077b0ef37b464beb71fee5d26b18c28427e849 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ac5526da4c2d39a98a2990e8b077b0ef37b464beb71fee5d26b18c28427e849->enter($__internal_2ac5526da4c2d39a98a2990e8b077b0ef37b464beb71fee5d26b18c28427e849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_2ac5526da4c2d39a98a2990e8b077b0ef37b464beb71fee5d26b18c28427e849->leave($__internal_2ac5526da4c2d39a98a2990e8b077b0ef37b464beb71fee5d26b18c28427e849_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.rdf.twig", "C:\\xampp\\htdocs\\WebuyShop\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
