<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_60b186acb4369a44121f506f0e52dc5c5ca3ee1484278cb65d1df4df9cb9fe05 extends Twig_Template
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
        $__internal_b2e98fc73796fc14b1eb6640991dc0445100b0ae3ab0b587c6fa82e651e9bb43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2e98fc73796fc14b1eb6640991dc0445100b0ae3ab0b587c6fa82e651e9bb43->enter($__internal_b2e98fc73796fc14b1eb6640991dc0445100b0ae3ab0b587c6fa82e651e9bb43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_3ce4d1e1306b5b64ea44664e3599e9b81abecbbb367dcf57c3e2258533bd8a0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ce4d1e1306b5b64ea44664e3599e9b81abecbbb367dcf57c3e2258533bd8a0f->enter($__internal_3ce4d1e1306b5b64ea44664e3599e9b81abecbbb367dcf57c3e2258533bd8a0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_b2e98fc73796fc14b1eb6640991dc0445100b0ae3ab0b587c6fa82e651e9bb43->leave($__internal_b2e98fc73796fc14b1eb6640991dc0445100b0ae3ab0b587c6fa82e651e9bb43_prof);

        
        $__internal_3ce4d1e1306b5b64ea44664e3599e9b81abecbbb367dcf57c3e2258533bd8a0f->leave($__internal_3ce4d1e1306b5b64ea44664e3599e9b81abecbbb367dcf57c3e2258533bd8a0f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/home/gespinosa/Sites/Symfony4/doctrine/start/vendor/symfony/framework-bundle/Resources/views/Form/choice_attributes.html.php");
    }
}
