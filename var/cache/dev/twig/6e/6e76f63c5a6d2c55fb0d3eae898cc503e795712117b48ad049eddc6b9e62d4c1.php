<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_ab160f1a4c7994675b840a67d01ef939ee219da9b571ff9827ae56e21592c62d extends Twig_Template
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
        $__internal_20fa257d846c5cbe2d6fa70094e780a67af043610ff73be808d84ce8083a7a13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20fa257d846c5cbe2d6fa70094e780a67af043610ff73be808d84ce8083a7a13->enter($__internal_20fa257d846c5cbe2d6fa70094e780a67af043610ff73be808d84ce8083a7a13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_23a171f7fc253687d1caac8a9a36af1b61212ceb28b4dcf1a5fab24fa414c83e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23a171f7fc253687d1caac8a9a36af1b61212ceb28b4dcf1a5fab24fa414c83e->enter($__internal_23a171f7fc253687d1caac8a9a36af1b61212ceb28b4dcf1a5fab24fa414c83e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_20fa257d846c5cbe2d6fa70094e780a67af043610ff73be808d84ce8083a7a13->leave($__internal_20fa257d846c5cbe2d6fa70094e780a67af043610ff73be808d84ce8083a7a13_prof);

        
        $__internal_23a171f7fc253687d1caac8a9a36af1b61212ceb28b4dcf1a5fab24fa414c83e->leave($__internal_23a171f7fc253687d1caac8a9a36af1b61212ceb28b4dcf1a5fab24fa414c83e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "/home/gespinosa/Sites/Symfony4/doctrine/start/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/header.html.twig");
    }
}