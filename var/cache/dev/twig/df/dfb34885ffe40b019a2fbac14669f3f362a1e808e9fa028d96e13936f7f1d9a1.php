<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_0dd291f15cffeaa7ffb186f7130c5748fcde421f3e076c8526ed0b6a108bd489 extends Twig_Template
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
        $__internal_bc94275ceb97c7dd1d21291ad86a55a1db3088dfb2b0b4f0987ec20bf72ca8d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc94275ceb97c7dd1d21291ad86a55a1db3088dfb2b0b4f0987ec20bf72ca8d1->enter($__internal_bc94275ceb97c7dd1d21291ad86a55a1db3088dfb2b0b4f0987ec20bf72ca8d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_654e679c41d008cb30e857cc6270651ad7666aa11cae2209f66ff0cea4b94073 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_654e679c41d008cb30e857cc6270651ad7666aa11cae2209f66ff0cea4b94073->enter($__internal_654e679c41d008cb30e857cc6270651ad7666aa11cae2209f66ff0cea4b94073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_bc94275ceb97c7dd1d21291ad86a55a1db3088dfb2b0b4f0987ec20bf72ca8d1->leave($__internal_bc94275ceb97c7dd1d21291ad86a55a1db3088dfb2b0b4f0987ec20bf72ca8d1_prof);

        
        $__internal_654e679c41d008cb30e857cc6270651ad7666aa11cae2209f66ff0cea4b94073->leave($__internal_654e679c41d008cb30e857cc6270651ad7666aa11cae2209f66ff0cea4b94073_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/home/gespinosa/Sites/Symfony4/doctrine/start/vendor/symfony/framework-bundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
