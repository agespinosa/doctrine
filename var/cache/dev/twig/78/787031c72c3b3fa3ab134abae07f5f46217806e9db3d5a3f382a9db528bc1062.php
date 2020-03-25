<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_41aaac1f41bff8cb65fdc27ab03efebf1d8210c915e96da265f1d0b8c5d86942 extends Twig_Template
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
        $__internal_55f5558e32e4cc2a79f8c18fe44741d950ca1509640726fb774432d4b126f942 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55f5558e32e4cc2a79f8c18fe44741d950ca1509640726fb774432d4b126f942->enter($__internal_55f5558e32e4cc2a79f8c18fe44741d950ca1509640726fb774432d4b126f942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_bad2d4147f2e005582933a88b8ee631053a62ac27a144dbc0d29439608966547 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bad2d4147f2e005582933a88b8ee631053a62ac27a144dbc0d29439608966547->enter($__internal_bad2d4147f2e005582933a88b8ee631053a62ac27a144dbc0d29439608966547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        // line 1
        echo "        <traces>";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_55f5558e32e4cc2a79f8c18fe44741d950ca1509640726fb774432d4b126f942->leave($__internal_55f5558e32e4cc2a79f8c18fe44741d950ca1509640726fb774432d4b126f942_prof);

        
        $__internal_bad2d4147f2e005582933a88b8ee631053a62ac27a144dbc0d29439608966547->leave($__internal_bad2d4147f2e005582933a88b8ee631053a62ac27a144dbc0d29439608966547_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "@Twig/Exception/traces.xml.twig", "/home/gespinosa/Sites/Symfony4/doctrine/start/vendor/symfony/twig-bundle/Resources/views/Exception/traces.xml.twig");
    }
}
