<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_ac40c766c8e0077d820e2d0960d2814546816e7072492adb5ff3d4513ad4ee86 extends Twig_Template
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
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? null)));
        echo "
";
    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
        return new Twig_Source("", "@Twig/Exception/exception.atom.twig", "/home/gespinosa/Sites/Symfony4/doctrine/start/vendor/symfony/twig-bundle/Resources/views/Exception/exception.atom.twig");
    }
}
