<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_c46cc7e8173f4d99cf6444c3422f5e8c196a43392a4f9c692b23141f202311fa extends Twig_Template
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
        $__internal_96e46eb5775ddde0224944c0483736f772218f91d2c862cc290b3b540b10333c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96e46eb5775ddde0224944c0483736f772218f91d2c862cc290b3b540b10333c->enter($__internal_96e46eb5775ddde0224944c0483736f772218f91d2c862cc290b3b540b10333c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_75ba8d7f06862fe9e67622ddf006e2a76b680b094ec4d658441f97bd1e71b225 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75ba8d7f06862fe9e67622ddf006e2a76b680b094ec4d658441f97bd1e71b225->enter($__internal_75ba8d7f06862fe9e67622ddf006e2a76b680b094ec4d658441f97bd1e71b225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo "

*/
";
        
        $__internal_96e46eb5775ddde0224944c0483736f772218f91d2c862cc290b3b540b10333c->leave($__internal_96e46eb5775ddde0224944c0483736f772218f91d2c862cc290b3b540b10333c_prof);

        
        $__internal_75ba8d7f06862fe9e67622ddf006e2a76b680b094ec4d658441f97bd1e71b225->leave($__internal_75ba8d7f06862fe9e67622ddf006e2a76b680b094ec4d658441f97bd1e71b225_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.js.twig", "/home/gespinosa/Sites/Symfony4/doctrine/start/vendor/symfony/twig-bundle/Resources/views/Exception/error.js.twig");
    }
}
