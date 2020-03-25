<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_724e84dae2e098060db752704ddc286e403eb605c22fcc1f28e2dbe5e1dc0f21 extends Twig_Template
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
        $__internal_cfca9433a3878a2a64649f7b68cc106d659e6c67be2dfb00554ccdffa424c2e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfca9433a3878a2a64649f7b68cc106d659e6c67be2dfb00554ccdffa424c2e0->enter($__internal_cfca9433a3878a2a64649f7b68cc106d659e6c67be2dfb00554ccdffa424c2e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_1eb5d27c492802f5e4b5fbb424169dbc34d04fe33bbf4f44619837f8b806b412 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1eb5d27c492802f5e4b5fbb424169dbc34d04fe33bbf4f44619837f8b806b412->enter($__internal_1eb5d27c492802f5e4b5fbb424169dbc34d04fe33bbf4f44619837f8b806b412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_cfca9433a3878a2a64649f7b68cc106d659e6c67be2dfb00554ccdffa424c2e0->leave($__internal_cfca9433a3878a2a64649f7b68cc106d659e6c67be2dfb00554ccdffa424c2e0_prof);

        
        $__internal_1eb5d27c492802f5e4b5fbb424169dbc34d04fe33bbf4f44619837f8b806b412->leave($__internal_1eb5d27c492802f5e4b5fbb424169dbc34d04fe33bbf4f44619837f8b806b412_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/home/gespinosa/Sites/Symfony4/doctrine/start/vendor/symfony/framework-bundle/Resources/views/Form/url_widget.html.php");
    }
}
