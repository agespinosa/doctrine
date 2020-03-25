<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_ee578929b3ed80ce52a7da4fc39bbb3dfcac9cdbe9b2a1778a81aa120e878fd3 extends Twig_Template
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
        $__internal_17634feb31ccebed8c628a13840deed6d469bb9294fe201b269c79ff13d71f76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17634feb31ccebed8c628a13840deed6d469bb9294fe201b269c79ff13d71f76->enter($__internal_17634feb31ccebed8c628a13840deed6d469bb9294fe201b269c79ff13d71f76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_0d4a69fd2b3a923ba8eabaecdb94795dbc46d7b75807e1ffb27f0893a0b3f3b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d4a69fd2b3a923ba8eabaecdb94795dbc46d7b75807e1ffb27f0893a0b3f3b8->enter($__internal_0d4a69fd2b3a923ba8eabaecdb94795dbc46d7b75807e1ffb27f0893a0b3f3b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_17634feb31ccebed8c628a13840deed6d469bb9294fe201b269c79ff13d71f76->leave($__internal_17634feb31ccebed8c628a13840deed6d469bb9294fe201b269c79ff13d71f76_prof);

        
        $__internal_0d4a69fd2b3a923ba8eabaecdb94795dbc46d7b75807e1ffb27f0893a0b3f3b8->leave($__internal_0d4a69fd2b3a923ba8eabaecdb94795dbc46d7b75807e1ffb27f0893a0b3f3b8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/home/gespinosa/Sites/Symfony4/doctrine/start/vendor/symfony/framework-bundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
