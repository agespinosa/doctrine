<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_d2867726263575283ddd5089eb1267cb4fd0c209aa6992dd865842267ff693c8 extends Twig_Template
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
        $__internal_923b4f50cc39c1e591b59ee53d5f086d26236a63fa0efdf8f81abed5fbecebd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_923b4f50cc39c1e591b59ee53d5f086d26236a63fa0efdf8f81abed5fbecebd2->enter($__internal_923b4f50cc39c1e591b59ee53d5f086d26236a63fa0efdf8f81abed5fbecebd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_0b2b0af826c5c359c61d859f93cb47503fca3365212d56f9db8f585e91268119 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b2b0af826c5c359c61d859f93cb47503fca3365212d56f9db8f585e91268119->enter($__internal_0b2b0af826c5c359c61d859f93cb47503fca3365212d56f9db8f585e91268119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_923b4f50cc39c1e591b59ee53d5f086d26236a63fa0efdf8f81abed5fbecebd2->leave($__internal_923b4f50cc39c1e591b59ee53d5f086d26236a63fa0efdf8f81abed5fbecebd2_prof);

        
        $__internal_0b2b0af826c5c359c61d859f93cb47503fca3365212d56f9db8f585e91268119->leave($__internal_0b2b0af826c5c359c61d859f93cb47503fca3365212d56f9db8f585e91268119_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
", "@Twig/Exception/error.rdf.twig", "/home/gespinosa/Sites/Symfony4/doctrine/start/vendor/symfony/twig-bundle/Resources/views/Exception/error.rdf.twig");
    }
}
