<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_9092467f5a19053381f72d2e90c1e0800fdd1d26063227c33bebe3fab21fc9c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_75a05a6fd908c65060d71b4d09002cd7069af79eb0b1200172ac4e6955e95f7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75a05a6fd908c65060d71b4d09002cd7069af79eb0b1200172ac4e6955e95f7e->enter($__internal_75a05a6fd908c65060d71b4d09002cd7069af79eb0b1200172ac4e6955e95f7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_56710b75c1eb6206d3ce634046fc468960a71df99346c3353a4d1cfbeadb41bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56710b75c1eb6206d3ce634046fc468960a71df99346c3353a4d1cfbeadb41bc->enter($__internal_56710b75c1eb6206d3ce634046fc468960a71df99346c3353a4d1cfbeadb41bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_75a05a6fd908c65060d71b4d09002cd7069af79eb0b1200172ac4e6955e95f7e->leave($__internal_75a05a6fd908c65060d71b4d09002cd7069af79eb0b1200172ac4e6955e95f7e_prof);

        
        $__internal_56710b75c1eb6206d3ce634046fc468960a71df99346c3353a4d1cfbeadb41bc->leave($__internal_56710b75c1eb6206d3ce634046fc468960a71df99346c3353a4d1cfbeadb41bc_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_bbfcad7675fa509582d3573e5f048bb46ed32f0ef8102a71d78e11320edcaa1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbfcad7675fa509582d3573e5f048bb46ed32f0ef8102a71d78e11320edcaa1f->enter($__internal_bbfcad7675fa509582d3573e5f048bb46ed32f0ef8102a71d78e11320edcaa1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8441400cf898ce4efc349d09e0582324502eda8d782a7b072e81d0ac85187013 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8441400cf898ce4efc349d09e0582324502eda8d782a7b072e81d0ac85187013->enter($__internal_8441400cf898ce4efc349d09e0582324502eda8d782a7b072e81d0ac85187013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_8441400cf898ce4efc349d09e0582324502eda8d782a7b072e81d0ac85187013->leave($__internal_8441400cf898ce4efc349d09e0582324502eda8d782a7b072e81d0ac85187013_prof);

        
        $__internal_bbfcad7675fa509582d3573e5f048bb46ed32f0ef8102a71d78e11320edcaa1f->leave($__internal_bbfcad7675fa509582d3573e5f048bb46ed32f0ef8102a71d78e11320edcaa1f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "/home/gespinosa/Sites/Symfony4/doctrine/start/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
