<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_8fe87f0880561c4f8c9312a9e49b8d35b6417069f54647b1a8ba987e702f1774 extends Twig_Template
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
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/Form/form_end.html.php", "/home/gespinosa/Sites/Symfony4/doctrine/start/vendor/symfony/framework-bundle/Resources/views/Form/form_end.html.php");
    }
}
