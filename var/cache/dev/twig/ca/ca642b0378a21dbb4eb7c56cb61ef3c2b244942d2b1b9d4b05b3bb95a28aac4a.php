<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_77debf8faa8d15166a616bfcd0f7046e5b75239e051abab3a8ae8038afb23e1e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_037f86d03b3a4bf294ca5ec73f007c4934bc08aac4536af97fe1778de89357f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_037f86d03b3a4bf294ca5ec73f007c4934bc08aac4536af97fe1778de89357f2->enter($__internal_037f86d03b3a4bf294ca5ec73f007c4934bc08aac4536af97fe1778de89357f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_8c5282a782af93edd3518231a600132e194aa6d36d77fa879c5e5945a4497944 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c5282a782af93edd3518231a600132e194aa6d36d77fa879c5e5945a4497944->enter($__internal_8c5282a782af93edd3518231a600132e194aa6d36d77fa879c5e5945a4497944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_037f86d03b3a4bf294ca5ec73f007c4934bc08aac4536af97fe1778de89357f2->leave($__internal_037f86d03b3a4bf294ca5ec73f007c4934bc08aac4536af97fe1778de89357f2_prof);

        
        $__internal_8c5282a782af93edd3518231a600132e194aa6d36d77fa879c5e5945a4497944->leave($__internal_8c5282a782af93edd3518231a600132e194aa6d36d77fa879c5e5945a4497944_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_813bd1e08c2ec099417742a303ef97c50ec7af057d01020124422459e8f8fcf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_813bd1e08c2ec099417742a303ef97c50ec7af057d01020124422459e8f8fcf2->enter($__internal_813bd1e08c2ec099417742a303ef97c50ec7af057d01020124422459e8f8fcf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_165151dfa74d7f386aa3994a265a4d858cd8f7e568cf57768162134b805559a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_165151dfa74d7f386aa3994a265a4d858cd8f7e568cf57768162134b805559a0->enter($__internal_165151dfa74d7f386aa3994a265a4d858cd8f7e568cf57768162134b805559a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        ob_start();
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        
        $__internal_165151dfa74d7f386aa3994a265a4d858cd8f7e568cf57768162134b805559a0->leave($__internal_165151dfa74d7f386aa3994a265a4d858cd8f7e568cf57768162134b805559a0_prof);

        
        $__internal_813bd1e08c2ec099417742a303ef97c50ec7af057d01020124422459e8f8fcf2->leave($__internal_813bd1e08c2ec099417742a303ef97c50ec7af057d01020124422459e8f8fcf2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 30,  56 => 9,  51 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/gespinosa/Sites/Symfony4/doctrine/start/vendor/symfony/web-profiler-bundle/Resources/views/Collector/ajax.html.twig");
    }
}
