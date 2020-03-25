<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_a1d2c1db237fe0394e0d5a8288c6ee7baf5d7f307ee5954cb7ea858cb046c86f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_270ac49fd26b8cd3b42c51d0b57b51c9272e8057e39178e9ca5966598c3288d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_270ac49fd26b8cd3b42c51d0b57b51c9272e8057e39178e9ca5966598c3288d9->enter($__internal_270ac49fd26b8cd3b42c51d0b57b51c9272e8057e39178e9ca5966598c3288d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_a276c009a464c8519c331eb86c010ce5ffea58f668e17fd4cb4d123d30a855fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a276c009a464c8519c331eb86c010ce5ffea58f668e17fd4cb4d123d30a855fa->enter($__internal_a276c009a464c8519c331eb86c010ce5ffea58f668e17fd4cb4d123d30a855fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_270ac49fd26b8cd3b42c51d0b57b51c9272e8057e39178e9ca5966598c3288d9->leave($__internal_270ac49fd26b8cd3b42c51d0b57b51c9272e8057e39178e9ca5966598c3288d9_prof);

        
        $__internal_a276c009a464c8519c331eb86c010ce5ffea58f668e17fd4cb4d123d30a855fa->leave($__internal_a276c009a464c8519c331eb86c010ce5ffea58f668e17fd4cb4d123d30a855fa_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_623cc4b937a9bd1a367587af4ae7a0365a0367eb3b929361447f224ab02c5acd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_623cc4b937a9bd1a367587af4ae7a0365a0367eb3b929361447f224ab02c5acd->enter($__internal_623cc4b937a9bd1a367587af4ae7a0365a0367eb3b929361447f224ab02c5acd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_66b9d79457c9448fdec9648cf7cba49ccbb021ca16b36a021f802d1aeec516eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66b9d79457c9448fdec9648cf7cba49ccbb021ca16b36a021f802d1aeec516eb->enter($__internal_66b9d79457c9448fdec9648cf7cba49ccbb021ca16b36a021f802d1aeec516eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>";
        }
        // line 9
        $this->displayParentBlock("head", $context, $blocks);
        
        $__internal_66b9d79457c9448fdec9648cf7cba49ccbb021ca16b36a021f802d1aeec516eb->leave($__internal_66b9d79457c9448fdec9648cf7cba49ccbb021ca16b36a021f802d1aeec516eb_prof);

        
        $__internal_623cc4b937a9bd1a367587af4ae7a0365a0367eb3b929361447f224ab02c5acd->leave($__internal_623cc4b937a9bd1a367587af4ae7a0365a0367eb3b929361447f224ab02c5acd_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_491fad834c8e2da73e77bb6a460490e171de99b2cef57388db5492986f2efaa9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_491fad834c8e2da73e77bb6a460490e171de99b2cef57388db5492986f2efaa9->enter($__internal_491fad834c8e2da73e77bb6a460490e171de99b2cef57388db5492986f2efaa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_44f2e456a5a806415f63dbc9a4eadf7f83ec01b9938b9170ab0009c491395df9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44f2e456a5a806415f63dbc9a4eadf7f83ec01b9938b9170ab0009c491395df9->enter($__internal_44f2e456a5a806415f63dbc9a4eadf7f83ec01b9938b9170ab0009c491395df9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>";
        }
        // line 21
        echo "    </span>";
        
        $__internal_44f2e456a5a806415f63dbc9a4eadf7f83ec01b9938b9170ab0009c491395df9->leave($__internal_44f2e456a5a806415f63dbc9a4eadf7f83ec01b9938b9170ab0009c491395df9_prof);

        
        $__internal_491fad834c8e2da73e77bb6a460490e171de99b2cef57388db5492986f2efaa9->leave($__internal_491fad834c8e2da73e77bb6a460490e171de99b2cef57388db5492986f2efaa9_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3bcee28a9bf6a96a1c8659b39c306b0a3cc66578eaa403625fcc3748cf172012 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bcee28a9bf6a96a1c8659b39c306b0a3cc66578eaa403625fcc3748cf172012->enter($__internal_3bcee28a9bf6a96a1c8659b39c306b0a3cc66578eaa403625fcc3748cf172012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_868bf4dfaf18db122a647f12712c10fd1ceec3edf47563bf1ce0abae83288478 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_868bf4dfaf18db122a647f12712c10fd1ceec3edf47563bf1ce0abae83288478->enter($__internal_868bf4dfaf18db122a647f12712c10fd1ceec3edf47563bf1ce0abae83288478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>";
        }
        
        $__internal_868bf4dfaf18db122a647f12712c10fd1ceec3edf47563bf1ce0abae83288478->leave($__internal_868bf4dfaf18db122a647f12712c10fd1ceec3edf47563bf1ce0abae83288478_prof);

        
        $__internal_3bcee28a9bf6a96a1c8659b39c306b0a3cc66578eaa403625fcc3748cf172012->leave($__internal_3bcee28a9bf6a96a1c8659b39c306b0a3cc66578eaa403625fcc3748cf172012_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 33,  123 => 32,  118 => 28,  116 => 27,  114 => 25,  105 => 24,  95 => 21,  90 => 17,  88 => 16,  84 => 14,  79 => 13,  70 => 12,  60 => 9,  55 => 6,  53 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/gespinosa/Sites/Symfony4/doctrine/start/vendor/symfony/web-profiler-bundle/Resources/views/Collector/exception.html.twig");
    }
}
