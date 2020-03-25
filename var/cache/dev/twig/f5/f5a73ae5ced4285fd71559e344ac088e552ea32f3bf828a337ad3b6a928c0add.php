<?php

/* @Framework/Form/form_label.html.php */
class __TwigTemplate_ae24fdcf7bd619d918e185a46b9553f5428cd5cd2b38c879b3c147a7109b5246 extends Twig_Template
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
        $__internal_ae753bb5371d099c0915a61bb7e1afec287cffa9a47bba1744249f54f4ddca18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae753bb5371d099c0915a61bb7e1afec287cffa9a47bba1744249f54f4ddca18->enter($__internal_ae753bb5371d099c0915a61bb7e1afec287cffa9a47bba1744249f54f4ddca18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_9ce8580ba35e4218fe95b1ced4493fe21f6b483dbf84e2705984fa44a1269741 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ce8580ba35e4218fe95b1ced4493fe21f6b483dbf84e2705984fa44a1269741->enter($__internal_9ce8580ba35e4218fe95b1ced4493fe21f6b483dbf84e2705984fa44a1269741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        // line 1
        echo "<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
";
        
        $__internal_ae753bb5371d099c0915a61bb7e1afec287cffa9a47bba1744249f54f4ddca18->leave($__internal_ae753bb5371d099c0915a61bb7e1afec287cffa9a47bba1744249f54f4ddca18_prof);

        
        $__internal_9ce8580ba35e4218fe95b1ced4493fe21f6b483dbf84e2705984fa44a1269741->leave($__internal_9ce8580ba35e4218fe95b1ced4493fe21f6b483dbf84e2705984fa44a1269741_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_label.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
", "@Framework/Form/form_label.html.php", "/home/gespinosa/Sites/Symfony4/doctrine/start/vendor/symfony/framework-bundle/Resources/views/Form/form_label.html.php");
    }
}
