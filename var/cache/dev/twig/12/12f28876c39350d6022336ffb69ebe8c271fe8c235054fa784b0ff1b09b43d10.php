<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_be7e62953851309d5f0aa8e441ff46ce20012ca18cf70d65ed704e8213fd2b2d extends Twig_Template
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
        $__internal_f136b9a55ed85cda9910f97fbd0fc391227269aabf47155127500bd7c901a6f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f136b9a55ed85cda9910f97fbd0fc391227269aabf47155127500bd7c901a6f8->enter($__internal_f136b9a55ed85cda9910f97fbd0fc391227269aabf47155127500bd7c901a6f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_f136b9a55ed85cda9910f97fbd0fc391227269aabf47155127500bd7c901a6f8->leave($__internal_f136b9a55ed85cda9910f97fbd0fc391227269aabf47155127500bd7c901a6f8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\xampp\\htdocs\\WebuyShop\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
