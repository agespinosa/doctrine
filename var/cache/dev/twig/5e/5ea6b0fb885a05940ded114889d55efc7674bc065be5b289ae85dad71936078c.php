<?php

/* @WebProfiler/Collector/exception.css.twig */
class __TwigTemplate_b2e67070a131d238bd2d0f765bd58299a71b285f832246917973b1680cff27db extends Twig_Template
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
        $__internal_a5d884d53c2707d938af341cd47acab9dcbc121969c44c6793eb28048969e0e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5d884d53c2707d938af341cd47acab9dcbc121969c44c6793eb28048969e0e4->enter($__internal_a5d884d53c2707d938af341cd47acab9dcbc121969c44c6793eb28048969e0e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        $__internal_d15d21d2120be2c26d932b5f9aea25ee48a65dee71c99f818be9bcd03241cff3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d15d21d2120be2c26d932b5f9aea25ee48a65dee71c99f818be9bcd03241cff3->enter($__internal_d15d21d2120be2c26d932b5f9aea25ee48a65dee71c99f818be9bcd03241cff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_a5d884d53c2707d938af341cd47acab9dcbc121969c44c6793eb28048969e0e4->leave($__internal_a5d884d53c2707d938af341cd47acab9dcbc121969c44c6793eb28048969e0e4_prof);

        
        $__internal_d15d21d2120be2c26d932b5f9aea25ee48a65dee71c99f818be9bcd03241cff3->leave($__internal_d15d21d2120be2c26d932b5f9aea25ee48a65dee71c99f818be9bcd03241cff3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.css.twig";
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
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "@WebProfiler/Collector/exception.css.twig", "/home/gespinosa/Sites/Symfony4/doctrine/start/vendor/symfony/web-profiler-bundle/Resources/views/Collector/exception.css.twig");
    }
}
