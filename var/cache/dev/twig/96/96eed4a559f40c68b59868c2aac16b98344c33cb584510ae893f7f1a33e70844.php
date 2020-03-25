<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_15b317f5bf4d3f9206f0eaed12e550e69f966e69323524d1b6f02715da4a8d22 extends Twig_Template
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
        $__internal_f178753cab6f8a79ebdef83f39e52fceef8201f33293914b505018b64da328a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f178753cab6f8a79ebdef83f39e52fceef8201f33293914b505018b64da328a2->enter($__internal_f178753cab6f8a79ebdef83f39e52fceef8201f33293914b505018b64da328a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_5fd091a8318a7d4e3f1ad3e5274649eadc0cfe5198e2e2a98404f58d9a84a10d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fd091a8318a7d4e3f1ad3e5274649eadc0cfe5198e2e2a98404f58d9a84a10d->enter($__internal_5fd091a8318a7d4e3f1ad3e5274649eadc0cfe5198e2e2a98404f58d9a84a10d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_f178753cab6f8a79ebdef83f39e52fceef8201f33293914b505018b64da328a2->leave($__internal_f178753cab6f8a79ebdef83f39e52fceef8201f33293914b505018b64da328a2_prof);

        
        $__internal_5fd091a8318a7d4e3f1ad3e5274649eadc0cfe5198e2e2a98404f58d9a84a10d->leave($__internal_5fd091a8318a7d4e3f1ad3e5274649eadc0cfe5198e2e2a98404f58d9a84a10d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/home/gespinosa/Sites/Symfony4/doctrine/start/vendor/symfony/framework-bundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
