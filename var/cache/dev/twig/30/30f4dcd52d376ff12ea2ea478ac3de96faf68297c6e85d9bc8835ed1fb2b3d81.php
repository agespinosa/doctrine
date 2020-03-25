<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_f0b2833e402049b6b82aefd080bfb753e27822df27a4ccfa645a0c5de17e3f30 extends Twig_Template
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
        $__internal_caea3889cd99f6ded7ecba78fd9a86977d628e889ff32c705039d57af85269d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_caea3889cd99f6ded7ecba78fd9a86977d628e889ff32c705039d57af85269d1->enter($__internal_caea3889cd99f6ded7ecba78fd9a86977d628e889ff32c705039d57af85269d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_f0d7286795ee49cc9d1bfc3bfbcd106c8336359e44dc1f58ca9f1b891913d928 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0d7286795ee49cc9d1bfc3bfbcd106c8336359e44dc1f58ca9f1b891913d928->enter($__internal_f0d7286795ee49cc9d1bfc3bfbcd106c8336359e44dc1f58ca9f1b891913d928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_caea3889cd99f6ded7ecba78fd9a86977d628e889ff32c705039d57af85269d1->leave($__internal_caea3889cd99f6ded7ecba78fd9a86977d628e889ff32c705039d57af85269d1_prof);

        
        $__internal_f0d7286795ee49cc9d1bfc3bfbcd106c8336359e44dc1f58ca9f1b891913d928->leave($__internal_f0d7286795ee49cc9d1bfc3bfbcd106c8336359e44dc1f58ca9f1b891913d928_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/home/gespinosa/Sites/Symfony4/doctrine/start/vendor/symfony/framework-bundle/Resources/views/Form/collection_widget.html.php");
    }
}
