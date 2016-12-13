<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_aa563be9aa88c7b607129f03a3be0d9de72a599b3662198e3b488c058f91988c extends Twig_Template
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
        $__internal_10d6050d79f7297a5ff036be5a4d63eebfd0c255c39563ed503a34bf7cf6c9c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10d6050d79f7297a5ff036be5a4d63eebfd0c255c39563ed503a34bf7cf6c9c1->enter($__internal_10d6050d79f7297a5ff036be5a4d63eebfd0c255c39563ed503a34bf7cf6c9c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_10d6050d79f7297a5ff036be5a4d63eebfd0c255c39563ed503a34bf7cf6c9c1->leave($__internal_10d6050d79f7297a5ff036be5a4d63eebfd0c255c39563ed503a34bf7cf6c9c1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\xampp\\htdocs\\WebuyShop\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
