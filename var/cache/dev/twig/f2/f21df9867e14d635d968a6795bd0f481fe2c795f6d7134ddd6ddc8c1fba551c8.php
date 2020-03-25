<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_6034520c7dbeaa77acf804018e6127e00e4c69375c61ff4c643abac3576f893d extends Twig_Template
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
        $__internal_f2514cacc9cfd91fefeebd481e6cd0b42d3acd29fd5ce285d7a441828a176665 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2514cacc9cfd91fefeebd481e6cd0b42d3acd29fd5ce285d7a441828a176665->enter($__internal_f2514cacc9cfd91fefeebd481e6cd0b42d3acd29fd5ce285d7a441828a176665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_19cd05791cc912def04f818a500628ac9f0b20a1ec063de55c36d37f8c0417cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19cd05791cc912def04f818a500628ac9f0b20a1ec063de55c36d37f8c0417cc->enter($__internal_19cd05791cc912def04f818a500628ac9f0b20a1ec063de55c36d37f8c0417cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_f2514cacc9cfd91fefeebd481e6cd0b42d3acd29fd5ce285d7a441828a176665->leave($__internal_f2514cacc9cfd91fefeebd481e6cd0b42d3acd29fd5ce285d7a441828a176665_prof);

        
        $__internal_19cd05791cc912def04f818a500628ac9f0b20a1ec063de55c36d37f8c0417cc->leave($__internal_19cd05791cc912def04f818a500628ac9f0b20a1ec063de55c36d37f8c0417cc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_start.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
", "@Framework/Form/form_start.html.php", "/home/gespinosa/Sites/Symfony4/doctrine/start/vendor/symfony/framework-bundle/Resources/views/Form/form_start.html.php");
    }
}
