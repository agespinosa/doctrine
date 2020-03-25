<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_fb51fad83a869b7518d76f0d5407191a483f572f4d006ef3a07fa483d0d4dc61 extends Twig_Template
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
        $__internal_e4a4bb85decae73fabd2a2e8ed130839eb84fea9a2f9fd16e23709cb800a4be4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4a4bb85decae73fabd2a2e8ed130839eb84fea9a2f9fd16e23709cb800a4be4->enter($__internal_e4a4bb85decae73fabd2a2e8ed130839eb84fea9a2f9fd16e23709cb800a4be4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_027c104f7d59956ee9a5b8111b497db363cd67baa11279627f1e53d2fe1eb90a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_027c104f7d59956ee9a5b8111b497db363cd67baa11279627f1e53d2fe1eb90a->enter($__internal_027c104f7d59956ee9a5b8111b497db363cd67baa11279627f1e53d2fe1eb90a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_e4a4bb85decae73fabd2a2e8ed130839eb84fea9a2f9fd16e23709cb800a4be4->leave($__internal_e4a4bb85decae73fabd2a2e8ed130839eb84fea9a2f9fd16e23709cb800a4be4_prof);

        
        $__internal_027c104f7d59956ee9a5b8111b497db363cd67baa11279627f1e53d2fe1eb90a->leave($__internal_027c104f7d59956ee9a5b8111b497db363cd67baa11279627f1e53d2fe1eb90a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/home/gespinosa/Sites/Symfony4/doctrine/start/vendor/symfony/framework-bundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
