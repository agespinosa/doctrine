<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_2e0015a1f8d48d29dca896f416358674c50073744b28ecb12a301848e402f7d8 extends Twig_Template
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
        $__internal_8107633dd80f2eb1850b0f6906eca11f17eb18f7bfcb3017ca863bbccd607cac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8107633dd80f2eb1850b0f6906eca11f17eb18f7bfcb3017ca863bbccd607cac->enter($__internal_8107633dd80f2eb1850b0f6906eca11f17eb18f7bfcb3017ca863bbccd607cac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_39fa397f3aa80f81a4c2f58b891bff0a0e96f80718d3ba86cafb6c42f796e8f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39fa397f3aa80f81a4c2f58b891bff0a0e96f80718d3ba86cafb6c42f796e8f2->enter($__internal_39fa397f3aa80f81a4c2f58b891bff0a0e96f80718d3ba86cafb6c42f796e8f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->formEncodeCurrency(\$money_pattern, \$view['form']->block(\$form, 'form_widget_simple')) ?>
";
        
        $__internal_8107633dd80f2eb1850b0f6906eca11f17eb18f7bfcb3017ca863bbccd607cac->leave($__internal_8107633dd80f2eb1850b0f6906eca11f17eb18f7bfcb3017ca863bbccd607cac_prof);

        
        $__internal_39fa397f3aa80f81a4c2f58b891bff0a0e96f80718d3ba86cafb6c42f796e8f2->leave($__internal_39fa397f3aa80f81a4c2f58b891bff0a0e96f80718d3ba86cafb6c42f796e8f2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->formEncodeCurrency(\$money_pattern, \$view['form']->block(\$form, 'form_widget_simple')) ?>
", "@Framework/Form/money_widget.html.php", "/home/gespinosa/Sites/Symfony4/doctrine/start/vendor/symfony/framework-bundle/Resources/views/Form/money_widget.html.php");
    }
}
