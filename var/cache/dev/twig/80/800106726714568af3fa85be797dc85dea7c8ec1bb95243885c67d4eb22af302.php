<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_8d2585c011415d8fa105a37a93f2961355b1f3435329a83a59ae5abd474bd393 extends Twig_Template
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
        $__internal_cd1829a26a52bb7b336a29a7e3a5552c87745d3c384d9c5619db7c34bb444b4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd1829a26a52bb7b336a29a7e3a5552c87745d3c384d9c5619db7c34bb444b4f->enter($__internal_cd1829a26a52bb7b336a29a7e3a5552c87745d3c384d9c5619db7c34bb444b4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_324d6391d03ecb88d37e5348137af5d66315858ad574d6b8a30c93531e7bc89b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_324d6391d03ecb88d37e5348137af5d66315858ad574d6b8a30c93531e7bc89b->enter($__internal_324d6391d03ecb88d37e5348137af5d66315858ad574d6b8a30c93531e7bc89b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_cd1829a26a52bb7b336a29a7e3a5552c87745d3c384d9c5619db7c34bb444b4f->leave($__internal_cd1829a26a52bb7b336a29a7e3a5552c87745d3c384d9c5619db7c34bb444b4f_prof);

        
        $__internal_324d6391d03ecb88d37e5348137af5d66315858ad574d6b8a30c93531e7bc89b->leave($__internal_324d6391d03ecb88d37e5348137af5d66315858ad574d6b8a30c93531e7bc89b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/home/gespinosa/Sites/Symfony4/doctrine/start/vendor/symfony/framework-bundle/Resources/views/Form/button_row.html.php");
    }
}
