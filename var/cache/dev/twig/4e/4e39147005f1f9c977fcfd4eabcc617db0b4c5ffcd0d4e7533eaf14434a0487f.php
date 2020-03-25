<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_9920f53120ca6f58fb75be7a1676e24635248de7f7cb4056771406e2bb9417f2 extends Twig_Template
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
        $__internal_0c515a6c379415a6bf1118d954dbe35ea7a762f68526142bcff811117b69c252 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c515a6c379415a6bf1118d954dbe35ea7a762f68526142bcff811117b69c252->enter($__internal_0c515a6c379415a6bf1118d954dbe35ea7a762f68526142bcff811117b69c252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_d8bef994354bac39757ca917b62502ada3c47780ef3e5bf1fbec3500855e3177 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8bef994354bac39757ca917b62502ada3c47780ef3e5bf1fbec3500855e3177->enter($__internal_d8bef994354bac39757ca917b62502ada3c47780ef3e5bf1fbec3500855e3177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_0c515a6c379415a6bf1118d954dbe35ea7a762f68526142bcff811117b69c252->leave($__internal_0c515a6c379415a6bf1118d954dbe35ea7a762f68526142bcff811117b69c252_prof);

        
        $__internal_d8bef994354bac39757ca917b62502ada3c47780ef3e5bf1fbec3500855e3177->leave($__internal_d8bef994354bac39757ca917b62502ada3c47780ef3e5bf1fbec3500855e3177_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.css.twig", "/home/gespinosa/Sites/Symfony4/doctrine/start/vendor/symfony/twig-bundle/Resources/views/Exception/exception.css.twig");
    }
}
