<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_e7b26b09a9ddb091f64fdf336b54eaac2b1bcbb10033fea67a7bbd4fe33a16e1 extends Twig_Template
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
        $__internal_c10994b5df8f388576256269fb3c0f98ec0f1405982eabee34e4e37b4b4caef9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c10994b5df8f388576256269fb3c0f98ec0f1405982eabee34e4e37b4b4caef9->enter($__internal_c10994b5df8f388576256269fb3c0f98ec0f1405982eabee34e4e37b4b4caef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_e77d904c5f8c19d37463fbd408e23c208b38183e25510027528fab7ec6793c9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e77d904c5f8c19d37463fbd408e23c208b38183e25510027528fab7ec6793c9a->enter($__internal_e77d904c5f8c19d37463fbd408e23c208b38183e25510027528fab7ec6793c9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_c10994b5df8f388576256269fb3c0f98ec0f1405982eabee34e4e37b4b4caef9->leave($__internal_c10994b5df8f388576256269fb3c0f98ec0f1405982eabee34e4e37b4b4caef9_prof);

        
        $__internal_e77d904c5f8c19d37463fbd408e23c208b38183e25510027528fab7ec6793c9a->leave($__internal_e77d904c5f8c19d37463fbd408e23c208b38183e25510027528fab7ec6793c9a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/home/gespinosa/Sites/Symfony4/doctrine/start/vendor/symfony/framework-bundle/Resources/views/Form/datetime_widget.html.php");
    }
}
