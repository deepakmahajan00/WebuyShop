<?php

/* WebuyShopFrontBundle:Security:addCart.html.twig */
class __TwigTemplate_2a08699ee7b3bfe6b85deda5c18f5dc0b76ce67861119511410685948e85c078 extends Twig_Template
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
        $__internal_414572af60307b14d45b3bd48ae573ac48239dea01c8ae77c05cfb7a47f78224 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_414572af60307b14d45b3bd48ae573ac48239dea01c8ae77c05cfb7a47f78224->enter($__internal_414572af60307b14d45b3bd48ae573ac48239dea01c8ae77c05cfb7a47f78224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebuyShopFrontBundle:Security:addCart.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_414572af60307b14d45b3bd48ae573ac48239dea01c8ae77c05cfb7a47f78224->leave($__internal_414572af60307b14d45b3bd48ae573ac48239dea01c8ae77c05cfb7a47f78224_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_085b9a7c7ab431f1632f1f429aac338ebf5dda0965f4ef3543d7d48884588a53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_085b9a7c7ab431f1632f1f429aac338ebf5dda0965f4ef3543d7d48884588a53->enter($__internal_085b9a7c7ab431f1632f1f429aac338ebf5dda0965f4ef3543d7d48884588a53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "   ";
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
        echo "
";
        
        $__internal_085b9a7c7ab431f1632f1f429aac338ebf5dda0965f4ef3543d7d48884588a53->leave($__internal_085b9a7c7ab431f1632f1f429aac338ebf5dda0965f4ef3543d7d48884588a53_prof);

    }

    public function getTemplateName()
    {
        return "WebuyShopFrontBundle:Security:addCart.html.twig";
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
{% endblock %}", "WebuyShopFrontBundle:Security:addCart.html.twig", "C:\\xampp\\htdocs\\WebuyShop\\src\\WebuyShop\\FrontBundle/Resources/views/Security/addCart.html.twig");
    }
}
