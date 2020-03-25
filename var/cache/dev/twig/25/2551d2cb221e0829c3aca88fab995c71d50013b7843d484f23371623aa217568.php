<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_9609a34e1ff886c12ec28701359143127789e89dc1d01508dac262068406acec extends Twig_Template
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
        $__internal_a56275cd463e30d8a30eb818b7bf2c7522c55b24e4712c6ec6f7322622700c5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a56275cd463e30d8a30eb818b7bf2c7522c55b24e4712c6ec6f7322622700c5a->enter($__internal_a56275cd463e30d8a30eb818b7bf2c7522c55b24e4712c6ec6f7322622700c5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_3c88952a124a4f8c7a410beb26492c32cdccd4df39425a935f4e6849bc7e862f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c88952a124a4f8c7a410beb26492c32cdccd4df39425a935f4e6849bc7e862f->enter($__internal_3c88952a124a4f8c7a410beb26492c32cdccd4df39425a935f4e6849bc7e862f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_a56275cd463e30d8a30eb818b7bf2c7522c55b24e4712c6ec6f7322622700c5a->leave($__internal_a56275cd463e30d8a30eb818b7bf2c7522c55b24e4712c6ec6f7322622700c5a_prof);

        
        $__internal_3c88952a124a4f8c7a410beb26492c32cdccd4df39425a935f4e6849bc7e862f->leave($__internal_3c88952a124a4f8c7a410beb26492c32cdccd4df39425a935f4e6849bc7e862f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/home/gespinosa/Sites/Symfony4/doctrine/start/vendor/symfony/framework-bundle/Resources/views/Form/integer_widget.html.php");
    }
}
