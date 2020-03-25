<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_daeea5b4be3b6fefff687ffbffd48eade785d553182ef0bcdb330f71f9abe08a extends Twig_Template
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
        $__internal_c9001af66bac249e4ed6d9eae3c05d8315475c952e512adefb6d594dd22756d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9001af66bac249e4ed6d9eae3c05d8315475c952e512adefb6d594dd22756d9->enter($__internal_c9001af66bac249e4ed6d9eae3c05d8315475c952e512adefb6d594dd22756d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_e8e19a5ff1f158087ed0fb0e85d4e45acee2b7cc68d1a059605e98fce9f0108a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8e19a5ff1f158087ed0fb0e85d4e45acee2b7cc68d1a059605e98fce9f0108a->enter($__internal_e8e19a5ff1f158087ed0fb0e85d4e45acee2b7cc68d1a059605e98fce9f0108a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_c9001af66bac249e4ed6d9eae3c05d8315475c952e512adefb6d594dd22756d9->leave($__internal_c9001af66bac249e4ed6d9eae3c05d8315475c952e512adefb6d594dd22756d9_prof);

        
        $__internal_e8e19a5ff1f158087ed0fb0e85d4e45acee2b7cc68d1a059605e98fce9f0108a->leave($__internal_e8e19a5ff1f158087ed0fb0e85d4e45acee2b7cc68d1a059605e98fce9f0108a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/home/gespinosa/Sites/Symfony4/doctrine/start/vendor/symfony/framework-bundle/Resources/views/Form/number_widget.html.php");
    }
}
