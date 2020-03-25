<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_dab33a35dcb0cd01c2791d5225bf43312656a8880ad7289f3d275afe222e8e22 extends Twig_Template
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
        $__internal_618fe668c44dc2cc5a50d5707695ab384043166ffa6e6076f22d018c5543a841 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_618fe668c44dc2cc5a50d5707695ab384043166ffa6e6076f22d018c5543a841->enter($__internal_618fe668c44dc2cc5a50d5707695ab384043166ffa6e6076f22d018c5543a841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_e9fe5529be88b8c0a69196d1fae8c7350179a9d64f076613c5f8dc5d7d557e35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9fe5529be88b8c0a69196d1fae8c7350179a9d64f076613c5f8dc5d7d557e35->enter($__internal_e9fe5529be88b8c0a69196d1fae8c7350179a9d64f076613c5f8dc5d7d557e35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 4, $this->getSourceContext()); })());
        echo (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 4, $this->getSourceContext()); })());
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_618fe668c44dc2cc5a50d5707695ab384043166ffa6e6076f22d018c5543a841->leave($__internal_618fe668c44dc2cc5a50d5707695ab384043166ffa6e6076f22d018c5543a841_prof);

        
        $__internal_e9fe5529be88b8c0a69196d1fae8c7350179a9d64f076613c5f8dc5d7d557e35->leave($__internal_e9fe5529be88b8c0a69196d1fae8c7350179a9d64f076613c5f8dc5d7d557e35_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "/home/gespinosa/Sites/Symfony4/doctrine/start/vendor/symfony/twig-bundle/Resources/views/Exception/error.txt.twig");
    }
}
