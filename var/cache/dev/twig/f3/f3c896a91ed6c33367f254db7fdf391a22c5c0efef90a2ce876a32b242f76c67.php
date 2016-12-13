<?php

/* base.html.twig */
class __TwigTemplate_d80d2b6428bb1b9bb257b3eda248c97c70156f8081b367caf8eb2d34751580b2 extends Twig_Template
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
        $__internal_260360dfd5c3713ba1ac0ec0067653edb93a574970f8cbe76999373a0186f2c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_260360dfd5c3713ba1ac0ec0067653edb93a574970f8cbe76999373a0186f2c2->enter($__internal_260360dfd5c3713ba1ac0ec0067653edb93a574970f8cbe76999373a0186f2c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_260360dfd5c3713ba1ac0ec0067653edb93a574970f8cbe76999373a0186f2c2->leave($__internal_260360dfd5c3713ba1ac0ec0067653edb93a574970f8cbe76999373a0186f2c2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0c5d019e54cfe96247176ea14231bf14cdd6b0faf38e3ba3d3840766b9bab843 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c5d019e54cfe96247176ea14231bf14cdd6b0faf38e3ba3d3840766b9bab843->enter($__internal_0c5d019e54cfe96247176ea14231bf14cdd6b0faf38e3ba3d3840766b9bab843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "WebuyShop";
        
        $__internal_0c5d019e54cfe96247176ea14231bf14cdd6b0faf38e3ba3d3840766b9bab843->leave($__internal_0c5d019e54cfe96247176ea14231bf14cdd6b0faf38e3ba3d3840766b9bab843_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_671feb2114804f5281694c4de18c775121cd3027f22a2b56e3bb731dd6faa7a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_671feb2114804f5281694c4de18c775121cd3027f22a2b56e3bb731dd6faa7a4->enter($__internal_671feb2114804f5281694c4de18c775121cd3027f22a2b56e3bb731dd6faa7a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "        <link rel=\"stylesheet\" href=\"//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css\"/>
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    ";
        
        $__internal_671feb2114804f5281694c4de18c775121cd3027f22a2b56e3bb731dd6faa7a4->leave($__internal_671feb2114804f5281694c4de18c775121cd3027f22a2b56e3bb731dd6faa7a4_prof);

    }

    // line 21
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_a89a6999cd32abb82e8607a21795478f325dd2a2c0a32b649f323002bd9c9dd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a89a6999cd32abb82e8607a21795478f325dd2a2c0a32b649f323002bd9c9dd9->enter($__internal_a89a6999cd32abb82e8607a21795478f325dd2a2c0a32b649f323002bd9c9dd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_a89a6999cd32abb82e8607a21795478f325dd2a2c0a32b649f323002bd9c9dd9->leave($__internal_a89a6999cd32abb82e8607a21795478f325dd2a2c0a32b649f323002bd9c9dd9_prof);

    }

    // line 45
    public function block_blog_title($context, array $blocks = array())
    {
        $__internal_7c992f57cecf896a9b45c2d18b9f490579c77d879e051474abd8c93dbb1475b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c992f57cecf896a9b45c2d18b9f490579c77d879e051474abd8c93dbb1475b4->enter($__internal_7c992f57cecf896a9b45c2d18b9f490579c77d879e051474abd8c93dbb1475b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        echo "<a href=\"#\">webuy-shop</a>";
        
        $__internal_7c992f57cecf896a9b45c2d18b9f490579c77d879e051474abd8c93dbb1475b4->leave($__internal_7c992f57cecf896a9b45c2d18b9f490579c77d879e051474abd8c93dbb1475b4_prof);

    }

    // line 50
    public function block_body($context, array $blocks = array())
    {
        $__internal_d7c571fb844f905640a67a158401c1ad7d4e106583a735e032e044914fd210fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7c571fb844f905640a67a158401c1ad7d4e106583a735e032e044914fd210fb->enter($__internal_d7c571fb844f905640a67a158401c1ad7d4e106583a735e032e044914fd210fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d7c571fb844f905640a67a158401c1ad7d4e106583a735e032e044914fd210fb->leave($__internal_d7c571fb844f905640a67a158401c1ad7d4e106583a735e032e044914fd210fb_prof);

    }

    // line 54
    public function block_footer($context, array $blocks = array())
    {
        $__internal_042e7623d482fae8653e3f6f3f5bbbeedb60604e5f4a0f20932b77dfbf3c1753 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_042e7623d482fae8653e3f6f3f5bbbeedb60604e5f4a0f20932b77dfbf3c1753->enter($__internal_042e7623d482fae8653e3f6f3f5bbbeedb60604e5f4a0f20932b77dfbf3c1753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 55
        echo "            created by Deepak Mahajan
        ";
        
        $__internal_042e7623d482fae8653e3f6f3f5bbbeedb60604e5f4a0f20932b77dfbf3c1753->leave($__internal_042e7623d482fae8653e3f6f3f5bbbeedb60604e5f4a0f20932b77dfbf3c1753_prof);

    }

    // line 60
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bfad50394acd8350302723dae8414a9ca6682b55b23eac05cafcdf5a38b47ac4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfad50394acd8350302723dae8414a9ca6682b55b23eac05cafcdf5a38b47ac4->enter($__internal_bfad50394acd8350302723dae8414a9ca6682b55b23eac05cafcdf5a38b47ac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 61
        echo "    <script src=\"//code.jquery.com/jquery-1.11.0.min.js\"></script>
";
        
        $__internal_bfad50394acd8350302723dae8414a9ca6682b55b23eac05cafcdf5a38b47ac4->leave($__internal_bfad50394acd8350302723dae8414a9ca6682b55b23eac05cafcdf5a38b47ac4_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
</html>", "base.html.twig", "C:\\xampp\\htdocs\\WebuyShop\\app\\Resources\\views\\base.html.twig");
    }
}
