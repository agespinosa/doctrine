<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_613a3e1d0eafa590f86837023cbf128e3f6d2ad2be858f7d0f649902ed38f953 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_512194e09351e298c574f8ff52a8a749097353f38b1dd5c13d16e2c76abdad0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_512194e09351e298c574f8ff52a8a749097353f38b1dd5c13d16e2c76abdad0d->enter($__internal_512194e09351e298c574f8ff52a8a749097353f38b1dd5c13d16e2c76abdad0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_0e8d3a5661f12cfd1eb609baf70769baeaa011e7f02ce3c313ad35cba036e111 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e8d3a5661f12cfd1eb609baf70769baeaa011e7f02ce3c313ad35cba036e111->enter($__internal_0e8d3a5661f12cfd1eb609baf70769baeaa011e7f02ce3c313ad35cba036e111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_512194e09351e298c574f8ff52a8a749097353f38b1dd5c13d16e2c76abdad0d->leave($__internal_512194e09351e298c574f8ff52a8a749097353f38b1dd5c13d16e2c76abdad0d_prof);

        
        $__internal_0e8d3a5661f12cfd1eb609baf70769baeaa011e7f02ce3c313ad35cba036e111->leave($__internal_0e8d3a5661f12cfd1eb609baf70769baeaa011e7f02ce3c313ad35cba036e111_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a89677aba3de8dfaf5f22677ebcb3641e7573e15269f49c2bb5185e0012ea050 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a89677aba3de8dfaf5f22677ebcb3641e7573e15269f49c2bb5185e0012ea050->enter($__internal_a89677aba3de8dfaf5f22677ebcb3641e7573e15269f49c2bb5185e0012ea050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_425b6dc020d68b8743979587f44e1ba50232d638d6fba22adeedbdf56146723c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_425b6dc020d68b8743979587f44e1ba50232d638d6fba22adeedbdf56146723c->enter($__internal_425b6dc020d68b8743979587f44e1ba50232d638d6fba22adeedbdf56146723c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>";
        
        $__internal_425b6dc020d68b8743979587f44e1ba50232d638d6fba22adeedbdf56146723c->leave($__internal_425b6dc020d68b8743979587f44e1ba50232d638d6fba22adeedbdf56146723c_prof);

        
        $__internal_a89677aba3de8dfaf5f22677ebcb3641e7573e15269f49c2bb5185e0012ea050->leave($__internal_a89677aba3de8dfaf5f22677ebcb3641e7573e15269f49c2bb5185e0012ea050_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_af8375f5ff980fded25ee850d33bac792975f8a95ba94751758a7d7f242749b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af8375f5ff980fded25ee850d33bac792975f8a95ba94751758a7d7f242749b4->enter($__internal_af8375f5ff980fded25ee850d33bac792975f8a95ba94751758a7d7f242749b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f68adb0c3721b5a3a4c9089321753085d814b218f300098fdf426cfedac80f4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f68adb0c3721b5a3a4c9089321753085d814b218f300098fdf426cfedac80f4e->enter($__internal_f68adb0c3721b5a3a4c9089321753085d814b218f300098fdf426cfedac80f4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo " <small>line";
        echo twig_escape_filter($this->env, (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new Twig_Error_Runtime('Variable "filename" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 15, $this->getSourceContext()); })()),  -1);
        echo "
</div>";
        
        $__internal_f68adb0c3721b5a3a4c9089321753085d814b218f300098fdf426cfedac80f4e->leave($__internal_f68adb0c3721b5a3a4c9089321753085d814b218f300098fdf426cfedac80f4e_prof);

        
        $__internal_af8375f5ff980fded25ee850d33bac792975f8a95ba94751758a7d7f242749b4->leave($__internal_af8375f5ff980fded25ee850d33bac792975f8a95ba94751758a7d7f242749b4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 15,  82 => 12,  76 => 11,  73 => 10,  64 => 9,  52 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "/home/gespinosa/Sites/Symfony4/doctrine/start/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/open.html.twig");
    }
}
