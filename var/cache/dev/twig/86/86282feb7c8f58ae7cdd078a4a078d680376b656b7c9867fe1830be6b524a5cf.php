<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_81a8cfd8c9c945db09cdbf05986d0214c49c4bbc7106daadb81bc8ee26076dde extends Twig_Template
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
        $__internal_d6c93c3e64b7c05c9509a9d44b2bc70b13664bb21e6a169b4cf534c4a50b54ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6c93c3e64b7c05c9509a9d44b2bc70b13664bb21e6a169b4cf534c4a50b54ca->enter($__internal_d6c93c3e64b7c05c9509a9d44b2bc70b13664bb21e6a169b4cf534c4a50b54ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_239ca57013c86b291d5172a32eae09b622a1d3ccbaa3e8ccc0ed7d3f517b2c19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_239ca57013c86b291d5172a32eae09b622a1d3ccbaa3e8ccc0ed7d3f517b2c19->enter($__internal_239ca57013c86b291d5172a32eae09b622a1d3ccbaa3e8ccc0ed7d3f517b2c19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_d6c93c3e64b7c05c9509a9d44b2bc70b13664bb21e6a169b4cf534c4a50b54ca->leave($__internal_d6c93c3e64b7c05c9509a9d44b2bc70b13664bb21e6a169b4cf534c4a50b54ca_prof);

        
        $__internal_239ca57013c86b291d5172a32eae09b622a1d3ccbaa3e8ccc0ed7d3f517b2c19->leave($__internal_239ca57013c86b291d5172a32eae09b622a1d3ccbaa3e8ccc0ed7d3f517b2c19_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/home/gespinosa/Sites/Symfony4/doctrine/start/vendor/symfony/framework-bundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
