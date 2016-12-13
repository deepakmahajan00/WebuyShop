<?php

/* @WebuyShopFront/Security/login.html.twig */
class __TwigTemplate_ff55e2b259b51de6700661a63a761ee029453e4396a3cea1172a9de9947e9d85 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@WebuyShopFront/Security/login.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_29d7183ef73f5973fc50b46a879df37f5f2136c4c99bc7263f6c17ccf3ab1a44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29d7183ef73f5973fc50b46a879df37f5f2136c4c99bc7263f6c17ccf3ab1a44->enter($__internal_29d7183ef73f5973fc50b46a879df37f5f2136c4c99bc7263f6c17ccf3ab1a44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebuyShopFront/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29d7183ef73f5973fc50b46a879df37f5f2136c4c99bc7263f6c17ccf3ab1a44->leave($__internal_29d7183ef73f5973fc50b46a879df37f5f2136c4c99bc7263f6c17ccf3ab1a44_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7ef5c5e24a4a2c826786e1ac463df3f52c47eed11c1bcd30d15fcf1ebe7868cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ef5c5e24a4a2c826786e1ac463df3f52c47eed11c1bcd30d15fcf1ebe7868cd->enter($__internal_7ef5c5e24a4a2c826786e1ac463df3f52c47eed11c1bcd30d15fcf1ebe7868cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/webuyshopfront/css/login.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_7ef5c5e24a4a2c826786e1ac463df3f52c47eed11c1bcd30d15fcf1ebe7868cd->leave($__internal_7ef5c5e24a4a2c826786e1ac463df3f52c47eed11c1bcd30d15fcf1ebe7868cd_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_caf319e4f76269aae1c10bdda4f757f793b3354cb7515577a3e9aee5770d06bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caf319e4f76269aae1c10bdda4f757f793b3354cb7515577a3e9aee5770d06bf->enter($__internal_caf319e4f76269aae1c10bdda4f757f793b3354cb7515577a3e9aee5770d06bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
    <section class=\"login\">
        <article>

            ";
        // line 14
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 15
            echo "                <div class=\"error\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
            ";
        }
        // line 17
        echo "
            <form action=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
        echo "\" method=\"post\">
                <label for=\"username\">Username:</label>
                <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

                <label for=\"password\">Password:</label>
                <input type=\"password\" id=\"password\" name=\"_password\" />

                <hr/>
                <button type=\"submit\" class=\"btn btn-primary pull-right\">login</button>
            </form>

        </article>
    </section>
";
        
        $__internal_caf319e4f76269aae1c10bdda4f757f793b3354cb7515577a3e9aee5770d06bf->leave($__internal_caf319e4f76269aae1c10bdda4f757f793b3354cb7515577a3e9aee5770d06bf_prof);

    }

    public function getTemplateName()
    {
        return "@WebuyShopFront/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 20,  79 => 18,  76 => 17,  70 => 15,  68 => 14,  62 => 10,  56 => 9,  47 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}

{% block stylesheets %}
    {{ parent() }}

    <link rel=\"stylesheet\" href=\"{{ asset('bundles/webuyshopfront/css/login.css') }}\" />
{% endblock %}

{% block body %}

    <section class=\"login\">
        <article>

            {% if error %}
                <div class=\"error\">{{ error.message }}</div>
            {% endif %}

            <form action=\"{{ path('login_check') }}\" method=\"post\">
                <label for=\"username\">Username:</label>
                <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" />

                <label for=\"password\">Password:</label>
                <input type=\"password\" id=\"password\" name=\"_password\" />

                <hr/>
                <button type=\"submit\" class=\"btn btn-primary pull-right\">login</button>
            </form>

        </article>
    </section>
{% endblock %}", "@WebuyShopFront/Security/login.html.twig", "C:\\xampp\\htdocs\\WebuyShop\\src\\WebuyShop\\FrontBundle\\Resources\\views\\Security\\login.html.twig");
    }
}
