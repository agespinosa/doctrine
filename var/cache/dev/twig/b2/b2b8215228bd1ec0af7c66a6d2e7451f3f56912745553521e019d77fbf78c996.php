<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_075099885e3edc47b3b4613ae1beebc11138009755b87aa39fe264d209bc553f extends Twig_Template
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
        $__internal_c37b21d929d61e88e6321bebf89a8a351d83fc6b24d4941ffb72bdd999f88822 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c37b21d929d61e88e6321bebf89a8a351d83fc6b24d4941ffb72bdd999f88822->enter($__internal_c37b21d929d61e88e6321bebf89a8a351d83fc6b24d4941ffb72bdd999f88822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_544d215bcbdc9331581ac54cbfe9ddb7788ad634bd95a098e547565ed2f01f09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_544d215bcbdc9331581ac54cbfe9ddb7788ad634bd95a098e547565ed2f01f09->enter($__internal_544d215bcbdc9331581ac54cbfe9ddb7788ad634bd95a098e547565ed2f01f09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_c37b21d929d61e88e6321bebf89a8a351d83fc6b24d4941ffb72bdd999f88822->leave($__internal_c37b21d929d61e88e6321bebf89a8a351d83fc6b24d4941ffb72bdd999f88822_prof);

        
        $__internal_544d215bcbdc9331581ac54cbfe9ddb7788ad634bd95a098e547565ed2f01f09->leave($__internal_544d215bcbdc9331581ac54cbfe9ddb7788ad634bd95a098e547565ed2f01f09_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/gespinosa/Sites/Symfony4/doctrine/start/vendor/symfony/framework-bundle/Resources/views/Form/submit_widget.html.php");
    }
}
