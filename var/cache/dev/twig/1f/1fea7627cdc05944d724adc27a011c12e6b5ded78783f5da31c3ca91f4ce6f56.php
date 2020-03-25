<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_3bd1ff672aec2ee8661d3a75d42b693033b8b277a5073477c112a91cdfe5b29b extends Twig_Template
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
        $__internal_c25e859d48003995a01fdddaf6c4cd22cd78681d65d521a7d333bff850a545d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c25e859d48003995a01fdddaf6c4cd22cd78681d65d521a7d333bff850a545d1->enter($__internal_c25e859d48003995a01fdddaf6c4cd22cd78681d65d521a7d333bff850a545d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_0238ee1edcbdf127de2deb754e1b985469fe39de3c61d5af1e88c46009f397e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0238ee1edcbdf127de2deb754e1b985469fe39de3c61d5af1e88c46009f397e7->enter($__internal_0238ee1edcbdf127de2deb754e1b985469fe39de3c61d5af1e88c46009f397e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_c25e859d48003995a01fdddaf6c4cd22cd78681d65d521a7d333bff850a545d1->leave($__internal_c25e859d48003995a01fdddaf6c4cd22cd78681d65d521a7d333bff850a545d1_prof);

        
        $__internal_0238ee1edcbdf127de2deb754e1b985469fe39de3c61d5af1e88c46009f397e7->leave($__internal_0238ee1edcbdf127de2deb754e1b985469fe39de3c61d5af1e88c46009f397e7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.rdf.twig", "/home/gespinosa/Sites/Symfony4/doctrine/start/vendor/symfony/twig-bundle/Resources/views/Exception/exception.rdf.twig");
    }
}
