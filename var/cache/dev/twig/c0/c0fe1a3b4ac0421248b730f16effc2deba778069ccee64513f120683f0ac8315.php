<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_cec1d6841a321d31a8c53ebcc391f76ffbb973495e3a2e503e0704c2113b70c1 extends Twig_Template
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
        $__internal_2d791270e71a5db4a4a7059042cf4550f8ec910332cce4b86a344f581685619d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d791270e71a5db4a4a7059042cf4550f8ec910332cce4b86a344f581685619d->enter($__internal_2d791270e71a5db4a4a7059042cf4550f8ec910332cce4b86a344f581685619d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_6df436c39b5df21d2a3939c417d43217d44cf4b01b8b004d4b3c2113593b4fec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6df436c39b5df21d2a3939c417d43217d44cf4b01b8b004d4b3c2113593b4fec->enter($__internal_6df436c39b5df21d2a3939c417d43217d44cf4b01b8b004d4b3c2113593b4fec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_2d791270e71a5db4a4a7059042cf4550f8ec910332cce4b86a344f581685619d->leave($__internal_2d791270e71a5db4a4a7059042cf4550f8ec910332cce4b86a344f581685619d_prof);

        
        $__internal_6df436c39b5df21d2a3939c417d43217d44cf4b01b8b004d4b3c2113593b4fec->leave($__internal_6df436c39b5df21d2a3939c417d43217d44cf4b01b8b004d4b3c2113593b4fec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "/home/gespinosa/Sites/Symfony4/doctrine/start/vendor/symfony/framework-bundle/Resources/views/Form/attributes.html.php");
    }
}
