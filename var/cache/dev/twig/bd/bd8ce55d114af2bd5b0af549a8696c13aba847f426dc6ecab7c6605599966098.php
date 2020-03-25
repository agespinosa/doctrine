<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_039018aaf8ed4084111ecba97d5846860c4923af11c4457b020aa304dd771874 extends Twig_Template
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
        $__internal_a6bd35d63d8bc4cee85872e9eedaa2fcd303858ed5849ffad3a3bbf9c05dc7ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6bd35d63d8bc4cee85872e9eedaa2fcd303858ed5849ffad3a3bbf9c05dc7ca->enter($__internal_a6bd35d63d8bc4cee85872e9eedaa2fcd303858ed5849ffad3a3bbf9c05dc7ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_9684d27f8123412106d1d9145fc1c8c4c6d29057cd43e5bc6436d9f68fb29d02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9684d27f8123412106d1d9145fc1c8c4c6d29057cd43e5bc6436d9f68fb29d02->enter($__internal_9684d27f8123412106d1d9145fc1c8c4c6d29057cd43e5bc6436d9f68fb29d02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_a6bd35d63d8bc4cee85872e9eedaa2fcd303858ed5849ffad3a3bbf9c05dc7ca->leave($__internal_a6bd35d63d8bc4cee85872e9eedaa2fcd303858ed5849ffad3a3bbf9c05dc7ca_prof);

        
        $__internal_9684d27f8123412106d1d9145fc1c8c4c6d29057cd43e5bc6436d9f68fb29d02->leave($__internal_9684d27f8123412106d1d9145fc1c8c4c6d29057cd43e5bc6436d9f68fb29d02_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/home/gespinosa/Sites/Symfony4/doctrine/start/vendor/symfony/framework-bundle/Resources/views/Form/form_rows.html.php");
    }
}
