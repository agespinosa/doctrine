<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_d0f97465a6b51126c928cc822f4e73ae24f55b6ba7cbf911984dc213c3bfa72c extends Twig_Template
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
        $__internal_7658678627069d26a434acdc0d7749ab0a2a528651218dbd00fd3c2027e321a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7658678627069d26a434acdc0d7749ab0a2a528651218dbd00fd3c2027e321a7->enter($__internal_7658678627069d26a434acdc0d7749ab0a2a528651218dbd00fd3c2027e321a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_4d7299057cce9de045c81e893bd9177ce4a19b6bf7de42822ca3735551a62c1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d7299057cce9de045c81e893bd9177ce4a19b6bf7de42822ca3735551a62c1f->enter($__internal_4d7299057cce9de045c81e893bd9177ce4a19b6bf7de42822ca3735551a62c1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_7658678627069d26a434acdc0d7749ab0a2a528651218dbd00fd3c2027e321a7->leave($__internal_7658678627069d26a434acdc0d7749ab0a2a528651218dbd00fd3c2027e321a7_prof);

        
        $__internal_4d7299057cce9de045c81e893bd9177ce4a19b6bf7de42822ca3735551a62c1f->leave($__internal_4d7299057cce9de045c81e893bd9177ce4a19b6bf7de42822ca3735551a62c1f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/home/gespinosa/Sites/Symfony4/doctrine/start/vendor/symfony/framework-bundle/Resources/views/Form/form_errors.html.php");
    }
}
