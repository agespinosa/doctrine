<?php

/* base.html.twig */
class __TwigTemplate_2f2fa860905db02d05dada90acc3f5280748ca5d09a3ae16043817b77eed2f11 extends Twig_Template
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
        $__internal_b23e8a2d76c42de143b068680b3d9c77bb41c14d64477bbedbb923f43b586767 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b23e8a2d76c42de143b068680b3d9c77bb41c14d64477bbedbb923f43b586767->enter($__internal_b23e8a2d76c42de143b068680b3d9c77bb41c14d64477bbedbb923f43b586767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_fa0933f5b0ca02c0e874f22310edce85ecd42ced1fcdf5488b8b380ad907b8d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa0933f5b0ca02c0e874f22310edce85ecd42ced1fcdf5488b8b380ad907b8d2->enter($__internal_fa0933f5b0ca02c0e874f22310edce85ecd42ced1fcdf5488b8b380ad907b8d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_b23e8a2d76c42de143b068680b3d9c77bb41c14d64477bbedbb923f43b586767->leave($__internal_b23e8a2d76c42de143b068680b3d9c77bb41c14d64477bbedbb923f43b586767_prof);

        
        $__internal_fa0933f5b0ca02c0e874f22310edce85ecd42ced1fcdf5488b8b380ad907b8d2->leave($__internal_fa0933f5b0ca02c0e874f22310edce85ecd42ced1fcdf5488b8b380ad907b8d2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c37679697d056b9ce2fdc0de3d5411ad24bb952440c5b641478f8ad6fbd96a13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c37679697d056b9ce2fdc0de3d5411ad24bb952440c5b641478f8ad6fbd96a13->enter($__internal_c37679697d056b9ce2fdc0de3d5411ad24bb952440c5b641478f8ad6fbd96a13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_faea94549e0eac6cebd1efe8304775834ad917a0ebfb253cae6008c390f99a1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faea94549e0eac6cebd1efe8304775834ad917a0ebfb253cae6008c390f99a1a->enter($__internal_faea94549e0eac6cebd1efe8304775834ad917a0ebfb253cae6008c390f99a1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome to the SpaceBar";
        
        $__internal_faea94549e0eac6cebd1efe8304775834ad917a0ebfb253cae6008c390f99a1a->leave($__internal_faea94549e0eac6cebd1efe8304775834ad917a0ebfb253cae6008c390f99a1a_prof);

        
        $__internal_c37679697d056b9ce2fdc0de3d5411ad24bb952440c5b641478f8ad6fbd96a13->leave($__internal_c37679697d056b9ce2fdc0de3d5411ad24bb952440c5b641478f8ad6fbd96a13_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4b58a2b310b06b8f1a9ffa1eb25c09cb025f89ec9025411aa284245765030e47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b58a2b310b06b8f1a9ffa1eb25c09cb025f89ec9025411aa284245765030e47->enter($__internal_4b58a2b310b06b8f1a9ffa1eb25c09cb025f89ec9025411aa284245765030e47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a00d7b04d5fb03cdbb994183cdcf75726f76f9363d63694a34fd25200146e938 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a00d7b04d5fb03cdbb994183cdcf75726f76f9363d63694a34fd25200146e938->enter($__internal_a00d7b04d5fb03cdbb994183cdcf75726f76f9363d63694a34fd25200146e938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_a00d7b04d5fb03cdbb994183cdcf75726f76f9363d63694a34fd25200146e938->leave($__internal_a00d7b04d5fb03cdbb994183cdcf75726f76f9363d63694a34fd25200146e938_prof);

        
        $__internal_4b58a2b310b06b8f1a9ffa1eb25c09cb025f89ec9025411aa284245765030e47->leave($__internal_4b58a2b310b06b8f1a9ffa1eb25c09cb025f89ec9025411aa284245765030e47_prof);

    }

    // line 50
    public function block_body($context, array $blocks = array())
    {
        $__internal_d3e386779232dcd6ce38255edd0cf84c379df292cbf3c2581d568d4778dbbaba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3e386779232dcd6ce38255edd0cf84c379df292cbf3c2581d568d4778dbbaba->enter($__internal_d3e386779232dcd6ce38255edd0cf84c379df292cbf3c2581d568d4778dbbaba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c7fded993102e9dd06bd029e65ce0c7c2a6f5e1d4f701e7c4e250605a1e7ea0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7fded993102e9dd06bd029e65ce0c7c2a6f5e1d4f701e7c4e250605a1e7ea0c->enter($__internal_c7fded993102e9dd06bd029e65ce0c7c2a6f5e1d4f701e7c4e250605a1e7ea0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c7fded993102e9dd06bd029e65ce0c7c2a6f5e1d4f701e7c4e250605a1e7ea0c->leave($__internal_c7fded993102e9dd06bd029e65ce0c7c2a6f5e1d4f701e7c4e250605a1e7ea0c_prof);

        
        $__internal_d3e386779232dcd6ce38255edd0cf84c379df292cbf3c2581d568d4778dbbaba->leave($__internal_d3e386779232dcd6ce38255edd0cf84c379df292cbf3c2581d568d4778dbbaba_prof);

    }

    // line 59
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e43bf08abc2b7d52799c018b821c1f842312eeafc82b5d028b9b12fe233680cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e43bf08abc2b7d52799c018b821c1f842312eeafc82b5d028b9b12fe233680cd->enter($__internal_e43bf08abc2b7d52799c018b821c1f842312eeafc82b5d028b9b12fe233680cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_400fafdccfd4049afd09b905f106d07f408bb4d078631e49685e03d6949c77cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_400fafdccfd4049afd09b905f106d07f408bb4d078631e49685e03d6949c77cb->enter($__internal_400fafdccfd4049afd09b905f106d07f408bb4d078631e49685e03d6949c77cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 60
        echo "            <script src=\"https://code.jquery.com/jquery-3.2.1.min.js\" integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\" crossorigin=\"anonymous\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\" integrity=\"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh\" crossorigin=\"anonymous\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\" integrity=\"sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ\" crossorigin=\"anonymous\"></script>
            <script>
                \$('.dropdown-toggle').dropdown();
            </script>
        ";
        
        $__internal_400fafdccfd4049afd09b905f106d07f408bb4d078631e49685e03d6949c77cb->leave($__internal_400fafdccfd4049afd09b905f106d07f408bb4d078631e49685e03d6949c77cb_prof);

        
        $__internal_e43bf08abc2b7d52799c018b821c1f842312eeafc82b5d028b9b12fe233680cd->leave($__internal_e43bf08abc2b7d52799c018b821c1f842312eeafc82b5d028b9b12fe233680cd_prof);

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
