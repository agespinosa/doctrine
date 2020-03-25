<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_51f128b4e5f8e30bc91441d0437c1e5a9e4dab33417733b1ce90df7d1bf00024 extends Twig_Template
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
        $__internal_95bd722fbfd56922156030bafb2f132cc2b073856a07bbcaf600a23632e30486 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95bd722fbfd56922156030bafb2f132cc2b073856a07bbcaf600a23632e30486->enter($__internal_95bd722fbfd56922156030bafb2f132cc2b073856a07bbcaf600a23632e30486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_fa2abf0787158365da8d6eef50107c2f013fceb39271715d8d1eac6f6dbb7c7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa2abf0787158365da8d6eef50107c2f013fceb39271715d8d1eac6f6dbb7c7b->enter($__internal_fa2abf0787158365da8d6eef50107c2f013fceb39271715d8d1eac6f6dbb7c7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_95bd722fbfd56922156030bafb2f132cc2b073856a07bbcaf600a23632e30486->leave($__internal_95bd722fbfd56922156030bafb2f132cc2b073856a07bbcaf600a23632e30486_prof);

        
        $__internal_fa2abf0787158365da8d6eef50107c2f013fceb39271715d8d1eac6f6dbb7c7b->leave($__internal_fa2abf0787158365da8d6eef50107c2f013fceb39271715d8d1eac6f6dbb7c7b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/home/gespinosa/Sites/Symfony4/doctrine/start/vendor/symfony/framework-bundle/Resources/views/Form/textarea_widget.html.php");
    }
}
