<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_f733b20e9190772bad7c023843b0ae8dbe206eed362bde73ef92f550a3ab2977 extends Twig_Template
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
        $__internal_decfb12cc89cc7a156260ab44d06a4df37d9a08e6212fb09c79ebdc704b3a433 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_decfb12cc89cc7a156260ab44d06a4df37d9a08e6212fb09c79ebdc704b3a433->enter($__internal_decfb12cc89cc7a156260ab44d06a4df37d9a08e6212fb09c79ebdc704b3a433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_decfb12cc89cc7a156260ab44d06a4df37d9a08e6212fb09c79ebdc704b3a433->leave($__internal_decfb12cc89cc7a156260ab44d06a4df37d9a08e6212fb09c79ebdc704b3a433_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\xampp\\htdocs\\WebuyShop\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
