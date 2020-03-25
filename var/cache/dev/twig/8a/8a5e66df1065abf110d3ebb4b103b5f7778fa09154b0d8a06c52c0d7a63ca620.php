<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8b265c0a7a1c381df8bd84a21eaa9e70648622ac19d3b47473e63171ce8ef845 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a41bf21a55dbd6a235a14f4c415a1c9e49ee90954ce20a4f378436edbcbb6fea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a41bf21a55dbd6a235a14f4c415a1c9e49ee90954ce20a4f378436edbcbb6fea->enter($__internal_a41bf21a55dbd6a235a14f4c415a1c9e49ee90954ce20a4f378436edbcbb6fea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_9ae062974d11346a6d7bef0f2f4dc8b231d7c9ac328e23360d1f24c81d3f2c63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ae062974d11346a6d7bef0f2f4dc8b231d7c9ac328e23360d1f24c81d3f2c63->enter($__internal_9ae062974d11346a6d7bef0f2f4dc8b231d7c9ac328e23360d1f24c81d3f2c63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a41bf21a55dbd6a235a14f4c415a1c9e49ee90954ce20a4f378436edbcbb6fea->leave($__internal_a41bf21a55dbd6a235a14f4c415a1c9e49ee90954ce20a4f378436edbcbb6fea_prof);

        
        $__internal_9ae062974d11346a6d7bef0f2f4dc8b231d7c9ac328e23360d1f24c81d3f2c63->leave($__internal_9ae062974d11346a6d7bef0f2f4dc8b231d7c9ac328e23360d1f24c81d3f2c63_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_be7480d04102bb1da0ab24aa165a72094352e26bcf2c755306550b8a3efec467 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be7480d04102bb1da0ab24aa165a72094352e26bcf2c755306550b8a3efec467->enter($__internal_be7480d04102bb1da0ab24aa165a72094352e26bcf2c755306550b8a3efec467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c9a5b9841e5758fd654c0c6f55b952cae662e4a30306bbe5ad81bff375ba8f0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9a5b9841e5758fd654c0c6f55b952cae662e4a30306bbe5ad81bff375ba8f0f->enter($__internal_c9a5b9841e5758fd654c0c6f55b952cae662e4a30306bbe5ad81bff375ba8f0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c9a5b9841e5758fd654c0c6f55b952cae662e4a30306bbe5ad81bff375ba8f0f->leave($__internal_c9a5b9841e5758fd654c0c6f55b952cae662e4a30306bbe5ad81bff375ba8f0f_prof);

        
        $__internal_be7480d04102bb1da0ab24aa165a72094352e26bcf2c755306550b8a3efec467->leave($__internal_be7480d04102bb1da0ab24aa165a72094352e26bcf2c755306550b8a3efec467_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dcccc33502ed5cb61c2fe6b32fde4e7b64bcc3beb725d9b2d0004a8c769ccef4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcccc33502ed5cb61c2fe6b32fde4e7b64bcc3beb725d9b2d0004a8c769ccef4->enter($__internal_dcccc33502ed5cb61c2fe6b32fde4e7b64bcc3beb725d9b2d0004a8c769ccef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6c1a4499d60b7787f56500c215571d12fbeb5a5090ed5573d94d03ef57ed847f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c1a4499d60b7787f56500c215571d12fbeb5a5090ed5573d94d03ef57ed847f->enter($__internal_6c1a4499d60b7787f56500c215571d12fbeb5a5090ed5573d94d03ef57ed847f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>";
        
        $__internal_6c1a4499d60b7787f56500c215571d12fbeb5a5090ed5573d94d03ef57ed847f->leave($__internal_6c1a4499d60b7787f56500c215571d12fbeb5a5090ed5573d94d03ef57ed847f_prof);

        
        $__internal_dcccc33502ed5cb61c2fe6b32fde4e7b64bcc3beb725d9b2d0004a8c769ccef4->leave($__internal_dcccc33502ed5cb61c2fe6b32fde4e7b64bcc3beb725d9b2d0004a8c769ccef4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b9feb11389a0bb3537583800ae22fbe8b1217a1806b221bbd9c120f40bf4cbd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9feb11389a0bb3537583800ae22fbe8b1217a1806b221bbd9c120f40bf4cbd3->enter($__internal_b9feb11389a0bb3537583800ae22fbe8b1217a1806b221bbd9c120f40bf4cbd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_12b194f4c407f04e586f0ace37aafcbb67860815b20d9429b293a02839adc504 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12b194f4c407f04e586f0ace37aafcbb67860815b20d9429b293a02839adc504->enter($__internal_12b194f4c407f04e586f0ace37aafcbb67860815b20d9429b293a02839adc504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        
        $__internal_12b194f4c407f04e586f0ace37aafcbb67860815b20d9429b293a02839adc504->leave($__internal_12b194f4c407f04e586f0ace37aafcbb67860815b20d9429b293a02839adc504_prof);

        
        $__internal_b9feb11389a0bb3537583800ae22fbe8b1217a1806b221bbd9c120f40bf4cbd3->leave($__internal_b9feb11389a0bb3537583800ae22fbe8b1217a1806b221bbd9c120f40bf4cbd3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 13,  84 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/gespinosa/Sites/Symfony4/doctrine/start/vendor/symfony/web-profiler-bundle/Resources/views/Collector/router.html.twig");
    }
}
