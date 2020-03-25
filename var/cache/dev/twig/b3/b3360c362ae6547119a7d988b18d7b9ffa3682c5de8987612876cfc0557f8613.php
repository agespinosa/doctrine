<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_959ec2c71b0f3cd7b4b82cdbd87e36ce18a8be92e8a54bd43f51e8ebb7f150d2 extends Twig_Template
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
        $__internal_eb999c0bab71317fa642723f45a9f4c87a37f18b6aedcce7bada4d43423879b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb999c0bab71317fa642723f45a9f4c87a37f18b6aedcce7bada4d43423879b1->enter($__internal_eb999c0bab71317fa642723f45a9f4c87a37f18b6aedcce7bada4d43423879b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_8fbf81b28b9ba226289c66fe91e971ead883e6787dc4f02245a98b92d17793b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fbf81b28b9ba226289c66fe91e971ead883e6787dc4f02245a98b92d17793b8->enter($__internal_8fbf81b28b9ba226289c66fe91e971ead883e6787dc4f02245a98b92d17793b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_eb999c0bab71317fa642723f45a9f4c87a37f18b6aedcce7bada4d43423879b1->leave($__internal_eb999c0bab71317fa642723f45a9f4c87a37f18b6aedcce7bada4d43423879b1_prof);

        
        $__internal_8fbf81b28b9ba226289c66fe91e971ead883e6787dc4f02245a98b92d17793b8->leave($__internal_8fbf81b28b9ba226289c66fe91e971ead883e6787dc4f02245a98b92d17793b8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/home/gespinosa/Sites/Symfony4/doctrine/start/vendor/symfony/framework-bundle/Resources/views/Form/form_enctype.html.php");
    }
}
