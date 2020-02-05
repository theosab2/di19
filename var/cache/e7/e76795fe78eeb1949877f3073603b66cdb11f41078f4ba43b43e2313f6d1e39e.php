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

/* Article/add.html.twig */
class __TwigTemplate_190680a068eaea18fc5b8efb8bcdcd1d1e8a4d63901fef684c70ef26bd1011f6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $this->parent = $this->loadTemplate("index.html.twig", "Article/add.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Ajout d'un article ";
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "
    <div class=\"container-fluid mt-2\">

        <h2 class=\"display-3\">Ajout d'un article</h2>
        <hr class=\"my-4\">
        <form name=\"addArticle\" method=\"post\" enctype=\"multipart/form-data\">
            <div class=\"form-group row\">
                <label for=\"Titre\" class=\"col-sm-2 col-form-label\">Titre de l'article</label>
                <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"Titre\" class=\"form-control form-control-lg\">
                </div>
            </div>

            <div class=\"form-group row\">
                <label for=\"Description\" class=\"col-sm-2 col-form-label\">Description</label>
                <div class=\"col-sm-10\">
                    <textarea name=\"Description\" class=\"form-control\" rows=\"9\"></textarea>
                </div>
            </div>
            <div class=\"form-group row\">
                <label for=\"DateAjout\" class=\"col-sm-2 col-form-label\">Date</label>
                <div class=\"col-sm-10\">
                    <input type=\"date\" name=\"DateAjout\" class=\"form-control disabled\" value=\"<?php (new \\DateTime())->format('Y-m-d');?>\">
                </div>
            </div>

            <div class=\"form-group row\">
                <label for=\"article_auteur\" class=\"col-sm-2 col-form-label\">Auteur</label>
                <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"Auteur\" class=\"form-control\">
                </div>
            </div>


            <div class=\"form-group row\">
                <label for=\"image\" class=\"col-sm-2 col-form-label\">Image de l'article</label>
                <div class=\"col-sm-10\">
                    <div class=\"custom-file\">
                        <input type=\"file\" class=\"form-control-file custom-file-input\" name=\"image\" id=\"inputFile\">
                        <input type=\"file\" class=\"custom-file-input\" id=\"inputGroupFile01\">
                        <label class=\"custom-file-label\" for=\"inputGroupFile01\"></label>
                    </div>
                </div>
            </div>

            <div class=\"form-group row\">
                <label for=\"Categorie\" class=\"col-sm-2 col-form-label\">Categorie</label>
                <div class=\"col-sm-10\">
                    <select name=\"Categorie\" class=\"form-control\">
                        ";
        // line 54
        $context["Categories"] = [0 => "1", 1 => "2", 2 => "3", 3 => "4", 4 => "5", 5 => "6", 6 => "7", 7 => "8"];
        // line 55
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["Categorie"]) {
            // line 56
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $context["Categorie"], "html", null, true);
            echo "\" ";
            if (0 === twig_compare($context["Categorie"], twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "Categorie", [], "any", false, false, false, 56))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["Categorie"], "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "                    </select>
                </div>
            </div>

            <input type=\"hidden\" name=\"token\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, ($context["token"] ?? null), "html", null, true);
        echo "\">
            <input type=\"submit\" class=\"btn btn-primary my-1\">
        </form>
    </div>

";
    }

    public function getTemplateName()
    {
        return "Article/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 62,  132 => 58,  117 => 56,  112 => 55,  110 => 54,  59 => 5,  55 => 4,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"index.html.twig\" %}
{% block title %}{{ parent() }} - Ajout d'un article {% endblock %}

{% block body %}

    <div class=\"container-fluid mt-2\">

        <h2 class=\"display-3\">Ajout d'un article</h2>
        <hr class=\"my-4\">
        <form name=\"addArticle\" method=\"post\" enctype=\"multipart/form-data\">
            <div class=\"form-group row\">
                <label for=\"Titre\" class=\"col-sm-2 col-form-label\">Titre de l'article</label>
                <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"Titre\" class=\"form-control form-control-lg\">
                </div>
            </div>

            <div class=\"form-group row\">
                <label for=\"Description\" class=\"col-sm-2 col-form-label\">Description</label>
                <div class=\"col-sm-10\">
                    <textarea name=\"Description\" class=\"form-control\" rows=\"9\"></textarea>
                </div>
            </div>
            <div class=\"form-group row\">
                <label for=\"DateAjout\" class=\"col-sm-2 col-form-label\">Date</label>
                <div class=\"col-sm-10\">
                    <input type=\"date\" name=\"DateAjout\" class=\"form-control disabled\" value=\"<?php (new \\DateTime())->format('Y-m-d');?>\">
                </div>
            </div>

            <div class=\"form-group row\">
                <label for=\"article_auteur\" class=\"col-sm-2 col-form-label\">Auteur</label>
                <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"Auteur\" class=\"form-control\">
                </div>
            </div>


            <div class=\"form-group row\">
                <label for=\"image\" class=\"col-sm-2 col-form-label\">Image de l'article</label>
                <div class=\"col-sm-10\">
                    <div class=\"custom-file\">
                        <input type=\"file\" class=\"form-control-file custom-file-input\" name=\"image\" id=\"inputFile\">
                        <input type=\"file\" class=\"custom-file-input\" id=\"inputGroupFile01\">
                        <label class=\"custom-file-label\" for=\"inputGroupFile01\"></label>
                    </div>
                </div>
            </div>

            <div class=\"form-group row\">
                <label for=\"Categorie\" class=\"col-sm-2 col-form-label\">Categorie</label>
                <div class=\"col-sm-10\">
                    <select name=\"Categorie\" class=\"form-control\">
                        {% set Categories = ['1','2','3','4','5','6','7','8'] %}
                        {% for Categorie in Categories %}
                            <option value=\"{{Categorie}}\" {% if Categorie == article.Categorie %}selected{% endif %}>{{ Categorie }}</option>
                        {% endfor %}
                    </select>
                </div>
            </div>

            <input type=\"hidden\" name=\"token\" value=\"{{ token }}\">
            <input type=\"submit\" class=\"btn btn-primary my-1\">
        </form>
    </div>

{% endblock %}", "Article/add.html.twig", "C:\\dev\\www\\di19\\templates\\Article\\add.html.twig");
    }
}
