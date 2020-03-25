<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_1b7cdfdbca9264d5d3bdb2a5b7f102b25721d0f98f53346cb920c4158a1e1fb0 extends Twig_Template
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
        $__internal_1da81b13759195e28d5dc9559c91d15ced80aec251c7671c733fc1c0c53b4f3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1da81b13759195e28d5dc9559c91d15ced80aec251c7671c733fc1c0c53b4f3b->enter($__internal_1da81b13759195e28d5dc9559c91d15ced80aec251c7671c733fc1c0c53b4f3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_c4319b87ea93ce4d6d0d9db36da124e39b33388da577ff655d686dbfd125be6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4319b87ea93ce4d6d0d9db36da124e39b33388da577ff655d686dbfd125be6d->enter($__internal_c4319b87ea93ce4d6d0d9db36da124e39b33388da577ff655d686dbfd125be6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_1da81b13759195e28d5dc9559c91d15ced80aec251c7671c733fc1c0c53b4f3b->leave($__internal_1da81b13759195e28d5dc9559c91d15ced80aec251c7671c733fc1c0c53b4f3b_prof);

        
        $__internal_c4319b87ea93ce4d6d0d9db36da124e39b33388da577ff655d686dbfd125be6d->leave($__internal_c4319b87ea93ce4d6d0d9db36da124e39b33388da577ff655d686dbfd125be6d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/home/gespinosa/Sites/Symfony4/doctrine/start/vendor/symfony/framework-bundle/Resources/views/Form/form_end.html.php");
    }
}
