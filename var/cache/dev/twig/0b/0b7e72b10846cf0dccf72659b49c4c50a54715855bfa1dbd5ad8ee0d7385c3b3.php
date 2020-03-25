<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_93531a0494ecfbcfda3267c97fa8a3604faf9502ef0a473d8edcec0b26704fcb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_57f745ec796b095cde8cb4c17053f786568ec9e9bcb1825b09f969db2afb0927 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57f745ec796b095cde8cb4c17053f786568ec9e9bcb1825b09f969db2afb0927->enter($__internal_57f745ec796b095cde8cb4c17053f786568ec9e9bcb1825b09f969db2afb0927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_6a0d6a38f43ad4713e4d0507868362698b3313e12bc204daa61bb35b87474103 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a0d6a38f43ad4713e4d0507868362698b3313e12bc204daa61bb35b87474103->enter($__internal_6a0d6a38f43ad4713e4d0507868362698b3313e12bc204daa61bb35b87474103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57f745ec796b095cde8cb4c17053f786568ec9e9bcb1825b09f969db2afb0927->leave($__internal_57f745ec796b095cde8cb4c17053f786568ec9e9bcb1825b09f969db2afb0927_prof);

        
        $__internal_6a0d6a38f43ad4713e4d0507868362698b3313e12bc204daa61bb35b87474103->leave($__internal_6a0d6a38f43ad4713e4d0507868362698b3313e12bc204daa61bb35b87474103_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_00ae3be93178f8be2c1171d35af8c1921abb14a80e6531009f026a935287650a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00ae3be93178f8be2c1171d35af8c1921abb14a80e6531009f026a935287650a->enter($__internal_00ae3be93178f8be2c1171d35af8c1921abb14a80e6531009f026a935287650a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d6e3b2b7eccf205e7abdeb306c26ad9e83d1427209c63f7521d378187f477612 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6e3b2b7eccf205e7abdeb306c26ad9e83d1427209c63f7521d378187f477612->enter($__internal_d6e3b2b7eccf205e7abdeb306c26ad9e83d1427209c63f7521d378187f477612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_d6e3b2b7eccf205e7abdeb306c26ad9e83d1427209c63f7521d378187f477612->leave($__internal_d6e3b2b7eccf205e7abdeb306c26ad9e83d1427209c63f7521d378187f477612_prof);

        
        $__internal_00ae3be93178f8be2c1171d35af8c1921abb14a80e6531009f026a935287650a->leave($__internal_00ae3be93178f8be2c1171d35af8c1921abb14a80e6531009f026a935287650a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_51549db0663096aac9ef2cffc0a98e4a6d0b67f58960e2b584a6985951411e5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51549db0663096aac9ef2cffc0a98e4a6d0b67f58960e2b584a6985951411e5e->enter($__internal_51549db0663096aac9ef2cffc0a98e4a6d0b67f58960e2b584a6985951411e5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_33c2de63faaa64973c197ff5965e1bef06eac3e5b3f0889da3ccdf313ba52dab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33c2de63faaa64973c197ff5965e1bef06eac3e5b3f0889da3ccdf313ba52dab->enter($__internal_33c2de63faaa64973c197ff5965e1bef06eac3e5b3f0889da3ccdf313ba52dab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>";
        
        $__internal_33c2de63faaa64973c197ff5965e1bef06eac3e5b3f0889da3ccdf313ba52dab->leave($__internal_33c2de63faaa64973c197ff5965e1bef06eac3e5b3f0889da3ccdf313ba52dab_prof);

        
        $__internal_51549db0663096aac9ef2cffc0a98e4a6d0b67f58960e2b584a6985951411e5e->leave($__internal_51549db0663096aac9ef2cffc0a98e4a6d0b67f58960e2b584a6985951411e5e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "/home/gespinosa/Sites/Symfony4/doctrine/start/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
