<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_a06a67ef3f246cba8d79687575415029819cd393842f8351d9fc599dbd1394af extends Twig_Template
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
        $__internal_9afa1bdac3863b071448c1d435042728a09d20194b9a9ee9efca856e0d6350d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9afa1bdac3863b071448c1d435042728a09d20194b9a9ee9efca856e0d6350d7->enter($__internal_9afa1bdac3863b071448c1d435042728a09d20194b9a9ee9efca856e0d6350d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_9eaa6a06e1ee86211e61c39c1d0bde3119d37cdc81cd4d873cb22392702d18b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9eaa6a06e1ee86211e61c39c1d0bde3119d37cdc81cd4d873cb22392702d18b0->enter($__internal_9eaa6a06e1ee86211e61c39c1d0bde3119d37cdc81cd4d873cb22392702d18b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_9afa1bdac3863b071448c1d435042728a09d20194b9a9ee9efca856e0d6350d7->leave($__internal_9afa1bdac3863b071448c1d435042728a09d20194b9a9ee9efca856e0d6350d7_prof);

        
        $__internal_9eaa6a06e1ee86211e61c39c1d0bde3119d37cdc81cd4d873cb22392702d18b0->leave($__internal_9eaa6a06e1ee86211e61c39c1d0bde3119d37cdc81cd4d873cb22392702d18b0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/gespinosa/Sites/Symfony4/doctrine/start/vendor/symfony/framework-bundle/Resources/views/Form/reset_widget.html.php");
    }
}
