<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_1f0da27792399aba3a16051da37d31ef1094a88463d25ebc07ed1efa713c5217 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_73837512d7e1b95b53b96c5a8c44ae8b09fdf83f22afe93c3d37631466864673 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73837512d7e1b95b53b96c5a8c44ae8b09fdf83f22afe93c3d37631466864673->enter($__internal_73837512d7e1b95b53b96c5a8c44ae8b09fdf83f22afe93c3d37631466864673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_1d773ca6ad5846b3c8790674594968cd1cd6671a290e754c9534bb6be572e03d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d773ca6ad5846b3c8790674594968cd1cd6671a290e754c9534bb6be572e03d->enter($__internal_1d773ca6ad5846b3c8790674594968cd1cd6671a290e754c9534bb6be572e03d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73837512d7e1b95b53b96c5a8c44ae8b09fdf83f22afe93c3d37631466864673->leave($__internal_73837512d7e1b95b53b96c5a8c44ae8b09fdf83f22afe93c3d37631466864673_prof);

        
        $__internal_1d773ca6ad5846b3c8790674594968cd1cd6671a290e754c9534bb6be572e03d->leave($__internal_1d773ca6ad5846b3c8790674594968cd1cd6671a290e754c9534bb6be572e03d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_92832e8ad71513edaeac3ef60e21372c6672cd9f9d0b6b503b98769f9d6af29f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92832e8ad71513edaeac3ef60e21372c6672cd9f9d0b6b503b98769f9d6af29f->enter($__internal_92832e8ad71513edaeac3ef60e21372c6672cd9f9d0b6b503b98769f9d6af29f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a4626b5bed210bfda03b16cfb318789b9f0c030817be9a81381e784277e78fb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4626b5bed210bfda03b16cfb318789b9f0c030817be9a81381e784277e78fb2->enter($__internal_a4626b5bed210bfda03b16cfb318789b9f0c030817be9a81381e784277e78fb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>";
        
        $__internal_a4626b5bed210bfda03b16cfb318789b9f0c030817be9a81381e784277e78fb2->leave($__internal_a4626b5bed210bfda03b16cfb318789b9f0c030817be9a81381e784277e78fb2_prof);

        
        $__internal_92832e8ad71513edaeac3ef60e21372c6672cd9f9d0b6b503b98769f9d6af29f->leave($__internal_92832e8ad71513edaeac3ef60e21372c6672cd9f9d0b6b503b98769f9d6af29f_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_0695724b5d9f828aee5afde23035ca1c705ca0720a81dc583930ab7a6569454b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0695724b5d9f828aee5afde23035ca1c705ca0720a81dc583930ab7a6569454b->enter($__internal_0695724b5d9f828aee5afde23035ca1c705ca0720a81dc583930ab7a6569454b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7d0024399348b55c257f3bfce535f6697ff076ad021e75612da6b08fa51bde4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d0024399348b55c257f3bfce535f6697ff076ad021e75612da6b08fa51bde4a->enter($__internal_7d0024399348b55c257f3bfce535f6697ff076ad021e75612da6b08fa51bde4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")";
        
        $__internal_7d0024399348b55c257f3bfce535f6697ff076ad021e75612da6b08fa51bde4a->leave($__internal_7d0024399348b55c257f3bfce535f6697ff076ad021e75612da6b08fa51bde4a_prof);

        
        $__internal_0695724b5d9f828aee5afde23035ca1c705ca0720a81dc583930ab7a6569454b->leave($__internal_0695724b5d9f828aee5afde23035ca1c705ca0720a81dc583930ab7a6569454b_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_4c1b49d8e57a3412fd5745801bd5800b0096ba5e2179f7bacbacd3293687dd38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c1b49d8e57a3412fd5745801bd5800b0096ba5e2179f7bacbacd3293687dd38->enter($__internal_4c1b49d8e57a3412fd5745801bd5800b0096ba5e2179f7bacbacd3293687dd38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b23b3a03decdcedb3c6485890cde415288f6306a8a6cdbea5fb95a1e3addb673 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b23b3a03decdcedb3c6485890cde415288f6306a8a6cdbea5fb95a1e3addb673->enter($__internal_b23b3a03decdcedb3c6485890cde415288f6306a8a6cdbea5fb95a1e3addb673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_b23b3a03decdcedb3c6485890cde415288f6306a8a6cdbea5fb95a1e3addb673->leave($__internal_b23b3a03decdcedb3c6485890cde415288f6306a8a6cdbea5fb95a1e3addb673_prof);

        
        $__internal_4c1b49d8e57a3412fd5745801bd5800b0096ba5e2179f7bacbacd3293687dd38->leave($__internal_4c1b49d8e57a3412fd5745801bd5800b0096ba5e2179f7bacbacd3293687dd38_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 141,  213 => 140,  199 => 137,  190 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/gespinosa/Sites/Symfony4/doctrine/start/vendor/symfony/twig-bundle/Resources/views/Exception/exception_full.html.twig");
    }
}
