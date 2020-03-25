<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_1bdf665cca921beadab08b5e3e53c6bcf2e91d0ee8b8f2089f589644689c6e5d extends Twig_Template
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
        $__internal_3641028a17bd514a475df50aaa2dba69aec591d4df1a315ad3f34ca1b8500d61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3641028a17bd514a475df50aaa2dba69aec591d4df1a315ad3f34ca1b8500d61->enter($__internal_3641028a17bd514a475df50aaa2dba69aec591d4df1a315ad3f34ca1b8500d61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_95070b4563c79011cf7e9cbeb0ed839f262673948348e9f26e4f869a03a5cffe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95070b4563c79011cf7e9cbeb0ed839f262673948348e9f26e4f869a03a5cffe->enter($__internal_95070b4563c79011cf7e9cbeb0ed839f262673948348e9f26e4f869a03a5cffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />
";
        
        $__internal_3641028a17bd514a475df50aaa2dba69aec591d4df1a315ad3f34ca1b8500d61->leave($__internal_3641028a17bd514a475df50aaa2dba69aec591d4df1a315ad3f34ca1b8500d61_prof);

        
        $__internal_95070b4563c79011cf7e9cbeb0ed839f262673948348e9f26e4f869a03a5cffe->leave($__internal_95070b4563c79011cf7e9cbeb0ed839f262673948348e9f26e4f869a03a5cffe_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "/home/gespinosa/Sites/Symfony4/doctrine/start/vendor/symfony/twig-bundle/Resources/views/Exception/error.xml.twig");
    }
}
