<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_8b92c6fcd19062b0d135c4ecee0d2346ac2caf773e8e0fa0bf12351c6ec69adb extends Twig_Template
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
        $__internal_265efa3bd890d28bc8791933035250aaaa43e7a037b7f0cdbc4d0031bdb2e57f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_265efa3bd890d28bc8791933035250aaaa43e7a037b7f0cdbc4d0031bdb2e57f->enter($__internal_265efa3bd890d28bc8791933035250aaaa43e7a037b7f0cdbc4d0031bdb2e57f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_265efa3bd890d28bc8791933035250aaaa43e7a037b7f0cdbc4d0031bdb2e57f->leave($__internal_265efa3bd890d28bc8791933035250aaaa43e7a037b7f0cdbc4d0031bdb2e57f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\xampp\\htdocs\\WebuyShop\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
