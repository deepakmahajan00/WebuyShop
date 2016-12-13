<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_673c2a8a3497d89144b2c698d27d890d35d97e1db53fc90b398c283e43dc26cb extends Twig_Template
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
        $__internal_7fcd63df25ce322bb307838a734faea80a2d5c982d3aa636a6b02c10871f5315 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fcd63df25ce322bb307838a734faea80a2d5c982d3aa636a6b02c10871f5315->enter($__internal_7fcd63df25ce322bb307838a734faea80a2d5c982d3aa636a6b02c10871f5315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_7fcd63df25ce322bb307838a734faea80a2d5c982d3aa636a6b02c10871f5315->leave($__internal_7fcd63df25ce322bb307838a734faea80a2d5c982d3aa636a6b02c10871f5315_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "C:\\xampp\\htdocs\\WebuyShop\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
