<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_80578240fbbe8875acc09cdaa5d8d6d42c59b9040f4db09853caa098a586e59c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_abfe2fdfeafbd7d3df794418a94b173d5794b89876a80a237b71296fa0a698d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abfe2fdfeafbd7d3df794418a94b173d5794b89876a80a237b71296fa0a698d6->enter($__internal_abfe2fdfeafbd7d3df794418a94b173d5794b89876a80a237b71296fa0a698d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_f268ffa8dc9773cc18ebfe1bfd394479019ae4e9d4e05182a5cf875b04941b88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f268ffa8dc9773cc18ebfe1bfd394479019ae4e9d4e05182a5cf875b04941b88->enter($__internal_f268ffa8dc9773cc18ebfe1bfd394479019ae4e9d4e05182a5cf875b04941b88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_abfe2fdfeafbd7d3df794418a94b173d5794b89876a80a237b71296fa0a698d6->leave($__internal_abfe2fdfeafbd7d3df794418a94b173d5794b89876a80a237b71296fa0a698d6_prof);

        
        $__internal_f268ffa8dc9773cc18ebfe1bfd394479019ae4e9d4e05182a5cf875b04941b88->leave($__internal_f268ffa8dc9773cc18ebfe1bfd394479019ae4e9d4e05182a5cf875b04941b88_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_12e9a0d0135c7255827fa5de40592060b8fac877058fa771918c7b5ae818fab0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12e9a0d0135c7255827fa5de40592060b8fac877058fa771918c7b5ae818fab0->enter($__internal_12e9a0d0135c7255827fa5de40592060b8fac877058fa771918c7b5ae818fab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_ceb0ce8b8765e639e6d41b396a6c56e6a33147395d46aa539bdef078bace26a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ceb0ce8b8765e639e6d41b396a6c56e6a33147395d46aa539bdef078bace26a7->enter($__internal_ceb0ce8b8765e639e6d41b396a6c56e6a33147395d46aa539bdef078bace26a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 12, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 12, $this->getSourceContext()); })()), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 14, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 14, $this->getSourceContext()); })()), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>";
        
        $__internal_ceb0ce8b8765e639e6d41b396a6c56e6a33147395d46aa539bdef078bace26a7->leave($__internal_ceb0ce8b8765e639e6d41b396a6c56e6a33147395d46aa539bdef078bace26a7_prof);

        
        $__internal_12e9a0d0135c7255827fa5de40592060b8fac877058fa771918c7b5ae818fab0->leave($__internal_12e9a0d0135c7255827fa5de40592060b8fac877058fa771918c7b5ae818fab0_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4870b627341a4ea1dd879a43560e06f71b98d63bb905dfd795584912359cd5d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4870b627341a4ea1dd879a43560e06f71b98d63bb905dfd795584912359cd5d0->enter($__internal_4870b627341a4ea1dd879a43560e06f71b98d63bb905dfd795584912359cd5d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_56ab5979af7e8f5624f45e42ec52a202d0741d56a9fde7ed77b98033049ae4c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56ab5979af7e8f5624f45e42ec52a202d0741d56a9fde7ed77b98033049ae4c8->enter($__internal_56ab5979af7e8f5624f45e42ec52a202d0741d56a9fde7ed77b98033049ae4c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>";
        
        $__internal_56ab5979af7e8f5624f45e42ec52a202d0741d56a9fde7ed77b98033049ae4c8->leave($__internal_56ab5979af7e8f5624f45e42ec52a202d0741d56a9fde7ed77b98033049ae4c8_prof);

        
        $__internal_4870b627341a4ea1dd879a43560e06f71b98d63bb905dfd795584912359cd5d0->leave($__internal_4870b627341a4ea1dd879a43560e06f71b98d63bb905dfd795584912359cd5d0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 21,  83 => 20,  74 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "/home/gespinosa/Sites/Symfony4/doctrine/start/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/info.html.twig");
    }
}
