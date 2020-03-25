<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_88d63cbfdb21cf1d95abd9aa1a061e92bca3abe3835934a5cca2dbc84a98f456 extends Twig_Template
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
        $__internal_648399ad1b409d7c9cbb24ca4a5fc016d798fd8966ff5c063dc27c6cb3f92e7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_648399ad1b409d7c9cbb24ca4a5fc016d798fd8966ff5c063dc27c6cb3f92e7d->enter($__internal_648399ad1b409d7c9cbb24ca4a5fc016d798fd8966ff5c063dc27c6cb3f92e7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_1a141cffe571c5073477ea3a31a48d676bacfed9f4c08ad0663546fdd5cfe085 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a141cffe571c5073477ea3a31a48d676bacfed9f4c08ad0663546fdd5cfe085->enter($__internal_1a141cffe571c5073477ea3a31a48d676bacfed9f4c08ad0663546fdd5cfe085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_648399ad1b409d7c9cbb24ca4a5fc016d798fd8966ff5c063dc27c6cb3f92e7d->leave($__internal_648399ad1b409d7c9cbb24ca4a5fc016d798fd8966ff5c063dc27c6cb3f92e7d_prof);

        
        $__internal_1a141cffe571c5073477ea3a31a48d676bacfed9f4c08ad0663546fdd5cfe085->leave($__internal_1a141cffe571c5073477ea3a31a48d676bacfed9f4c08ad0663546fdd5cfe085_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/home/gespinosa/Sites/Symfony4/doctrine/start/vendor/symfony/framework-bundle/Resources/views/Form/email_widget.html.php");
    }
}
