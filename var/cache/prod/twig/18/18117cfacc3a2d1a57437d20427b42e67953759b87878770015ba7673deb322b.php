<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_0c346cb03f778f1a994b76b40c102ac94702b9edd8b6f9acecbbcd2ad92cb9b8 extends Twig_Template
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
        echo "<?php echo \$view['form']->formEncodeCurrency(\$money_pattern, \$view['form']->block(\$form, 'form_widget_simple')) ?>
";
    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/Form/money_widget.html.php", "/home/gespinosa/Sites/Symfony4/doctrine/start/vendor/symfony/framework-bundle/Resources/views/Form/money_widget.html.php");
    }
}
