<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_567312ff6636ab70f8f401a39cd7c33b2a92178bd2b6278c30ebfdf1e45c4a92 extends Twig_Template
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
        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
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
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Twig/Exception/error.rdf.twig", "/home/gespinosa/Sites/Symfony4/doctrine/start/vendor/symfony/twig-bundle/Resources/views/Exception/error.rdf.twig");
    }
}
