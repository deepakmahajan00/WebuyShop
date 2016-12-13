<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_111d0e3b2cede54c9c4b4461db3dc6d154f490c7547613ccb86014a67c83f3f6 extends Twig_Template
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
        $__internal_3b557eeb79977fefbb95cdd1b8c1ac5b6f80c584f4d0326307be0f4992a047f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b557eeb79977fefbb95cdd1b8c1ac5b6f80c584f4d0326307be0f4992a047f4->enter($__internal_3b557eeb79977fefbb95cdd1b8c1ac5b6f80c584f4d0326307be0f4992a047f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_3b557eeb79977fefbb95cdd1b8c1ac5b6f80c584f4d0326307be0f4992a047f4->leave($__internal_3b557eeb79977fefbb95cdd1b8c1ac5b6f80c584f4d0326307be0f4992a047f4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\xampp\\htdocs\\WebuyShop\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
