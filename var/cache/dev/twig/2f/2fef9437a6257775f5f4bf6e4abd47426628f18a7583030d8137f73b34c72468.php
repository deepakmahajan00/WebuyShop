<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_48490af3f97d05b479dd756ba05e086996c2bc539a804eb02488dc4b11390faf extends Twig_Template
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
        $__internal_29a1f882e4cca6aa60b3db5a20580b61fd50f431f7e2d0227bc8a29da848feef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29a1f882e4cca6aa60b3db5a20580b61fd50f431f7e2d0227bc8a29da848feef->enter($__internal_29a1f882e4cca6aa60b3db5a20580b61fd50f431f7e2d0227bc8a29da848feef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_29a1f882e4cca6aa60b3db5a20580b61fd50f431f7e2d0227bc8a29da848feef->leave($__internal_29a1f882e4cca6aa60b3db5a20580b61fd50f431f7e2d0227bc8a29da848feef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\xampp\\htdocs\\WebuyShop\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
