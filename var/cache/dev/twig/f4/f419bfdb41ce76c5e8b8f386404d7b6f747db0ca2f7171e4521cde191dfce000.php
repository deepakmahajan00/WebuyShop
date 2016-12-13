<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_8efb3ed36b3b9a6776e7cba11dc0c1bd603c324934210030af9cc451f94fff87 extends Twig_Template
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
        $__internal_ac8cd3b2b2c4801ef8fcb6032d0813a2f8283d7648a91e679080da665fde3b18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac8cd3b2b2c4801ef8fcb6032d0813a2f8283d7648a91e679080da665fde3b18->enter($__internal_ac8cd3b2b2c4801ef8fcb6032d0813a2f8283d7648a91e679080da665fde3b18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_ac8cd3b2b2c4801ef8fcb6032d0813a2f8283d7648a91e679080da665fde3b18->leave($__internal_ac8cd3b2b2c4801ef8fcb6032d0813a2f8283d7648a91e679080da665fde3b18_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "C:\\xampp\\htdocs\\WebuyShop\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
