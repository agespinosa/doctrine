<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_206d1fdfa861b7aea1ef85802af6033c927001c818a3e27b19badcdcf20108b3 extends Twig_Template
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
        $__internal_6e08c75a9baa5c9e886473ff5d2d58507e77345cce0225da09925074c163c9de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e08c75a9baa5c9e886473ff5d2d58507e77345cce0225da09925074c163c9de->enter($__internal_6e08c75a9baa5c9e886473ff5d2d58507e77345cce0225da09925074c163c9de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_44175b8a3a742abc085c2ca8da88ea83079d4ba962a4b40325d02d21831eb380 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44175b8a3a742abc085c2ca8da88ea83079d4ba962a4b40325d02d21831eb380->enter($__internal_44175b8a3a742abc085c2ca8da88ea83079d4ba962a4b40325d02d21831eb380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_6e08c75a9baa5c9e886473ff5d2d58507e77345cce0225da09925074c163c9de->leave($__internal_6e08c75a9baa5c9e886473ff5d2d58507e77345cce0225da09925074c163c9de_prof);

        
        $__internal_44175b8a3a742abc085c2ca8da88ea83079d4ba962a4b40325d02d21831eb380->leave($__internal_44175b8a3a742abc085c2ca8da88ea83079d4ba962a4b40325d02d21831eb380_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "/home/gespinosa/Sites/Symfony4/doctrine/start/vendor/symfony/twig-bundle/Resources/views/Exception/exception.json.twig");
    }
}
