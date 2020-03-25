<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_ae095c1ec7781455c0ff2197835980b8d6451fa76660b52270de987f7faaaf0b extends Twig_Template
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
        $__internal_6fb3db6c60f72a32d6a2756aedf654ce03ccc22817f77502b5bc39938a078980 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fb3db6c60f72a32d6a2756aedf654ce03ccc22817f77502b5bc39938a078980->enter($__internal_6fb3db6c60f72a32d6a2756aedf654ce03ccc22817f77502b5bc39938a078980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_f77be78f4f10e11aaea7fcb1fc7777240035fae4e95d8d040dd25e6eca140af3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f77be78f4f10e11aaea7fcb1fc7777240035fae4e95d8d040dd25e6eca140af3->enter($__internal_f77be78f4f10e11aaea7fcb1fc7777240035fae4e95d8d040dd25e6eca140af3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_6fb3db6c60f72a32d6a2756aedf654ce03ccc22817f77502b5bc39938a078980->leave($__internal_6fb3db6c60f72a32d6a2756aedf654ce03ccc22817f77502b5bc39938a078980_prof);

        
        $__internal_f77be78f4f10e11aaea7fcb1fc7777240035fae4e95d8d040dd25e6eca140af3->leave($__internal_f77be78f4f10e11aaea7fcb1fc7777240035fae4e95d8d040dd25e6eca140af3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/home/gespinosa/Sites/Symfony4/doctrine/start/vendor/symfony/framework-bundle/Resources/views/Form/hidden_widget.html.php");
    }
}
