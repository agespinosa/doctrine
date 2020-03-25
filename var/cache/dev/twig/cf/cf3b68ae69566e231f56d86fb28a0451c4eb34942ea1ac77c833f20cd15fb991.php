<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_31e787f11dc7d2c6e46b49b8b90c8b2d87dcfa70c4b941b3c1c723672b21cdd4 extends Twig_Template
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
        $__internal_f8f87db0f9362ce9ab5e7a3cca13fec5f271943f880332f21e78dc925fc20cb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8f87db0f9362ce9ab5e7a3cca13fec5f271943f880332f21e78dc925fc20cb8->enter($__internal_f8f87db0f9362ce9ab5e7a3cca13fec5f271943f880332f21e78dc925fc20cb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_c82ac3f2241400b75e989f63dfe90cf0cc4958918eab798968fd88df97b181b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c82ac3f2241400b75e989f63dfe90cf0cc4958918eab798968fd88df97b181b8->enter($__internal_c82ac3f2241400b75e989f63dfe90cf0cc4958918eab798968fd88df97b181b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_f8f87db0f9362ce9ab5e7a3cca13fec5f271943f880332f21e78dc925fc20cb8->leave($__internal_f8f87db0f9362ce9ab5e7a3cca13fec5f271943f880332f21e78dc925fc20cb8_prof);

        
        $__internal_c82ac3f2241400b75e989f63dfe90cf0cc4958918eab798968fd88df97b181b8->leave($__internal_c82ac3f2241400b75e989f63dfe90cf0cc4958918eab798968fd88df97b181b8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/home/gespinosa/Sites/Symfony4/doctrine/start/vendor/symfony/framework-bundle/Resources/views/Form/button_widget.html.php");
    }
}
