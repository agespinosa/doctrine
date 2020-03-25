<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_7707f565372f6294ad6cb55c64aab75cb690131be42873d1e38d57f55bfa004b extends Twig_Template
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
        $__internal_2f6506307a52328f2ff6744ca4c0c180c77bd2bdec52430b59b448aae94f0257 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f6506307a52328f2ff6744ca4c0c180c77bd2bdec52430b59b448aae94f0257->enter($__internal_2f6506307a52328f2ff6744ca4c0c180c77bd2bdec52430b59b448aae94f0257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_123a77ce8ddb9311b1d9b3414ba4689ac1c3d00e825814d0ec43990b4cdf667a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_123a77ce8ddb9311b1d9b3414ba4689ac1c3d00e825814d0ec43990b4cdf667a->enter($__internal_123a77ce8ddb9311b1d9b3414ba4689ac1c3d00e825814d0ec43990b4cdf667a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_2f6506307a52328f2ff6744ca4c0c180c77bd2bdec52430b59b448aae94f0257->leave($__internal_2f6506307a52328f2ff6744ca4c0c180c77bd2bdec52430b59b448aae94f0257_prof);

        
        $__internal_123a77ce8ddb9311b1d9b3414ba4689ac1c3d00e825814d0ec43990b4cdf667a->leave($__internal_123a77ce8ddb9311b1d9b3414ba4689ac1c3d00e825814d0ec43990b4cdf667a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/home/gespinosa/Sites/Symfony4/doctrine/start/vendor/symfony/framework-bundle/Resources/views/Form/form_row.html.php");
    }
}
