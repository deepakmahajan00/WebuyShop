<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_25100add34ee038f6a545284f51d383c72dc41ef961d37f1bb5ff2ee4118c43c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_50a3df11b3a438fcf4a7573059c1d3df5f52e80ed9e218a50455b02328b1db12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50a3df11b3a438fcf4a7573059c1d3df5f52e80ed9e218a50455b02328b1db12->enter($__internal_50a3df11b3a438fcf4a7573059c1d3df5f52e80ed9e218a50455b02328b1db12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50a3df11b3a438fcf4a7573059c1d3df5f52e80ed9e218a50455b02328b1db12->leave($__internal_50a3df11b3a438fcf4a7573059c1d3df5f52e80ed9e218a50455b02328b1db12_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bc5f64629ec974daf1391c9a03e5a24133f30dca36cd72ba15095e298aa67cd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc5f64629ec974daf1391c9a03e5a24133f30dca36cd72ba15095e298aa67cd2->enter($__internal_bc5f64629ec974daf1391c9a03e5a24133f30dca36cd72ba15095e298aa67cd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_bc5f64629ec974daf1391c9a03e5a24133f30dca36cd72ba15095e298aa67cd2->leave($__internal_bc5f64629ec974daf1391c9a03e5a24133f30dca36cd72ba15095e298aa67cd2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_93e30f9604f4af14b1777c34593934d863455dbcb7b111a4fa221c5e663619d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93e30f9604f4af14b1777c34593934d863455dbcb7b111a4fa221c5e663619d7->enter($__internal_93e30f9604f4af14b1777c34593934d863455dbcb7b111a4fa221c5e663619d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_93e30f9604f4af14b1777c34593934d863455dbcb7b111a4fa221c5e663619d7->leave($__internal_93e30f9604f4af14b1777c34593934d863455dbcb7b111a4fa221c5e663619d7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9ffd353177f62cfa434095ccced38a9de7f185db357729d99bc9158e860e76b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ffd353177f62cfa434095ccced38a9de7f185db357729d99bc9158e860e76b0->enter($__internal_9ffd353177f62cfa434095ccced38a9de7f185db357729d99bc9158e860e76b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_9ffd353177f62cfa434095ccced38a9de7f185db357729d99bc9158e860e76b0->leave($__internal_9ffd353177f62cfa434095ccced38a9de7f185db357729d99bc9158e860e76b0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "C:\\xampp\\htdocs\\WebuyShop\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
