<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_7dcd4c68effdfd05c7ba3e4a56a466d66ba7089903a8768a3dd77d10d799ed54 extends Twig_Template
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
        $__internal_4e1b2cfcf99e53f373248eb823b3c3168a75be9967134fb9e37a868e3e5e0ec5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e1b2cfcf99e53f373248eb823b3c3168a75be9967134fb9e37a868e3e5e0ec5->enter($__internal_4e1b2cfcf99e53f373248eb823b3c3168a75be9967134fb9e37a868e3e5e0ec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_4e1b2cfcf99e53f373248eb823b3c3168a75be9967134fb9e37a868e3e5e0ec5->leave($__internal_4e1b2cfcf99e53f373248eb823b3c3168a75be9967134fb9e37a868e3e5e0ec5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\xampp\\htdocs\\WebuyShop\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
