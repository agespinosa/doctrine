<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_e960e6ceb394af8055440b8a612695750f8ac1e3765a7ee936e50893d9eda379 extends Twig_Template
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
        $__internal_c05e66253a03eb96a3d7b7107e32f51515dce9f429f030a2afe3ba56c42df0fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c05e66253a03eb96a3d7b7107e32f51515dce9f429f030a2afe3ba56c42df0fe->enter($__internal_c05e66253a03eb96a3d7b7107e32f51515dce9f429f030a2afe3ba56c42df0fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_07666ac5015ce59b44f1585da434a2a91d67da479d647eea48cfeb434cb6d691 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07666ac5015ce59b44f1585da434a2a91d67da479d647eea48cfeb434cb6d691->enter($__internal_07666ac5015ce59b44f1585da434a2a91d67da479d647eea48cfeb434cb6d691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_c05e66253a03eb96a3d7b7107e32f51515dce9f429f030a2afe3ba56c42df0fe->leave($__internal_c05e66253a03eb96a3d7b7107e32f51515dce9f429f030a2afe3ba56c42df0fe_prof);

        
        $__internal_07666ac5015ce59b44f1585da434a2a91d67da479d647eea48cfeb434cb6d691->leave($__internal_07666ac5015ce59b44f1585da434a2a91d67da479d647eea48cfeb434cb6d691_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/home/gespinosa/Sites/Symfony4/doctrine/start/vendor/symfony/framework-bundle/Resources/views/Form/radio_widget.html.php");
    }
}
