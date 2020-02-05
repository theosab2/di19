<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* Article/show.html.twig */
class __TwigTemplate_23d7c0aff02ac71769f9043034358bc857002739232026fd9f4c4ed51cb688e0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'css' => [$this, 'block_css'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("index.html.twig", "Article/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Article n°";
    }

    // line 4
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    <link rel=\"stylesheet\" href=\"/css/styles.css\">
";
    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "    <div class=\"container-fluid mt-2\">

        <h2 class=\"display-3\">Article n°";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "Id", [], "any", false, false, false, 11), "html", null, true);
        echo "</h2>
        <hr class=\"my-4\">
        <div class=\"row\">
            <div class=\"card col-lg-4 ml\" style=\"width: 15rem;\">
                ";
        // line 15
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "ImageFileName", [], "any", false, false, false, 15), "") && call_user_func_array($this->env->getFunction('file_exist')->getCallable(), [((("./uploads/images/" . twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "ImageRepository", [], "any", false, false, false, 15)) . "/") . twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "ImageFileName", [], "any", false, false, false, 15))]))) {
            // line 16
            echo "                    <img class='card-img-top' alt='Article' src='/uploads/images/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "ImageRepository", [], "any", false, false, false, 16), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "ImageFileName", [], "any", false, false, false, 16), "html", null, true);
            echo "'/>
                ";
        } else {
            // line 18
            echo "                    <h6 class=\"display-4\">Pas d'image</h6>
                ";
        }
        // line 20
        echo "

                <div class=\"card-body\">
                    <h5 class=\"card-title\">";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "Titre", [], "any", false, false, false, 23), "html", null, true);
        echo "</h5>
                    <p class=\"card-text\">";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "Description", [], "any", false, false, false, 24), "html", null, true);
        echo "</p>
                    <h5> ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "Auteur", [], "any", false, false, false, 25), "html", null, true);
        echo "  .  ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "DateAjout", [], "any", false, false, false, 25), "html", null, true);
        echo "</h5>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "Article/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 25,  103 => 24,  99 => 23,  94 => 20,  90 => 18,  82 => 16,  80 => 15,  73 => 11,  69 => 9,  65 => 8,  60 => 5,  56 => 4,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"index.html.twig\" %}
{% block title %}{{ parent() }} - Article n°{% endblock %}

{% block css %}
    <link rel=\"stylesheet\" href=\"/css/styles.css\">
{% endblock %}

{% block body %}
    <div class=\"container-fluid mt-2\">

        <h2 class=\"display-3\">Article n°{{ article.Id }}</h2>
        <hr class=\"my-4\">
        <div class=\"row\">
            <div class=\"card col-lg-4 ml\" style=\"width: 15rem;\">
                {% if article.ImageFileName != '' and    file_exist('./uploads/images/'~article.ImageRepository~'/'~article.ImageFileName) %}
                    <img class='card-img-top' alt='Article' src='/uploads/images/{{ article.ImageRepository }}/{{article.ImageFileName}}'/>
                {% else %}
                    <h6 class=\"display-4\">Pas d'image</h6>
                {% endif %}


                <div class=\"card-body\">
                    <h5 class=\"card-title\">{{ article.Titre }}</h5>
                    <p class=\"card-text\">{{ article.Description }}</p>
                    <h5> {{ article.Auteur }}  .  {{ article.DateAjout }}</h5>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "Article/show.html.twig", "C:\\dev\\www\\tp\\templates\\Article\\show.html.twig");
    }
}
