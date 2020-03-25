<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_79a4591e19b5a9ae27a44547f65958e36ca99cd7a3fd6cf9334f4f8c1f888476 extends Twig_Template
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
        $__internal_2af0116462efe99f2993e07b0387c2ffe46ca41fe6570d1c845f5019a85fe1e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2af0116462efe99f2993e07b0387c2ffe46ca41fe6570d1c845f5019a85fe1e4->enter($__internal_2af0116462efe99f2993e07b0387c2ffe46ca41fe6570d1c845f5019a85fe1e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_e1a035199208c1d333094460291df93c6a673394125402ffdd49da66df0401c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1a035199208c1d333094460291df93c6a673394125402ffdd49da66df0401c9->enter($__internal_e1a035199208c1d333094460291df93c6a673394125402ffdd49da66df0401c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_2af0116462efe99f2993e07b0387c2ffe46ca41fe6570d1c845f5019a85fe1e4->leave($__internal_2af0116462efe99f2993e07b0387c2ffe46ca41fe6570d1c845f5019a85fe1e4_prof);

        
        $__internal_e1a035199208c1d333094460291df93c6a673394125402ffdd49da66df0401c9->leave($__internal_e1a035199208c1d333094460291df93c6a673394125402ffdd49da66df0401c9_prof);

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
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.atom.twig", "/home/gespinosa/Sites/Symfony4/doctrine/start/vendor/symfony/twig-bundle/Resources/views/Exception/exception.atom.twig");
    }
}
