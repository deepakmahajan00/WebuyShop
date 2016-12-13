<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_3aa569514fd4410accc252ef240997d36cd0b708b70d1e54c4c1b4d599cefd8b extends Twig_Template
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
        $__internal_3f7fc7d55d9c2ec2bea858e3d34147e735b4e8f2131356ff44c84a3fb5a64548 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f7fc7d55d9c2ec2bea858e3d34147e735b4e8f2131356ff44c84a3fb5a64548->enter($__internal_3f7fc7d55d9c2ec2bea858e3d34147e735b4e8f2131356ff44c84a3fb5a64548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_3f7fc7d55d9c2ec2bea858e3d34147e735b4e8f2131356ff44c84a3fb5a64548->leave($__internal_3f7fc7d55d9c2ec2bea858e3d34147e735b4e8f2131356ff44c84a3fb5a64548_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\xampp\\htdocs\\WebuyShop\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
