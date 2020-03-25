<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_67a7d9a4ee08ed23750a34f2cbfccb677bad739d1e32279733ab6d5b81e32aab extends Twig_Template
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
        $__internal_dc379cc9f4c835daba75cd3cf0a9296b7af3026f3a960f0a04815d0717f52b7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc379cc9f4c835daba75cd3cf0a9296b7af3026f3a960f0a04815d0717f52b7c->enter($__internal_dc379cc9f4c835daba75cd3cf0a9296b7af3026f3a960f0a04815d0717f52b7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_083c6cb5110518587a0f6dd182f35fd53d89dedd5e4a91c934c5dd4d5d8180db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_083c6cb5110518587a0f6dd182f35fd53d89dedd5e4a91c934c5dd4d5d8180db->enter($__internal_083c6cb5110518587a0f6dd182f35fd53d89dedd5e4a91c934c5dd4d5d8180db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_dc379cc9f4c835daba75cd3cf0a9296b7af3026f3a960f0a04815d0717f52b7c->leave($__internal_dc379cc9f4c835daba75cd3cf0a9296b7af3026f3a960f0a04815d0717f52b7c_prof);

        
        $__internal_083c6cb5110518587a0f6dd182f35fd53d89dedd5e4a91c934c5dd4d5d8180db->leave($__internal_083c6cb5110518587a0f6dd182f35fd53d89dedd5e4a91c934c5dd4d5d8180db_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/home/gespinosa/Sites/Symfony4/doctrine/start/vendor/symfony/framework-bundle/Resources/views/Form/search_widget.html.php");
    }
}
