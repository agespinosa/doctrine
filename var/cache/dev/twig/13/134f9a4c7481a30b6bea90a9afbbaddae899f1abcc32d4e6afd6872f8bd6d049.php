<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_c1dfe2a4e8a1b6475556581ff01f45f61ecc02baa7272cb499335eac1221d533 extends Twig_Template
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
        $__internal_74730de361028532e03021a9c1939a0c014a764246ebe1c7598514b50f347180 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74730de361028532e03021a9c1939a0c014a764246ebe1c7598514b50f347180->enter($__internal_74730de361028532e03021a9c1939a0c014a764246ebe1c7598514b50f347180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_3593339432f92702c713643dc3a60a878171ce627b371e86338ba89bed789e92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3593339432f92702c713643dc3a60a878171ce627b371e86338ba89bed789e92->enter($__internal_3593339432f92702c713643dc3a60a878171ce627b371e86338ba89bed789e92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_74730de361028532e03021a9c1939a0c014a764246ebe1c7598514b50f347180->leave($__internal_74730de361028532e03021a9c1939a0c014a764246ebe1c7598514b50f347180_prof);

        
        $__internal_3593339432f92702c713643dc3a60a878171ce627b371e86338ba89bed789e92->leave($__internal_3593339432f92702c713643dc3a60a878171ce627b371e86338ba89bed789e92_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.atom.twig", "/home/gespinosa/Sites/Symfony4/doctrine/start/vendor/symfony/twig-bundle/Resources/views/Exception/error.atom.twig");
    }
}
