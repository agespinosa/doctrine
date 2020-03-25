<?php

/* base.html.twig */
class __TwigTemplate_d64d2e00ec33562b608258168f5d9e0fd120e1080dc2a739146f6bb4922e67da extends Twig_Template
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
        $__internal_c6bb90a8855c733cdc016d85671c03a40a31880a6b7cf35262839d2567d37dea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6bb90a8855c733cdc016d85671c03a40a31880a6b7cf35262839d2567d37dea->enter($__internal_c6bb90a8855c733cdc016d85671c03a40a31880a6b7cf35262839d2567d37dea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_da0a69cba5c6dd6012666e829968a94cb49b498be1302c5d69319debaf82498e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da0a69cba5c6dd6012666e829968a94cb49b498be1302c5d69319debaf82498e->enter($__internal_da0a69cba5c6dd6012666e829968a94cb49b498be1302c5d69319debaf82498e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">

    <head>
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

        ";
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
        </nav>

        ";
        // line 50
        $this->displayBlock('body', $context, $blocks);
        // line 51
        echo "
        <footer class=\"footer\">
            <div class=\"container text-center\">
                <span class=\"text-muted\">Made with <i class=\"fa fa-heart\" style=\"color: red;\"></i> by the guys and gals at <a href=\"https://knpuniversity.com\">KnpUniversity</a></span>
            </div>
        </footer>


        ";
        // line 59
        $this->displayBlock('javascripts', $context, $blocks);
        // line 67
        echo "    </body>
</html>
";
        
        $__internal_c6bb90a8855c733cdc016d85671c03a40a31880a6b7cf35262839d2567d37dea->leave($__internal_c6bb90a8855c733cdc016d85671c03a40a31880a6b7cf35262839d2567d37dea_prof);

        
        $__internal_da0a69cba5c6dd6012666e829968a94cb49b498be1302c5d69319debaf82498e->leave($__internal_da0a69cba5c6dd6012666e829968a94cb49b498be1302c5d69319debaf82498e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a03e6d34a3b65f3075f37e0b4dbd458f7e1df6c26d1fddade610587979750a92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a03e6d34a3b65f3075f37e0b4dbd458f7e1df6c26d1fddade610587979750a92->enter($__internal_a03e6d34a3b65f3075f37e0b4dbd458f7e1df6c26d1fddade610587979750a92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_558efd503e2e8b4ed0346974cba05e9772e701f2817b42af6f1bcca263616ce2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_558efd503e2e8b4ed0346974cba05e9772e701f2817b42af6f1bcca263616ce2->enter($__internal_558efd503e2e8b4ed0346974cba05e9772e701f2817b42af6f1bcca263616ce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome to the SpaceBar";
        
        $__internal_558efd503e2e8b4ed0346974cba05e9772e701f2817b42af6f1bcca263616ce2->leave($__internal_558efd503e2e8b4ed0346974cba05e9772e701f2817b42af6f1bcca263616ce2_prof);

        
        $__internal_a03e6d34a3b65f3075f37e0b4dbd458f7e1df6c26d1fddade610587979750a92->leave($__internal_a03e6d34a3b65f3075f37e0b4dbd458f7e1df6c26d1fddade610587979750a92_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_62884f6be5052e8988b053d74e9b723c90837d3b3dd6bc979d0a5f0fe207b7d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62884f6be5052e8988b053d74e9b723c90837d3b3dd6bc979d0a5f0fe207b7d3->enter($__internal_62884f6be5052e8988b053d74e9b723c90837d3b3dd6bc979d0a5f0fe207b7d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_2dd0b8067319cccb75358991f1d71f5e19f586e7e2f6c8d364436b3bc2fc313e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dd0b8067319cccb75358991f1d71f5e19f586e7e2f6c8d364436b3bc2fc313e->enter($__internal_2dd0b8067319cccb75358991f1d71f5e19f586e7e2f6c8d364436b3bc2fc313e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css\" integrity=\"sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb\" crossorigin=\"anonymous\">
            <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_2dd0b8067319cccb75358991f1d71f5e19f586e7e2f6c8d364436b3bc2fc313e->leave($__internal_2dd0b8067319cccb75358991f1d71f5e19f586e7e2f6c8d364436b3bc2fc313e_prof);

        
        $__internal_62884f6be5052e8988b053d74e9b723c90837d3b3dd6bc979d0a5f0fe207b7d3->leave($__internal_62884f6be5052e8988b053d74e9b723c90837d3b3dd6bc979d0a5f0fe207b7d3_prof);

    }

    // line 50
    public function block_body($context, array $blocks = array())
    {
        $__internal_5366eabc3f745c44f76af7ac8053ec8cf7a6687a6c4ad67fa145d60ab2cf45e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5366eabc3f745c44f76af7ac8053ec8cf7a6687a6c4ad67fa145d60ab2cf45e8->enter($__internal_5366eabc3f745c44f76af7ac8053ec8cf7a6687a6c4ad67fa145d60ab2cf45e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5dcd48d3368b90cc339d29363ce7ebd8a66b719ae985160b66d89762fa52b870 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dcd48d3368b90cc339d29363ce7ebd8a66b719ae985160b66d89762fa52b870->enter($__internal_5dcd48d3368b90cc339d29363ce7ebd8a66b719ae985160b66d89762fa52b870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5dcd48d3368b90cc339d29363ce7ebd8a66b719ae985160b66d89762fa52b870->leave($__internal_5dcd48d3368b90cc339d29363ce7ebd8a66b719ae985160b66d89762fa52b870_prof);

        
        $__internal_5366eabc3f745c44f76af7ac8053ec8cf7a6687a6c4ad67fa145d60ab2cf45e8->leave($__internal_5366eabc3f745c44f76af7ac8053ec8cf7a6687a6c4ad67fa145d60ab2cf45e8_prof);

    }

    // line 59
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cb5c68ada5a14273d173e36a3e371c0e99d5bcb16a79eb54cba462c1815c19b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb5c68ada5a14273d173e36a3e371c0e99d5bcb16a79eb54cba462c1815c19b5->enter($__internal_cb5c68ada5a14273d173e36a3e371c0e99d5bcb16a79eb54cba462c1815c19b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0737a100fa2c5d8f113756e3037194bbe6ef135727fada99a84384c739439151 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0737a100fa2c5d8f113756e3037194bbe6ef135727fada99a84384c739439151->enter($__internal_0737a100fa2c5d8f113756e3037194bbe6ef135727fada99a84384c739439151_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 60
        echo "            <script src=\"https://code.jquery.com/jquery-3.2.1.min.js\" integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\" crossorigin=\"anonymous\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\" integrity=\"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh\" crossorigin=\"anonymous\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\" integrity=\"sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ\" crossorigin=\"anonymous\"></script>
            <script>
                \$('.dropdown-toggle').dropdown();
            </script>
        ";
        
        $__internal_0737a100fa2c5d8f113756e3037194bbe6ef135727fada99a84384c739439151->leave($__internal_0737a100fa2c5d8f113756e3037194bbe6ef135727fada99a84384c739439151_prof);

        
        $__internal_cb5c68ada5a14273d173e36a3e371c0e99d5bcb16a79eb54cba462c1815c19b5->leave($__internal_cb5c68ada5a14273d173e36a3e371c0e99d5bcb16a79eb54cba462c1815c19b5_prof);

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
        return array (  186 => 60,  177 => 59,  160 => 50,  148 => 12,  144 => 11,  141 => 10,  132 => 9,  114 => 5,  102 => 67,  100 => 59,  90 => 51,  88 => 50,  73 => 38,  50 => 18,  44 => 14,  42 => 9,  35 => 5,  29 => 1,);
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
", "base.html.twig", "/var/www/html/doctrine/start/templates/base.html.twig");
    }
}
