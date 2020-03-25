<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_761e6fc4610dad9ad54ae4834de4c7b747be2fda9e4ba872df047ccca6abbaf8 extends Twig_Template
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
        $__internal_281c3ef13f70b020d29ddf987c7afd40658418520b8751fef29252f2f8ba85b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_281c3ef13f70b020d29ddf987c7afd40658418520b8751fef29252f2f8ba85b2->enter($__internal_281c3ef13f70b020d29ddf987c7afd40658418520b8751fef29252f2f8ba85b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_8803c8ba1f63625e0cf7f4bb09cb534ecc2aedf609f8748227586de789003bce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8803c8ba1f63625e0cf7f4bb09cb534ecc2aedf609f8748227586de789003bce->enter($__internal_8803c8ba1f63625e0cf7f4bb09cb534ecc2aedf609f8748227586de789003bce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_281c3ef13f70b020d29ddf987c7afd40658418520b8751fef29252f2f8ba85b2->leave($__internal_281c3ef13f70b020d29ddf987c7afd40658418520b8751fef29252f2f8ba85b2_prof);

        
        $__internal_8803c8ba1f63625e0cf7f4bb09cb534ecc2aedf609f8748227586de789003bce->leave($__internal_8803c8ba1f63625e0cf7f4bb09cb534ecc2aedf609f8748227586de789003bce_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/home/gespinosa/Sites/Symfony4/doctrine/start/vendor/symfony/framework-bundle/Resources/views/Form/button_attributes.html.php");
    }
}
