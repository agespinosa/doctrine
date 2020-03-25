<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_5f0c3ca0954f93e04ccf3181d5d3b67a769008885eb857fb297eb015866640ae extends Twig_Template
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
        $__internal_c5f510525a33b806e68091d7a7232ae73822bd32ab3be6be68f6373b5bfa9a75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5f510525a33b806e68091d7a7232ae73822bd32ab3be6be68f6373b5bfa9a75->enter($__internal_c5f510525a33b806e68091d7a7232ae73822bd32ab3be6be68f6373b5bfa9a75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_4aca861d023a1d5186294cf6d44fd02e44da51fbc8bbb6467d88865f2d70cab1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4aca861d023a1d5186294cf6d44fd02e44da51fbc8bbb6467d88865f2d70cab1->enter($__internal_4aca861d023a1d5186294cf6d44fd02e44da51fbc8bbb6467d88865f2d70cab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_c5f510525a33b806e68091d7a7232ae73822bd32ab3be6be68f6373b5bfa9a75->leave($__internal_c5f510525a33b806e68091d7a7232ae73822bd32ab3be6be68f6373b5bfa9a75_prof);

        
        $__internal_4aca861d023a1d5186294cf6d44fd02e44da51fbc8bbb6467d88865f2d70cab1->leave($__internal_4aca861d023a1d5186294cf6d44fd02e44da51fbc8bbb6467d88865f2d70cab1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/home/gespinosa/Sites/Symfony4/doctrine/start/vendor/symfony/framework-bundle/Resources/views/FormTable/form_row.html.php");
    }
}
