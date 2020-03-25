<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_101c446e6c282a884d78bb18fa55c16820a6d9da976fd9c2273f9128ba5c74fd extends Twig_Template
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
        $__internal_8013f380a594bc45f1552e371f801977f2787436e9808cf455992adc5d8700fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8013f380a594bc45f1552e371f801977f2787436e9808cf455992adc5d8700fc->enter($__internal_8013f380a594bc45f1552e371f801977f2787436e9808cf455992adc5d8700fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_145b3d0b8158a44806572ba3ad06f2a41e21cbfe46776e75f7f69fa03fbfe2be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_145b3d0b8158a44806572ba3ad06f2a41e21cbfe46776e75f7f69fa03fbfe2be->enter($__internal_145b3d0b8158a44806572ba3ad06f2a41e21cbfe46776e75f7f69fa03fbfe2be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_8013f380a594bc45f1552e371f801977f2787436e9808cf455992adc5d8700fc->leave($__internal_8013f380a594bc45f1552e371f801977f2787436e9808cf455992adc5d8700fc_prof);

        
        $__internal_145b3d0b8158a44806572ba3ad06f2a41e21cbfe46776e75f7f69fa03fbfe2be->leave($__internal_145b3d0b8158a44806572ba3ad06f2a41e21cbfe46776e75f7f69fa03fbfe2be_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/home/gespinosa/Sites/Symfony4/doctrine/start/vendor/symfony/framework-bundle/Resources/views/Form/form.html.php");
    }
}
