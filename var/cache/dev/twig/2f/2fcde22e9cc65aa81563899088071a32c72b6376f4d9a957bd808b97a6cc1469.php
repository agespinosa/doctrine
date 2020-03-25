<?php

/* article/show.html.twig */
class __TwigTemplate_211db4ce78e2e52adaf9bbc36ad2d22027e737beb5e4abdeb3e224a754030c37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "article/show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d013124b615286d7b85e5a45e67bd810328b7f3c79707ff010e30f261009c0a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d013124b615286d7b85e5a45e67bd810328b7f3c79707ff010e30f261009c0a5->enter($__internal_d013124b615286d7b85e5a45e67bd810328b7f3c79707ff010e30f261009c0a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/show.html.twig"));

        $__internal_bdf30a20c4dab01ecdb50c1de9d0ca8f929eafff1fb8476952082dacf41339b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdf30a20c4dab01ecdb50c1de9d0ca8f929eafff1fb8476952082dacf41339b9->enter($__internal_bdf30a20c4dab01ecdb50c1de9d0ca8f929eafff1fb8476952082dacf41339b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d013124b615286d7b85e5a45e67bd810328b7f3c79707ff010e30f261009c0a5->leave($__internal_d013124b615286d7b85e5a45e67bd810328b7f3c79707ff010e30f261009c0a5_prof);

        
        $__internal_bdf30a20c4dab01ecdb50c1de9d0ca8f929eafff1fb8476952082dacf41339b9->leave($__internal_bdf30a20c4dab01ecdb50c1de9d0ca8f929eafff1fb8476952082dacf41339b9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_595fc84ae90f7035da7005ef199860955e8c8e639785d42e958c5d6f618fc555 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_595fc84ae90f7035da7005ef199860955e8c8e639785d42e958c5d6f618fc555->enter($__internal_595fc84ae90f7035da7005ef199860955e8c8e639785d42e958c5d6f618fc555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_496ef98c9ffac3c987ce465ecad43a046e51606cf63de2623b590f887f2f8431 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_496ef98c9ffac3c987ce465ecad43a046e51606cf63de2623b590f887f2f8431->enter($__internal_496ef98c9ffac3c987ce465ecad43a046e51606cf63de2623b590f887f2f8431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Read:";
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        
        $__internal_496ef98c9ffac3c987ce465ecad43a046e51606cf63de2623b590f887f2f8431->leave($__internal_496ef98c9ffac3c987ce465ecad43a046e51606cf63de2623b590f887f2f8431_prof);

        
        $__internal_595fc84ae90f7035da7005ef199860955e8c8e639785d42e958c5d6f618fc555->leave($__internal_595fc84ae90f7035da7005ef199860955e8c8e639785d42e958c5d6f618fc555_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0bd5101fd48d6744531a08fd0c0a12be95bb451d68bb50c32b75b36885f2abf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bd5101fd48d6744531a08fd0c0a12be95bb451d68bb50c32b75b36885f2abf6->enter($__internal_0bd5101fd48d6744531a08fd0c0a12be95bb451d68bb50c32b75b36885f2abf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_061807f16e8016b61a95c09981ad555aaf3fe8b76a5ffa7bc44a66fd020ff4c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_061807f16e8016b61a95c09981ad555aaf3fe8b76a5ffa7bc44a66fd020ff4c3->enter($__internal_061807f16e8016b61a95c09981ad555aaf3fe8b76a5ffa7bc44a66fd020ff4c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <div class=\"show-article-container p-3 mt-4\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <img class=\"show-article-img\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/asteroid.jpeg"), "html", null, true);
        echo "\">
                        <div class=\"show-article-title-container d-inline-block pl-3 align-middle\">
                            <span class=\"show-article-title \">";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 15, $this->getSourceContext()); })()), "html", null, true);
        echo "</span>
                            <br>
                            <span class=\"align-left article-details\"><img class=\"article-author-img rounded-circle\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/alien-profile.png"), "html", null, true);
        echo "\"> Mike Ferengi </span>
                            <span class=\"pl-2 article-details\"> 50 hours ago</span>
                            <span class=\"pl-2 article-details\">
                                <span class=\"js-like-article-count\">5</span>
                                <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_toggle_heart", array("slug" => (isset($context["slug"]) || array_key_exists("slug", $context) ? $context["slug"] : (function () { throw new Twig_Error_Runtime('Variable "slug" does not exist.', 21, $this->getSourceContext()); })()))), "html", null, true);
        echo "\" class=\"fa fa-heart-o like-article js-like-article\"></a>
                            </span>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <div class=\"article-text\">";
        // line 29
        echo (isset($context["articleContent"]) || array_key_exists("articleContent", $context) ? $context["articleContent"] : (function () { throw new Twig_Error_Runtime('Variable "articleContent" does not exist.', 29, $this->getSourceContext()); })());
        echo "
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <p class=\"share-icons mb-5\"><span class=\"pr-1\">Share:</span> <i class=\"pr-1 fa fa-facebook-square\"></i><i class=\"pr-1 fa fa-twitter-square\"></i><i class=\"pr-1 fa fa-reddit-square\"></i><i class=\"pr-1 fa fa-share-alt-square\"></i></p>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <h3><i class=\"pr-3 fa fa-comment\"></i>";
        // line 40
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new Twig_Error_Runtime('Variable "comments" does not exist.', 40, $this->getSourceContext()); })())), "html", null, true);
        echo " Comments</h3>
                        <hr>

                        <div class=\"row mb-5\">
                            <div class=\"col-sm-12\">
                                <img class=\"comment-img rounded-circle\" src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/astronaut-profile.png"), "html", null, true);
        echo "\">
                                <div class=\"comment-container d-inline-block pl-3 align-top\">
                                    <span class=\"commenter-name\">Amy Oort</span>
                                    <div class=\"form-group\">
                                        <textarea class=\"form-control comment-form\" id=\"articleText\" rows=\"1\"></textarea>
                                    </div>
                                    <button type=\"submit\" class=\"btn btn-info\">Comment</button>
                                </div>
                            </div>
                        </div>";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new Twig_Error_Runtime('Variable "comments" does not exist.', 56, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 57
            echo "                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                <img class=\"comment-img rounded-circle\" src=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/alien-profile.png"), "html", null, true);
            echo "\">
                                <div class=\"comment-container d-inline-block pl-3 align-top\">
                                    <span class=\"commenter-name\">Mike Ferengi</span>
                                    <br>
                                    <span class=\"comment\">";
            // line 63
            echo twig_escape_filter($this->env, $context["comment"], "html", null, true);
            echo "</span>
                                    <p><a href=\"#\">Reply</a></p>
                                </div>
                            </div>
                        </div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>";
        
        $__internal_061807f16e8016b61a95c09981ad555aaf3fe8b76a5ffa7bc44a66fd020ff4c3->leave($__internal_061807f16e8016b61a95c09981ad555aaf3fe8b76a5ffa7bc44a66fd020ff4c3_prof);

        
        $__internal_0bd5101fd48d6744531a08fd0c0a12be95bb451d68bb50c32b75b36885f2abf6->leave($__internal_0bd5101fd48d6744531a08fd0c0a12be95bb451d68bb50c32b75b36885f2abf6_prof);

    }

    // line 79
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_48f5b31389b428389d22e01bf825fddfe742cb30d826e198a8c02b286d8ed0b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48f5b31389b428389d22e01bf825fddfe742cb30d826e198a8c02b286d8ed0b7->enter($__internal_48f5b31389b428389d22e01bf825fddfe742cb30d826e198a8c02b286d8ed0b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c3b3521ca7296f989facf1221acaf1337e35fac421926138fe4fb493aeff6076 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3b3521ca7296f989facf1221acaf1337e35fac421926138fe4fb493aeff6076->enter($__internal_c3b3521ca7296f989facf1221acaf1337e35fac421926138fe4fb493aeff6076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 80
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/article_show.js"), "html", null, true);
        echo "\"></script>";
        
        $__internal_c3b3521ca7296f989facf1221acaf1337e35fac421926138fe4fb493aeff6076->leave($__internal_c3b3521ca7296f989facf1221acaf1337e35fac421926138fe4fb493aeff6076_prof);

        
        $__internal_48f5b31389b428389d22e01bf825fddfe742cb30d826e198a8c02b286d8ed0b7->leave($__internal_48f5b31389b428389d22e01bf825fddfe742cb30d826e198a8c02b286d8ed0b7_prof);

    }

    public function getTemplateName()
    {
        return "article/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 82,  191 => 80,  182 => 79,  166 => 69,  155 => 63,  148 => 59,  144 => 57,  140 => 56,  128 => 45,  120 => 40,  106 => 29,  96 => 21,  89 => 17,  84 => 15,  79 => 13,  70 => 6,  61 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Read: {{ title }}{% endblock %}

{% block body %}

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <div class=\"show-article-container p-3 mt-4\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <img class=\"show-article-img\" src=\"{{ asset('images/asteroid.jpeg') }}\">
                        <div class=\"show-article-title-container d-inline-block pl-3 align-middle\">
                            <span class=\"show-article-title \">{{ title }}</span>
                            <br>
                            <span class=\"align-left article-details\"><img class=\"article-author-img rounded-circle\" src=\"{{ asset('images/alien-profile.png') }}\"> Mike Ferengi </span>
                            <span class=\"pl-2 article-details\"> 50 hours ago</span>
                            <span class=\"pl-2 article-details\">
                                <span class=\"js-like-article-count\">5</span>
                                <a href=\"{{ path('article_toggle_heart', {slug: slug}) }}\" class=\"fa fa-heart-o like-article js-like-article\"></a>
                            </span>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <div class=\"article-text\">
                           {{ articleContent | raw }}
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <p class=\"share-icons mb-5\"><span class=\"pr-1\">Share:</span> <i class=\"pr-1 fa fa-facebook-square\"></i><i class=\"pr-1 fa fa-twitter-square\"></i><i class=\"pr-1 fa fa-reddit-square\"></i><i class=\"pr-1 fa fa-share-alt-square\"></i></p>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <h3><i class=\"pr-3 fa fa-comment\"></i>{{ comments|length }} Comments</h3>
                        <hr>

                        <div class=\"row mb-5\">
                            <div class=\"col-sm-12\">
                                <img class=\"comment-img rounded-circle\" src=\"{{ asset('images/astronaut-profile.png') }}\">
                                <div class=\"comment-container d-inline-block pl-3 align-top\">
                                    <span class=\"commenter-name\">Amy Oort</span>
                                    <div class=\"form-group\">
                                        <textarea class=\"form-control comment-form\" id=\"articleText\" rows=\"1\"></textarea>
                                    </div>
                                    <button type=\"submit\" class=\"btn btn-info\">Comment</button>
                                </div>
                            </div>
                        </div>

                        {% for comment in comments %}
                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                <img class=\"comment-img rounded-circle\" src=\"{{ asset('images/alien-profile.png') }}\">
                                <div class=\"comment-container d-inline-block pl-3 align-top\">
                                    <span class=\"commenter-name\">Mike Ferengi</span>
                                    <br>
                                    <span class=\"comment\"> {{ comment }}</span>
                                    <p><a href=\"#\">Reply</a></p>
                                </div>
                            </div>
                        </div>
                        {% endfor %}

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{% endblock %}

{% block javascripts %}
    {{ parent() }}

    <script src=\"{{ asset('js/article_show.js') }}\"></script>
{% endblock %}", "article/show.html.twig", "/home/gespinosa/Sites/Symfony4/doctrine/start/templates/article/show.html.twig");
    }
}
