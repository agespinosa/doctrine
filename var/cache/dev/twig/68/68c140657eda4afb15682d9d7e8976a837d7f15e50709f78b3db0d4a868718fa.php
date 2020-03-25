<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_d8738981da4863dff86b6a5c4eb37184a4ec33776157d812a89b94f5f2221d8c extends Twig_Template
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
        $__internal_e2595e0e03190efa668aa3d84c5e12dd87acd664f96a2a0c539fba2adb599021 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2595e0e03190efa668aa3d84c5e12dd87acd664f96a2a0c539fba2adb599021->enter($__internal_e2595e0e03190efa668aa3d84c5e12dd87acd664f96a2a0c539fba2adb599021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_9d6ff398c3063181b415173b8374108c943aa5e5c4e90a68e81b34a98c1500d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d6ff398c3063181b415173b8374108c943aa5e5c4e90a68e81b34a98c1500d4->enter($__internal_9d6ff398c3063181b415173b8374108c943aa5e5c4e90a68e81b34a98c1500d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_e2595e0e03190efa668aa3d84c5e12dd87acd664f96a2a0c539fba2adb599021->leave($__internal_e2595e0e03190efa668aa3d84c5e12dd87acd664f96a2a0c539fba2adb599021_prof);

        
        $__internal_9d6ff398c3063181b415173b8374108c943aa5e5c4e90a68e81b34a98c1500d4->leave($__internal_9d6ff398c3063181b415173b8374108c943aa5e5c4e90a68e81b34a98c1500d4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
", "@Twig/Exception/exception.js.twig", "/home/gespinosa/Sites/Symfony4/doctrine/start/vendor/symfony/twig-bundle/Resources/views/Exception/exception.js.twig");
    }
}
