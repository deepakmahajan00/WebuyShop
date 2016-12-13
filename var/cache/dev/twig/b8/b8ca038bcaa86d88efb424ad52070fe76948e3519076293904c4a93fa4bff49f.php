<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_d28d3a8f79c4c0ac51ff5fb883d84984a241cf06dfa7a90e31ccf5da213ba230 extends Twig_Template
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
        $__internal_2ea33ec4e2ac296ac670b68cddcb9f48c56d79f790ce9b6e2de8fca8b2aa5ef4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ea33ec4e2ac296ac670b68cddcb9f48c56d79f790ce9b6e2de8fca8b2aa5ef4->enter($__internal_2ea33ec4e2ac296ac670b68cddcb9f48c56d79f790ce9b6e2de8fca8b2aa5ef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_2ea33ec4e2ac296ac670b68cddcb9f48c56d79f790ce9b6e2de8fca8b2aa5ef4->leave($__internal_2ea33ec4e2ac296ac670b68cddcb9f48c56d79f790ce9b6e2de8fca8b2aa5ef4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\xampp\\htdocs\\WebuyShop\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
