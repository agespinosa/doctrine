<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_55fdede98bf18472e665fd329bea4bbb5183f5d4c8373314ea7b3458253d6018 extends Twig_Template
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
        $__internal_0c2efb041639b3bdf8bad228ec180d7957b326a2aef952f4270cc8ad7f40359d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c2efb041639b3bdf8bad228ec180d7957b326a2aef952f4270cc8ad7f40359d->enter($__internal_0c2efb041639b3bdf8bad228ec180d7957b326a2aef952f4270cc8ad7f40359d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_b2c14870eeebeee461705840a48ca819c452874849de2ff436faec865dbf5673 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2c14870eeebeee461705840a48ca819c452874849de2ff436faec865dbf5673->enter($__internal_b2c14870eeebeee461705840a48ca819c452874849de2ff436faec865dbf5673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_0c2efb041639b3bdf8bad228ec180d7957b326a2aef952f4270cc8ad7f40359d->leave($__internal_0c2efb041639b3bdf8bad228ec180d7957b326a2aef952f4270cc8ad7f40359d_prof);

        
        $__internal_b2c14870eeebeee461705840a48ca819c452874849de2ff436faec865dbf5673->leave($__internal_b2c14870eeebeee461705840a48ca819c452874849de2ff436faec865dbf5673_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/home/gespinosa/Sites/Symfony4/doctrine/start/vendor/symfony/framework-bundle/Resources/views/FormTable/button_row.html.php");
    }
}
