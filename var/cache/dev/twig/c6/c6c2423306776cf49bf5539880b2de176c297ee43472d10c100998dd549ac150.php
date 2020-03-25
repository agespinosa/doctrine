<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_2485a945328efc35ed7230011819ed1d10aa4f43ea31e591898fded9ccfce2ee extends Twig_Template
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
        $__internal_0c96c57315b4686d4cf581dcbf8a4d6c0df583eb5f79dc24509a61d29aa39346 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c96c57315b4686d4cf581dcbf8a4d6c0df583eb5f79dc24509a61d29aa39346->enter($__internal_0c96c57315b4686d4cf581dcbf8a4d6c0df583eb5f79dc24509a61d29aa39346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_c9b873f55759a7c9e16e2a964b2b3ed7d93e2b803d19b01af065fb673467e4a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9b873f55759a7c9e16e2a964b2b3ed7d93e2b803d19b01af065fb673467e4a2->enter($__internal_c9b873f55759a7c9e16e2a964b2b3ed7d93e2b803d19b01af065fb673467e4a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_0c96c57315b4686d4cf581dcbf8a4d6c0df583eb5f79dc24509a61d29aa39346->leave($__internal_0c96c57315b4686d4cf581dcbf8a4d6c0df583eb5f79dc24509a61d29aa39346_prof);

        
        $__internal_c9b873f55759a7c9e16e2a964b2b3ed7d93e2b803d19b01af065fb673467e4a2->leave($__internal_c9b873f55759a7c9e16e2a964b2b3ed7d93e2b803d19b01af065fb673467e4a2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/home/gespinosa/Sites/Symfony4/doctrine/start/vendor/symfony/framework-bundle/Resources/views/Form/widget_attributes.html.php");
    }
}
