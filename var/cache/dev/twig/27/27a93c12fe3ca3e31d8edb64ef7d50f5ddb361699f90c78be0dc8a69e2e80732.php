<?php

/* @Framework/Form/time_widget.html.php */
class __TwigTemplate_29ab90cbeac0f44acb625d3bc85cbd1640c74e7c674bc6bc3049cfc0cc5bf47d extends Twig_Template
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
        $__internal_28cbff65dc0316d20922c6ee01d38f2ef95fc58bbb4bfc3cd8f7f06708278c4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28cbff65dc0316d20922c6ee01d38f2ef95fc58bbb4bfc3cd8f7f06708278c4c->enter($__internal_28cbff65dc0316d20922c6ee01d38f2ef95fc58bbb4bfc3cd8f7f06708278c4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        $__internal_c2efba70732a4855a9ad1bba2eda3c46052bdc5eb99eca1d73dae4bd932d6c0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2efba70732a4855a9ad1bba2eda3c46052bdc5eb99eca1d73dae4bd932d6c0d->enter($__internal_c2efba70732a4855a9ad1bba2eda3c46052bdc5eb99eca1d73dae4bd932d6c0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
";
        
        $__internal_28cbff65dc0316d20922c6ee01d38f2ef95fc58bbb4bfc3cd8f7f06708278c4c->leave($__internal_28cbff65dc0316d20922c6ee01d38f2ef95fc58bbb4bfc3cd8f7f06708278c4c_prof);

        
        $__internal_c2efba70732a4855a9ad1bba2eda3c46052bdc5eb99eca1d73dae4bd932d6c0d->leave($__internal_c2efba70732a4855a9ad1bba2eda3c46052bdc5eb99eca1d73dae4bd932d6c0d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/time_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
", "@Framework/Form/time_widget.html.php", "/home/gespinosa/Sites/Symfony4/doctrine/start/vendor/symfony/framework-bundle/Resources/views/Form/time_widget.html.php");
    }
}
