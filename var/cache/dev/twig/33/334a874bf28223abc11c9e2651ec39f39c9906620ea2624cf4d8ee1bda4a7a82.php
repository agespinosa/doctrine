<?php

/* base.html.twig */
class __TwigTemplate_e4e6ac2fbeca3d3a38978e0898876e265edd80a20e9121fdf56cd17bf08543cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b5c2e119b4b9114f923559c96f5593477c4de5499b9be833a6ad49cb8ef67a8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5c2e119b4b9114f923559c96f5593477c4de5499b9be833a6ad49cb8ef67a8f->enter($__internal_b5c2e119b4b9114f923559c96f5593477c4de5499b9be833a6ad49cb8ef67a8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_cfe4806243b70b92e4902d22ccbfcfd41ba8606854752d303104388e9b3add71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfe4806243b70b92e4902d22ccbfcfd41ba8606854752d303104388e9b3add71->enter($__internal_cfe4806243b70b92e4902d22ccbfcfd41ba8606854752d303104388e9b3add71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">

    <head>
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "    </head>

    <body>
        <nav class=\"navbar navbar-expand-lg navbar-dark navbar-bg mb-5\">
            <a style=\"margin-left: 75px;\" class=\"navbar-brand space-brand\" href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_homepage");
        echo "\">The Space Bar</a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
          </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
                <ul class=\"navbar-nav mr-auto\">
                     <li class=\"nav-item\">
                       <a style=\"color: #fff;\" class=\"nav-link\" href=\"#\">Local Asteroids</a>
                     </li>
                     <li class=\"nav-item\">
                       <a style=\"color: #fff;\" class=\"nav-link\" href=\"#\">Weather</a>
                     </li>
                   </ul>
                <form class=\"form-inline my-2 my-lg-0\">
                    <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
                    <button class=\"btn btn-info my-2 my-sm-0\" type=\"submit\">Search</button>
                </form>
                <ul class=\"navbar-nav ml-auto\">
                    <li class=\"nav-item dropdown\" style=\"margin-right: 75px;\">
                        <a class=\"nav-link dropdown-toggle\" href=\"http://example.com\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                          <img class=\"nav-profile-img rounded-circle\" src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/astronaut-profile.png"), "html", null, true);
        echo "\">
                        </a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                            <a class=\"dropdown-item\" href=\"#\">Profile</a>
                            <a class=\"dropdown-item\" href=\"#\">Create Post</a>
                            <a class=\"dropdown-item\" href=\"#\">Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>";
        // line 50
        $this->displayBlock('body', $context, $blocks);
        // line 51
        echo "
        <footer class=\"footer\">
            <div class=\"container text-center\">
                <span class=\"text-muted\">Made with <i class=\"fa fa-heart\" style=\"color: red;\"></i> by the guys and gals at <a href=\"https://knpuniversity.com\">KnpUniversity</a></span>
            </div>
        </footer>";
        // line 59
        $this->displayBlock('javascripts', $context, $blocks);
        // line 67
        echo "    </body>
