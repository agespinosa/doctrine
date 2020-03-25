<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_e4101e25d9cb0734ad5a297f0bd899d0bc77c4d8f252e5bbfe21883a2b6bd408 extends Twig_Template
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
        $__internal_d916b352439606312e73786a6cf304572938252a78076dcdd272df1abeac1304 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d916b352439606312e73786a6cf304572938252a78076dcdd272df1abeac1304->enter($__internal_d916b352439606312e73786a6cf304572938252a78076dcdd272df1abeac1304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_6e501e112249726f8a0135363e9b42f97d2b1127f6b92630cf16d3e5f7ed1fa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e501e112249726f8a0135363e9b42f97d2b1127f6b92630cf16d3e5f7ed1fa5->enter($__internal_6e501e112249726f8a0135363e9b42f97d2b1127f6b92630cf16d3e5f7ed1fa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_d916b352439606312e73786a6cf304572938252a78076dcdd272df1abeac1304->leave($__internal_d916b352439606312e73786a6cf304572938252a78076dcdd272df1abeac1304_prof);

        
        $__internal_6e501e112249726f8a0135363e9b42f97d2b1127f6b92630cf16d3e5f7ed1fa5->leave($__internal_6e501e112249726f8a0135363e9b42f97d2b1127f6b92630cf16d3e5f7ed1fa5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/home/gespinosa/Sites/Symfony4/doctrine/start/vendor/symfony/framework-bundle/Resources/views/Form/password_widget.html.php");
    }
}
