<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_6b8c8ea4fcf61e7a06df7a452d4a799d8920039c635a193ffb1f2b1a51510b8c extends Twig_Template
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
        $__internal_d5b1d56c498d677821d3877212673dcc3d95686fb84b4bdc2388126748624b0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5b1d56c498d677821d3877212673dcc3d95686fb84b4bdc2388126748624b0f->enter($__internal_d5b1d56c498d677821d3877212673dcc3d95686fb84b4bdc2388126748624b0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_82b8a96a135a041b08ab9e3cf3faacc1b877fe53e959613263d188198abed34f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82b8a96a135a041b08ab9e3cf3faacc1b877fe53e959613263d188198abed34f->enter($__internal_82b8a96a135a041b08ab9e3cf3faacc1b877fe53e959613263d188198abed34f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_d5b1d56c498d677821d3877212673dcc3d95686fb84b4bdc2388126748624b0f->leave($__internal_d5b1d56c498d677821d3877212673dcc3d95686fb84b4bdc2388126748624b0f_prof);

        
        $__internal_82b8a96a135a041b08ab9e3cf3faacc1b877fe53e959613263d188198abed34f->leave($__internal_82b8a96a135a041b08ab9e3cf3faacc1b877fe53e959613263d188198abed34f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/home/gespinosa/Sites/Symfony4/doctrine/start/vendor/symfony/framework-bundle/Resources/views/Form/form_widget.html.php");
    }
}
