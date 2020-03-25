<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_c2e940808e32a853870d8883f96e0fc25f4c856394e3aeca285d287e86a52434 extends Twig_Template
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
        $__internal_d0ded0f76fd002b24a786fbe9e7f41917810c0e25e97a1ac0fb4e21ee17f17ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0ded0f76fd002b24a786fbe9e7f41917810c0e25e97a1ac0fb4e21ee17f17ae->enter($__internal_d0ded0f76fd002b24a786fbe9e7f41917810c0e25e97a1ac0fb4e21ee17f17ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_98a2836e739de5a0822f37d6c7c2984e78f02b6f6e567101b891fda560d64464 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98a2836e739de5a0822f37d6c7c2984e78f02b6f6e567101b891fda560d64464->enter($__internal_98a2836e739de5a0822f37d6c7c2984e78f02b6f6e567101b891fda560d64464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_d0ded0f76fd002b24a786fbe9e7f41917810c0e25e97a1ac0fb4e21ee17f17ae->leave($__internal_d0ded0f76fd002b24a786fbe9e7f41917810c0e25e97a1ac0fb4e21ee17f17ae_prof);

        
        $__internal_98a2836e739de5a0822f37d6c7c2984e78f02b6f6e567101b891fda560d64464->leave($__internal_98a2836e739de5a0822f37d6c7c2984e78f02b6f6e567101b891fda560d64464_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/home/gespinosa/Sites/Symfony4/doctrine/start/vendor/symfony/framework-bundle/Resources/views/Form/form_rest.html.php");
    }
}
