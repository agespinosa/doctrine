<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_28c950f60bbb37fa0160172c193f6a193175ff397d32c7e2bce276bead5df71b extends Twig_Template
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
        $__internal_08a6a898c914dac2854e564772bf74fdbc37f802c51f2c70a8cf5f73ea40df4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08a6a898c914dac2854e564772bf74fdbc37f802c51f2c70a8cf5f73ea40df4b->enter($__internal_08a6a898c914dac2854e564772bf74fdbc37f802c51f2c70a8cf5f73ea40df4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_d7d58154eb62d4e9168613794e29db91bfaacc46c497a05f54262a79a32a0882 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7d58154eb62d4e9168613794e29db91bfaacc46c497a05f54262a79a32a0882->enter($__internal_d7d58154eb62d4e9168613794e29db91bfaacc46c497a05f54262a79a32a0882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_08a6a898c914dac2854e564772bf74fdbc37f802c51f2c70a8cf5f73ea40df4b->leave($__internal_08a6a898c914dac2854e564772bf74fdbc37f802c51f2c70a8cf5f73ea40df4b_prof);

        
        $__internal_d7d58154eb62d4e9168613794e29db91bfaacc46c497a05f54262a79a32a0882->leave($__internal_d7d58154eb62d4e9168613794e29db91bfaacc46c497a05f54262a79a32a0882_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/home/gespinosa/Sites/Symfony4/doctrine/start/vendor/symfony/framework-bundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
