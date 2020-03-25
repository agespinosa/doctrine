<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_40fe595a742d90eac7663d2f4a00b761f30467c21a57a1dd67a19cd44624d359 extends Twig_Template
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
        $__internal_72f685ea4df5107c59a9d094b5df18b24a89f02253752b33c47ceff84376261e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72f685ea4df5107c59a9d094b5df18b24a89f02253752b33c47ceff84376261e->enter($__internal_72f685ea4df5107c59a9d094b5df18b24a89f02253752b33c47ceff84376261e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_22b5eee4210ac24a557fc1a568b67aa05811c968dab1580376cedb84f0d79c5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22b5eee4210ac24a557fc1a568b67aa05811c968dab1580376cedb84f0d79c5a->enter($__internal_22b5eee4210ac24a557fc1a568b67aa05811c968dab1580376cedb84f0d79c5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_72f685ea4df5107c59a9d094b5df18b24a89f02253752b33c47ceff84376261e->leave($__internal_72f685ea4df5107c59a9d094b5df18b24a89f02253752b33c47ceff84376261e_prof);

        
        $__internal_22b5eee4210ac24a557fc1a568b67aa05811c968dab1580376cedb84f0d79c5a->leave($__internal_22b5eee4210ac24a557fc1a568b67aa05811c968dab1580376cedb84f0d79c5a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/home/gespinosa/Sites/Symfony4/doctrine/start/vendor/symfony/framework-bundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
