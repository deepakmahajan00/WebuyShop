<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_34a7a7526b24ebc987a2cf7d2825fe12592c192f7a426474bd70b72dff8c4135 extends Twig_Template
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
        $__internal_cf76de0bfcbf08b1e4f27d1cece9ab6c18d1d40e7657634a8aeb2705f640636a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf76de0bfcbf08b1e4f27d1cece9ab6c18d1d40e7657634a8aeb2705f640636a->enter($__internal_cf76de0bfcbf08b1e4f27d1cece9ab6c18d1d40e7657634a8aeb2705f640636a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_cf76de0bfcbf08b1e4f27d1cece9ab6c18d1d40e7657634a8aeb2705f640636a->leave($__internal_cf76de0bfcbf08b1e4f27d1cece9ab6c18d1d40e7657634a8aeb2705f640636a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "C:\\xampp\\htdocs\\WebuyShop\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
