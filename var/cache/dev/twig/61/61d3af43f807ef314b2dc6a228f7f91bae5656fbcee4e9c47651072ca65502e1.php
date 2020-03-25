<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_904626871ad63a8043ceed8a8a06b11a0db595893fc810c51f0d41a4254f2231 extends Twig_Template
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
        $__internal_76726198b59322238f58a048e5457781dcd25f418baf61ca08a6b75bbd1b6b85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76726198b59322238f58a048e5457781dcd25f418baf61ca08a6b75bbd1b6b85->enter($__internal_76726198b59322238f58a048e5457781dcd25f418baf61ca08a6b75bbd1b6b85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_fbcd1b7137c9d389121f58bd2f16c195563284bd416c9d59c42777cfee856d60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbcd1b7137c9d389121f58bd2f16c195563284bd416c9d59c42777cfee856d60->enter($__internal_fbcd1b7137c9d389121f58bd2f16c195563284bd416c9d59c42777cfee856d60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo "

*/
";
        
        $__internal_76726198b59322238f58a048e5457781dcd25f418baf61ca08a6b75bbd1b6b85->leave($__internal_76726198b59322238f58a048e5457781dcd25f418baf61ca08a6b75bbd1b6b85_prof);

        
        $__internal_fbcd1b7137c9d389121f58bd2f16c195563284bd416c9d59c42777cfee856d60->leave($__internal_fbcd1b7137c9d389121f58bd2f16c195563284bd416c9d59c42777cfee856d60_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.css.twig", "/home/gespinosa/Sites/Symfony4/doctrine/start/vendor/symfony/twig-bundle/Resources/views/Exception/error.css.twig");
    }
}
