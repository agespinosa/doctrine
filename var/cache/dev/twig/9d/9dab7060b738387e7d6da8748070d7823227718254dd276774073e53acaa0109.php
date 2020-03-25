<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_2b24b23c57b904ff955238dd2ce0ea297ae1854b73b60b9ec7c4b89a8a56c89d extends Twig_Template
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
        $__internal_f4b544c9033b0bc80f708c76b562433056c1ab4d9366d6e38c7bbbb11f8fb585 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4b544c9033b0bc80f708c76b562433056c1ab4d9366d6e38c7bbbb11f8fb585->enter($__internal_f4b544c9033b0bc80f708c76b562433056c1ab4d9366d6e38c7bbbb11f8fb585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_20472bd83a9a9ec7257e505bb433531cfb2d6864de36d0dd5b712d92cf3890f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20472bd83a9a9ec7257e505bb433531cfb2d6864de36d0dd5b712d92cf3890f1->enter($__internal_20472bd83a9a9ec7257e505bb433531cfb2d6864de36d0dd5b712d92cf3890f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_f4b544c9033b0bc80f708c76b562433056c1ab4d9366d6e38c7bbbb11f8fb585->leave($__internal_f4b544c9033b0bc80f708c76b562433056c1ab4d9366d6e38c7bbbb11f8fb585_prof);

        
        $__internal_20472bd83a9a9ec7257e505bb433531cfb2d6864de36d0dd5b712d92cf3890f1->leave($__internal_20472bd83a9a9ec7257e505bb433531cfb2d6864de36d0dd5b712d92cf3890f1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/home/gespinosa/Sites/Symfony4/doctrine/start/vendor/symfony/framework-bundle/Resources/views/Form/percent_widget.html.php");
    }
}
