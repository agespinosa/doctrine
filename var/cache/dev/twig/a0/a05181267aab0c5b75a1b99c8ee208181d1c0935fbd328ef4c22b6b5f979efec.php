<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_63feb48fd7fb8bc5f96f0b33f1cbe5b1560429149f3b1efe01202dbaa2394b46 extends Twig_Template
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
        $__internal_16a00576ed393e5a7ad86debd79cfa4507081b53072510257f7c3b80f3b908a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16a00576ed393e5a7ad86debd79cfa4507081b53072510257f7c3b80f3b908a6->enter($__internal_16a00576ed393e5a7ad86debd79cfa4507081b53072510257f7c3b80f3b908a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_f7290a3d7ca1efdd3ce092869ad736d658e99e295c126b06a348838a27b0ebfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7290a3d7ca1efdd3ce092869ad736d658e99e295c126b06a348838a27b0ebfd->enter($__internal_f7290a3d7ca1efdd3ce092869ad736d658e99e295c126b06a348838a27b0ebfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_16a00576ed393e5a7ad86debd79cfa4507081b53072510257f7c3b80f3b908a6->leave($__internal_16a00576ed393e5a7ad86debd79cfa4507081b53072510257f7c3b80f3b908a6_prof);

        
        $__internal_f7290a3d7ca1efdd3ce092869ad736d658e99e295c126b06a348838a27b0ebfd->leave($__internal_f7290a3d7ca1efdd3ce092869ad736d658e99e295c126b06a348838a27b0ebfd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/home/gespinosa/Sites/Symfony4/doctrine/start/vendor/symfony/framework-bundle/Resources/views/Form/choice_widget.html.php");
    }
}
