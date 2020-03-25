<?php

/* article/show.html.twig */
class __TwigTemplate_8608ce7a95c4c0585632e7093a991f94b792cece0bea3498d48eeecbc49ddc53 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Read:";
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
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
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_toggle_heart", array("slug" => ($context["slug"] ?? null))), "html", null, true);
        echo "\" class=\"fa fa-heart-o like-article js-like-article\"></a>
                            </span>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <div class=\"article-text\">";
        // line 29
        echo ($context["articleContent"] ?? null);
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
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["comments"] ?? null)), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(($context["comments"] ?? null));
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
    }

    // line 79
    public function block_javascripts($context, array $blocks = array())
    {
        // line 80
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/article_show.js"), "html", null, true);
        echo "\"></script>";
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
        return array (  154 => 82,  149 => 80,  146 => 79,  136 => 69,  125 => 63,  118 => 59,  114 => 57,  110 => 56,  98 => 45,  90 => 40,  76 => 29,  66 => 21,  59 => 17,  54 => 15,  49 => 13,  40 => 6,  37 => 5,  30 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "article/show.html.twig", "/home/gespinosa/Sites/Symfony4/doctrine/start/templates/article/show.html.twig");
    }
}
