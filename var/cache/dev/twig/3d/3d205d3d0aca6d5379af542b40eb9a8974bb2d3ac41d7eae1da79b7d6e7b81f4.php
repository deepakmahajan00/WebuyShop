<?php

/* ::base.html.twig */
class __TwigTemplate_06a220be27c827f9f81986753296f454395a382e63f24f9f7e416872f5e36465 extends Twig_Template
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
        $__internal_4c48fe54b6ec6d0a45535f870d2e4c13680fad596a1304a560eb0cb20d58505d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c48fe54b6ec6d0a45535f870d2e4c13680fad596a1304a560eb0cb20d58505d->enter($__internal_4c48fe54b6ec6d0a45535f870d2e4c13680fad596a1304a560eb0cb20d58505d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_4c48fe54b6ec6d0a45535f870d2e4c13680fad596a1304a560eb0cb20d58505d->leave($__internal_4c48fe54b6ec6d0a45535f870d2e4c13680fad596a1304a560eb0cb20d58505d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2176f5d3d1d5e22dc97bf57a5a575d5d0abaa10c68e3116886f237601fbef686 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2176f5d3d1d5e22dc97bf57a5a575d5d0abaa10c68e3116886f237601fbef686->enter($__internal_2176f5d3d1d5e22dc97bf57a5a575d5d0abaa10c68e3116886f237601fbef686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "WebuyShop";
        
        $__internal_2176f5d3d1d5e22dc97bf57a5a575d5d0abaa10c68e3116886f237601fbef686->leave($__internal_2176f5d3d1d5e22dc97bf57a5a575d5d0abaa10c68e3116886f237601fbef686_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1617171b781408ee2eed5135ecc71212b1445ae9be71a7e9233b70addeb79c2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1617171b781408ee2eed5135ecc71212b1445ae9be71a7e9233b70addeb79c2a->enter($__internal_1617171b781408ee2eed5135ecc71212b1445ae9be71a7e9233b70addeb79c2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "        <link rel=\"stylesheet\" href=\"//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css\"/>
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    ";
        
        $__internal_1617171b781408ee2eed5135ecc71212b1445ae9be71a7e9233b70addeb79c2a->leave($__internal_1617171b781408ee2eed5135ecc71212b1445ae9be71a7e9233b70addeb79c2a_prof);

    }

    // line 21
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_cb915ff3167a30bafd9e72e75f77ecc93e33916238ce23c42dacde39b3320e77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb915ff3167a30bafd9e72e75f77ecc93e33916238ce23c42dacde39b3320e77->enter($__internal_cb915ff3167a30bafd9e72e75f77ecc93e33916238ce23c42dacde39b3320e77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_cb915ff3167a30bafd9e72e75f77ecc93e33916238ce23c42dacde39b3320e77->leave($__internal_cb915ff3167a30bafd9e72e75f77ecc93e33916238ce23c42dacde39b3320e77_prof);

    }

    // line 45
    public function block_blog_title($context, array $blocks = array())
    {
        $__internal_14ed78f37e86f93b66ce250e621f42b27a3659026d0f4f28cbda283ad7de88fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14ed78f37e86f93b66ce250e621f42b27a3659026d0f4f28cbda283ad7de88fd->enter($__internal_14ed78f37e86f93b66ce250e621f42b27a3659026d0f4f28cbda283ad7de88fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        echo "<a href=\"#\">webuy-shop</a>";
        
        $__internal_14ed78f37e86f93b66ce250e621f42b27a3659026d0f4f28cbda283ad7de88fd->leave($__internal_14ed78f37e86f93b66ce250e621f42b27a3659026d0f4f28cbda283ad7de88fd_prof);

    }

    // line 50
    public function block_body($context, array $blocks = array())
    {
        $__internal_1015f5e98f40f6e7ff467685a7ff7b385e512e7c2fcc05ab829a6cef5b15231b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1015f5e98f40f6e7ff467685a7ff7b385e512e7c2fcc05ab829a6cef5b15231b->enter($__internal_1015f5e98f40f6e7ff467685a7ff7b385e512e7c2fcc05ab829a6cef5b15231b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1015f5e98f40f6e7ff467685a7ff7b385e512e7c2fcc05ab829a6cef5b15231b->leave($__internal_1015f5e98f40f6e7ff467685a7ff7b385e512e7c2fcc05ab829a6cef5b15231b_prof);

    }

    // line 54
    public function block_footer($context, array $blocks = array())
    {
        $__internal_d5e20962a2ed165fd7014e45eb6829fca85ca191160d7f8fbc7e32eae3e56910 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5e20962a2ed165fd7014e45eb6829fca85ca191160d7f8fbc7e32eae3e56910->enter($__internal_d5e20962a2ed165fd7014e45eb6829fca85ca191160d7f8fbc7e32eae3e56910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 55
        echo "            created by Deepak Mahajan
        ";
        
        $__internal_d5e20962a2ed165fd7014e45eb6829fca85ca191160d7f8fbc7e32eae3e56910->leave($__internal_d5e20962a2ed165fd7014e45eb6829fca85ca191160d7f8fbc7e32eae3e56910_prof);

    }

    // line 60
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_12c052a477082ecd49f66dc50f23cc943ec8c4a0b5b1d8b8214414779571f056 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12c052a477082ecd49f66dc50f23cc943ec8c4a0b5b1d8b8214414779571f056->enter($__internal_12c052a477082ecd49f66dc50f23cc943ec8c4a0b5b1d8b8214414779571f056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 61
        echo "    <script src=\"//code.jquery.com/jquery-1.11.0.min.js\"></script>
";
        
        $__internal_12c052a477082ecd49f66dc50f23cc943ec8c4a0b5b1d8b8214414779571f056->leave($__internal_12c052a477082ecd49f66dc50f23cc943ec8c4a0b5b1d8b8214414779571f056_prof);

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