</html>
";
        
        $__internal_b5c2e119b4b9114f923559c96f5593477c4de5499b9be833a6ad49cb8ef67a8f->leave($__internal_b5c2e119b4b9114f923559c96f5593477c4de5499b9be833a6ad49cb8ef67a8f_prof);

        
        $__internal_cfe4806243b70b92e4902d22ccbfcfd41ba8606854752d303104388e9b3add71->leave($__internal_cfe4806243b70b92e4902d22ccbfcfd41ba8606854752d303104388e9b3add71_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f30e3046ebc87add5853e0eddcec2f29492fb18313548a7e59b35be94fc510b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f30e3046ebc87add5853e0eddcec2f29492fb18313548a7e59b35be94fc510b3->enter($__internal_f30e3046ebc87add5853e0eddcec2f29492fb18313548a7e59b35be94fc510b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2c7b265c51f85f1edb3fd569c7e7769244d2ac7182ceda559ffd3a672db09e0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c7b265c51f85f1edb3fd569c7e7769244d2ac7182ceda559ffd3a672db09e0f->enter($__internal_2c7b265c51f85f1edb3fd569c7e7769244d2ac7182ceda559ffd3a672db09e0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome to the SpaceBar";
        
        $__internal_2c7b265c51f85f1edb3fd569c7e7769244d2ac7182ceda559ffd3a672db09e0f->leave($__internal_2c7b265c51f85f1edb3fd569c7e7769244d2ac7182ceda559ffd3a672db09e0f_prof);

        
        $__internal_f30e3046ebc87add5853e0eddcec2f29492fb18313548a7e59b35be94fc510b3->leave($__internal_f30e3046ebc87add5853e0eddcec2f29492fb18313548a7e59b35be94fc510b3_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c22eea83394dddc182cdf070529cb1bd909c00608939c403fc0ec3af77cc3507 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c22eea83394dddc182cdf070529cb1bd909c00608939c403fc0ec3af77cc3507->enter($__internal_c22eea83394dddc182cdf070529cb1bd909c00608939c403fc0ec3af77cc3507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ad67d07e35b38f63092ae4a0a50b680e960f517801e74ceb3ee9d0c2503e11a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad67d07e35b38f63092ae4a0a50b680e960f517801e74ceb3ee9d0c2503e11a6->enter($__internal_ad67d07e35b38f63092ae4a0a50b680e960f517801e74ceb3ee9d0c2503e11a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css\" integrity=\"sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb\" crossorigin=\"anonymous\">
            <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\">";
        
        $__internal_ad67d07e35b38f63092ae4a0a50b680e960f517801e74ceb3ee9d0c2503e11a6->leave($__internal_ad67d07e35b38f63092ae4a0a50b680e960f517801e74ceb3ee9d0c2503e11a6_prof);

        
        $__internal_c22eea83394dddc182cdf070529cb1bd909c00608939c403fc0ec3af77cc3507->leave($__internal_c22eea83394dddc182cdf070529cb1bd909c00608939c403fc0ec3af77cc3507_prof);

    }

    // line 50
    public function block_body($context, array $blocks = array())
    {
        $__internal_7d6473614d2bbf418eb0ca1c4e1f7a15af54182d9f2f5b6671c0291fbe7d3de0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d6473614d2bbf418eb0ca1c4e1f7a15af54182d9f2f5b6671c0291fbe7d3de0->enter($__internal_7d6473614d2bbf418eb0ca1c4e1f7a15af54182d9f2f5b6671c0291fbe7d3de0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4843cb1c79f3e5b02a5364eb7b445cc3326c846625ae7a48d7763855a5adc211 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4843cb1c79f3e5b02a5364eb7b445cc3326c846625ae7a48d7763855a5adc211->enter($__internal_4843cb1c79f3e5b02a5364eb7b445cc3326c846625ae7a48d7763855a5adc211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4843cb1c79f3e5b02a5364eb7b445cc3326c846625ae7a48d7763855a5adc211->leave($__internal_4843cb1c79f3e5b02a5364eb7b445cc3326c846625ae7a48d7763855a5adc211_prof);

        
        $__internal_7d6473614d2bbf418eb0ca1c4e1f7a15af54182d9f2f5b6671c0291fbe7d3de0->leave($__internal_7d6473614d2bbf418eb0ca1c4e1f7a15af54182d9f2f5b6671c0291fbe7d3de0_prof);

    }

    // line 59
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d955e5dfb13d14576ebc8d4e028d5985ec73a93727bd3c0330c9bcd4bb110777 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d955e5dfb13d14576ebc8d4e028d5985ec73a93727bd3c0330c9bcd4bb110777->enter($__internal_d955e5dfb13d14576ebc8d4e028d5985ec73a93727bd3c0330c9bcd4bb110777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b3ef99846f718558bb68a0fe6e4c90a24ac01d538938cae1eae4b48cc487e7fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3ef99846f718558bb68a0fe6e4c90a24ac01d538938cae1eae4b48cc487e7fc->enter($__internal_b3ef99846f718558bb68a0fe6e4c90a24ac01d538938cae1eae4b48cc487e7fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 60
        echo "            <script src=\"https://code.jquery.com/jquery-3.2.1.min.js\" integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\" crossorigin=\"anonymous\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\" integrity=\"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh\" crossorigin=\"anonymous\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\" integrity=\"sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ\" crossorigin=\"anonymous\"></script>
            <script>
                \$('.dropdown-toggle').dropdown();
            </script>";
        
        $__internal_b3ef99846f718558bb68a0fe6e4c90a24ac01d538938cae1eae4b48cc487e7fc->leave($__internal_b3ef99846f718558bb68a0fe6e4c90a24ac01d538938cae1eae4b48cc487e7fc_prof);

        
        $__internal_d955e5dfb13d14576ebc8d4e028d5985ec73a93727bd3c0330c9bcd4bb110777->leave($__internal_d955e5dfb13d14576ebc8d4e028d5985ec73a93727bd3c0330c9bcd4bb110777_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 60,  169 => 59,  152 => 50,  141 => 12,  137 => 11,  134 => 10,  125 => 9,  107 => 5,  95 => 67,  93 => 59,  86 => 51,  84 => 50,  71 => 38,  48 => 18,  42 => 14,  40 => 9,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html lang=\"en\">

    <head>
        <title>{% block title %}Welcome to the SpaceBar{% endblock %}</title>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css\" integrity=\"sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb\" crossorigin=\"anonymous\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/font-awesome.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/styles.css') }}\">
        {% endblock %}
    </head>

    <body>
        <nav class=\"navbar navbar-expand-lg navbar-dark navbar-bg mb-5\">
            <a style=\"margin-left: 75px;\" class=\"navbar-brand space-brand\" href=\"{{ path('app_homepage') }}\">The Space Bar</a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
          </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
                <ul class=\"navbar-nav mr-auto\">
                     <li class=\"nav-item\">
                       <a style=\"color: #fff;\" class=\"nav-link\" href=\"#\">Local Asteroids</a>
                     </li>
                     <li class=\"nav-item\">
                       <a style=\"color: #fff;\" class=\"nav-link\" href=\"#\">Weather</a>
                     </li>
                   </ul>
                <form class=\"form-inline my-2 my-lg-0\">
                    <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
                    <button class=\"btn btn-info my-2 my-sm-0\" type=\"submit\">Search</button>
                </form>
                <ul class=\"navbar-nav ml-auto\">
                    <li class=\"nav-item dropdown\" style=\"margin-right: 75px;\">
                        <a class=\"nav-link dropdown-toggle\" href=\"http://example.com\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                          <img class=\"nav-profile-img rounded-circle\" src=\"{{ asset('images/astronaut-profile.png') }}\">
                        </a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                            <a class=\"dropdown-item\" href=\"#\">Profile</a>
                            <a class=\"dropdown-item\" href=\"#\">Create Post</a>
                            <a class=\"dropdown-item\" href=\"#\">Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

        {% block body %}{% endblock %}

        <footer class=\"footer\">
            <div class=\"container text-center\">
                <span class=\"text-muted\">Made with <i class=\"fa fa-heart\" style=\"color: red;\"></i> by the guys and gals at <a href=\"https://knpuniversity.com\">KnpUniversity</a></span>
            </div>
        </footer>


        {% block javascripts %}
            <script src=\"https://code.jquery.com/jquery-3.2.1.min.js\" integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\" crossorigin=\"anonymous\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\" integrity=\"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh\" crossorigin=\"anonymous\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\" integrity=\"sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ\" crossorigin=\"anonymous\"></script>
            <script>
                \$('.dropdown-toggle').dropdown();
            </script>
        {% endblock %}
    </body>
</html>
", "base.html.twig", "/home/gespinosa/Sites/Symfony4/doctrine/start/templates/base.html.twig");
    }
}
