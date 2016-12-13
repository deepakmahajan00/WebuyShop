<?php

/* ::base.html.twig */
class __TwigTemplate_44e109a116f6f9f45e133dd61d266466f184144f76b03a1fb32519d30f7b6ccb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navigation' => array($this, 'block_navigation'),
            'blog_title' => array($this, 'block_blog_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c4f1ceccf5d1d53cd51c068fa3733f1c1e0429ccbff5262e147bf031dbb0bde0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4f1ceccf5d1d53cd51c068fa3733f1c1e0429ccbff5262e147bf031dbb0bde0->enter($__internal_c4f1ceccf5d1d53cd51c068fa3733f1c1e0429ccbff5262e147bf031dbb0bde0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=utf-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo " - blog</title>
    <!--[if lt IE 9]>
    <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->
    ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "    <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

</head>
<body>

<section id=\"wrapper\">
    <header id=\"header\">
        <div class=\"top\">
            ";
        // line 21
        $this->displayBlock('navigation', $context, $blocks);
        // line 42
        echo "        </div>

        <hgroup>
            <h2>";
        // line 45
        $this->displayBlock('blog_title', $context, $blocks);
        echo "</h2>
        </hgroup>
    </header>

    <section class=\"main-col\">
        ";
        // line 50
        $this->displayBlock('body', $context, $blocks);
        // line 51
        echo "    </section>

    <div id=\"footer\">
        ";
        // line 54
        $this->displayBlock('footer', $context, $blocks);
        // line 57
        echo "    </div>
</section>

";
        // line 60
        $this->displayBlock('javascripts', $context, $blocks);
        // line 63
        echo "</body>
</html>";
        
        $__internal_c4f1ceccf5d1d53cd51c068fa3733f1c1e0429ccbff5262e147bf031dbb0bde0->leave($__internal_c4f1ceccf5d1d53cd51c068fa3733f1c1e0429ccbff5262e147bf031dbb0bde0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2d3cfd65019707b093d19e45e034d7595f663e7975772b8e2d090bb32ca2364f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d3cfd65019707b093d19e45e034d7595f663e7975772b8e2d090bb32ca2364f->enter($__internal_2d3cfd65019707b093d19e45e034d7595f663e7975772b8e2d090bb32ca2364f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "WebuyShop";
        
        $__internal_2d3cfd65019707b093d19e45e034d7595f663e7975772b8e2d090bb32ca2364f->leave($__internal_2d3cfd65019707b093d19e45e034d7595f663e7975772b8e2d090bb32ca2364f_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_84dce09124b9f56567d57bd84489b10f04dcafd7947a32b0cd8aa419763e8046 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84dce09124b9f56567d57bd84489b10f04dcafd7947a32b0cd8aa419763e8046->enter($__internal_84dce09124b9f56567d57bd84489b10f04dcafd7947a32b0cd8aa419763e8046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "        <link rel=\"stylesheet\" href=\"//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css\"/>
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    ";
        
        $__internal_84dce09124b9f56567d57bd84489b10f04dcafd7947a32b0cd8aa419763e8046->leave($__internal_84dce09124b9f56567d57bd84489b10f04dcafd7947a32b0cd8aa419763e8046_prof);

    }

    // line 21
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_823a9ab23e6488b5b6cc4c67505e53981fd3b1f30a50f957a9ab7c81c1ef65c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_823a9ab23e6488b5b6cc4c67505e53981fd3b1f30a50f957a9ab7c81c1ef65c9->enter($__internal_823a9ab23e6488b5b6cc4c67505e53981fd3b1f30a50f957a9ab7c81c1ef65c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 22
        echo "                <nav>
                    <ul class=\"navigation\">


                        ";
        // line 26
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 27
            echo "                            <a class=\"link\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
            echo "\">Homepage</a>
                            |
                            <a class=\"link\" href=\"";
            // line 29
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_orders");
            echo "\">MyOrder</a>
                            |
                            <a class=\"link\" href=\"";
            // line 31
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_cart");
            // line 32
            echo "\">Cart</a>
                            |
                            <a class=\"link\" href=\"";
            // line 34
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\">Logout ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</a>
                        ";
        } else {
            // line 36
            echo "
                            <a class=\"link\" href=\"";
            // line 37
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_form");
            echo "\">Login</a>
                        ";
        }
        // line 39
        echo "                    </ul>
                </nav>
            ";
        
        $__internal_823a9ab23e6488b5b6cc4c67505e53981fd3b1f30a50f957a9ab7c81c1ef65c9->leave($__internal_823a9ab23e6488b5b6cc4c67505e53981fd3b1f30a50f957a9ab7c81c1ef65c9_prof);

    }

    // line 45
    public function block_blog_title($context, array $blocks = array())
    {
        $__internal_299a3ed0477fd77c74990eebefd1d3a7ac068e55ed98f34f639329aa7319de2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_299a3ed0477fd77c74990eebefd1d3a7ac068e55ed98f34f639329aa7319de2f->enter($__internal_299a3ed0477fd77c74990eebefd1d3a7ac068e55ed98f34f639329aa7319de2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        echo "<a href=\"#\">webuy-shop</a>";
        
        $__internal_299a3ed0477fd77c74990eebefd1d3a7ac068e55ed98f34f639329aa7319de2f->leave($__internal_299a3ed0477fd77c74990eebefd1d3a7ac068e55ed98f34f639329aa7319de2f_prof);

    }

    // line 50
    public function block_body($context, array $blocks = array())
    {
        $__internal_3211aa8d574fb4dbf44b5d0ac45c127f3ec8b8c36770aebc5f8e643064e4917a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3211aa8d574fb4dbf44b5d0ac45c127f3ec8b8c36770aebc5f8e643064e4917a->enter($__internal_3211aa8d574fb4dbf44b5d0ac45c127f3ec8b8c36770aebc5f8e643064e4917a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3211aa8d574fb4dbf44b5d0ac45c127f3ec8b8c36770aebc5f8e643064e4917a->leave($__internal_3211aa8d574fb4dbf44b5d0ac45c127f3ec8b8c36770aebc5f8e643064e4917a_prof);

    }

    // line 54
    public function block_footer($context, array $blocks = array())
    {
        $__internal_1864292a4704ada0e80d558755742c0a18629dd85571a78804b23e70cf9ca158 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1864292a4704ada0e80d558755742c0a18629dd85571a78804b23e70cf9ca158->enter($__internal_1864292a4704ada0e80d558755742c0a18629dd85571a78804b23e70cf9ca158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 55
        echo "            created by Deepak Mahajan
        ";
        
        $__internal_1864292a4704ada0e80d558755742c0a18629dd85571a78804b23e70cf9ca158->leave($__internal_1864292a4704ada0e80d558755742c0a18629dd85571a78804b23e70cf9ca158_prof);

    }

    // line 60
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_738bc814385580cd2d0b341755295203cf59058043615fe8250872889fdc5af7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_738bc814385580cd2d0b341755295203cf59058043615fe8250872889fdc5af7->enter($__internal_738bc814385580cd2d0b341755295203cf59058043615fe8250872889fdc5af7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 61
        echo "    <script src=\"//code.jquery.com/jquery-1.11.0.min.js\"></script>
";
        
        $__internal_738bc814385580cd2d0b341755295203cf59058043615fe8250872889fdc5af7->leave($__internal_738bc814385580cd2d0b341755295203cf59058043615fe8250872889fdc5af7_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 61,  217 => 60,  209 => 55,  203 => 54,  192 => 50,  180 => 45,  171 => 39,  166 => 37,  163 => 36,  156 => 34,  152 => 32,  150 => 31,  145 => 29,  139 => 27,  137 => 26,  131 => 22,  125 => 21,  116 => 11,  113 => 10,  107 => 9,  95 => 5,  87 => 63,  85 => 60,  80 => 57,  78 => 54,  73 => 51,  71 => 50,  63 => 45,  58 => 42,  56 => 21,  44 => 13,  42 => 9,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=utf-8\" />
    <title>{% block title %}WebuyShop{% endblock %} - blog</title>
    <!--[if lt IE 9]>
    <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css\"/>
        <link href=\"{{ asset('css/screen.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
    {% endblock %}
    <link rel=\"shortcut icon\" href=\"{{ asset('favicon.ico') }}\" />

</head>
<body>

<section id=\"wrapper\">
    <header id=\"header\">
        <div class=\"top\">
            {% block navigation %}
                <nav>
                    <ul class=\"navigation\">


                        {% if is_granted('IS_AUTHENTICATED_REMEMBERED') %}
                            <a class=\"link\" href=\"{{ path('homepage') }}\">Homepage</a>
                            |
                            <a class=\"link\" href=\"{{ path('my_orders') }}\">MyOrder</a>
                            |
                            <a class=\"link\" href=\"{{ path('show_cart')
                        }}\">Cart</a>
                            |
                            <a class=\"link\" href=\"{{ path('logout') }}\">Logout {{ app.user.username }}</a>
                        {% else %}

                            <a class=\"link\" href=\"{{ path('login_form') }}\">Login</a>
                        {% endif %}
                    </ul>
                </nav>
            {% endblock %}
        </div>

        <hgroup>
            <h2>{% block blog_title %}<a href=\"#\">webuy-shop</a>{% endblock %}</h2>
        </hgroup>
    </header>

    <section class=\"main-col\">
        {% block body %}{% endblock %}
    </section>

    <div id=\"footer\">
        {% block footer %}
            created by Deepak Mahajan
        {% endblock %}
    </div>
</section>

{% block javascripts %}
    <script src=\"//code.jquery.com/jquery-1.11.0.min.js\"></script>
{% endblock %}
</body>
</html>", "::base.html.twig", "C:\\xampp\\htdocs\\WebuyShop\\app/Resources\\views/base.html.twig");
    }
}
