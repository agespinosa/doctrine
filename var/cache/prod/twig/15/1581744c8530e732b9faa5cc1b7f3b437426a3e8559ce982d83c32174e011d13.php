<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_0d71d1d927597e72c2311d56adb767728442f662dd47a663d404d7b6d6477715 extends Twig_Template
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
        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/Form/email_widget.html.php", "/home/gespinosa/Sites/Symfony4/doctrine/start/vendor/symfony/framework-bundle/Resources/views/Form/email_widget.html.php");
    }
}
