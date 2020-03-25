<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_be9bfa9717dfba0a207b70575ea30e2700b31d89957484b0798251e843ddb64b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c93c6620c234ce33eb6ffed7f34a167cc8530dbe0fbe34faabf66a2d4c51cda4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c93c6620c234ce33eb6ffed7f34a167cc8530dbe0fbe34faabf66a2d4c51cda4->enter($__internal_c93c6620c234ce33eb6ffed7f34a167cc8530dbe0fbe34faabf66a2d4c51cda4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_f41d8d13fc7f68a704811e09485df31d3355aa2976b4827e7e73d2a923c92417 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f41d8d13fc7f68a704811e09485df31d3355aa2976b4827e7e73d2a923c92417->enter($__internal_f41d8d13fc7f68a704811e09485df31d3355aa2976b4827e7e73d2a923c92417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_c93c6620c234ce33eb6ffed7f34a167cc8530dbe0fbe34faabf66a2d4c51cda4->leave($__internal_c93c6620c234ce33eb6ffed7f34a167cc8530dbe0fbe34faabf66a2d4c51cda4_prof);

        
        $__internal_f41d8d13fc7f68a704811e09485df31d3355aa2976b4827e7e73d2a923c92417->leave($__internal_f41d8d13fc7f68a704811e09485df31d3355aa2976b4827e7e73d2a923c92417_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f5884b4fb135eb0cfc6783a35b2eba75dc326808a6f81a7832fed92a011c0c69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5884b4fb135eb0cfc6783a35b2eba75dc326808a6f81a7832fed92a011c0c69->enter($__internal_f5884b4fb135eb0cfc6783a35b2eba75dc326808a6f81a7832fed92a011c0c69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bd768b8ac7d339c740c64781a512a843ebfd7c765e8b9b38ba63e35e34318e5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd768b8ac7d339c740c64781a512a843ebfd7c765e8b9b38ba63e35e34318e5f->enter($__internal_bd768b8ac7d339c740c64781a512a843ebfd7c765e8b9b38ba63e35e34318e5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_bd768b8ac7d339c740c64781a512a843ebfd7c765e8b9b38ba63e35e34318e5f->leave($__internal_bd768b8ac7d339c740c64781a512a843ebfd7c765e8b9b38ba63e35e34318e5f_prof);

        
        $__internal_f5884b4fb135eb0cfc6783a35b2eba75dc326808a6f81a7832fed92a011c0c69->leave($__internal_f5884b4fb135eb0cfc6783a35b2eba75dc326808a6f81a7832fed92a011c0c69_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_fd7533ef4363183f4942cfcd1d01cf251b190cb08c0430bd312aeec4d428436e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd7533ef4363183f4942cfcd1d01cf251b190cb08c0430bd312aeec4d428436e->enter($__internal_fd7533ef4363183f4942cfcd1d01cf251b190cb08c0430bd312aeec4d428436e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5a56936dab2dfabcb808678d711309be9bc017804e3c5674a79534ee681298f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a56936dab2dfabcb808678d711309be9bc017804e3c5674a79534ee681298f3->enter($__internal_5a56936dab2dfabcb808678d711309be9bc017804e3c5674a79534ee681298f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_5a56936dab2dfabcb808678d711309be9bc017804e3c5674a79534ee681298f3->leave($__internal_5a56936dab2dfabcb808678d711309be9bc017804e3c5674a79534ee681298f3_prof);

        
        $__internal_fd7533ef4363183f4942cfcd1d01cf251b190cb08c0430bd312aeec4d428436e->leave($__internal_fd7533ef4363183f4942cfcd1d01cf251b190cb08c0430bd312aeec4d428436e_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_79211c624ffe9f6e9cb5f7c43c16cb9e33459b55625080f1bd2f1599936514d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79211c624ffe9f6e9cb5f7c43c16cb9e33459b55625080f1bd2f1599936514d3->enter($__internal_79211c624ffe9f6e9cb5f7c43c16cb9e33459b55625080f1bd2f1599936514d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_eefce611520fd9d7528defa668d72e933627409d018373d8584b08125d835bf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eefce611520fd9d7528defa668d72e933627409d018373d8584b08125d835bf3->enter($__internal_eefce611520fd9d7528defa668d72e933627409d018373d8584b08125d835bf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_eefce611520fd9d7528defa668d72e933627409d018373d8584b08125d835bf3->leave($__internal_eefce611520fd9d7528defa668d72e933627409d018373d8584b08125d835bf3_prof);

        
        $__internal_79211c624ffe9f6e9cb5f7c43c16cb9e33459b55625080f1bd2f1599936514d3->leave($__internal_79211c624ffe9f6e9cb5f7c43c16cb9e33459b55625080f1bd2f1599936514d3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 33,  116 => 10,  99 => 7,  85 => 34,  83 => 33,  75 => 26,  65 => 19,  58 => 15,  52 => 11,  50 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/home/gespinosa/Sites/Symfony4/doctrine/start/vendor/symfony/twig-bundle/Resources/views/layout.html.twig");
    }
}
