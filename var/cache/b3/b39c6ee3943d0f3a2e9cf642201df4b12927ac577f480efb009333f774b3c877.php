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

/* Categorie/update.html.twig */
class __TwigTemplate_3772ce1ea742990c513b2563c504279e5c6f24f016849cecb5cc942b2b39f9b9 extends Template
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
        $this->parent = $this->loadTemplate("index.html.twig", "Categorie/update.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Mise à jour d'une categorie ";
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    <div class=\"container-fluid mt-2\">
        <h2 class=\"display-3\">Mise à jour d'une categorie</h2>
        <hr class=\"my-4\">
        <div class=\"row\">

            <form name=\"updateCategorie\" method=\"post\" class=\"col-lg-8\" enctype=\"multipart/form-data\">

                <div class=\"form-group row\">
                    <label for=\"Nom\" class=\"col-sm-2 col-form-label\">Nom de categorie</label>
                    <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"Nom\" class=\"form-control form-control-lg\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["categorie"] ?? null), "Nom", [], "any", false, false, false, 15), "html", null, true);
        echo "\" >
                    </div>
                </div>

                <div class=\"form-group row\">
                    <label for=\"Description\" class=\"col-sm-2 col-form-label\">Description</label>
                    <div class=\"col-sm-10\">
                        <textarea name=\"Description\" class=\"form-control\" rows=\"7\">";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["categorie"] ?? null), "Description", [], "any", false, false, false, 22), "html", null, true);
        echo "</textarea>
                    </div>
                </div>

                <input type=\"submit\" value=\"Valider\" class=\"btn btn-primary my-1\">
            </form>
        </div>

    </div>

";
    }

    public function getTemplateName()
    {
        return "Categorie/update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 22,  71 => 15,  59 => 5,  55 => 4,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"index.html.twig\" %}
{% block title %}{{ parent() }} - Mise à jour d'une categorie {% endblock %}

{% block body %}
    <div class=\"container-fluid mt-2\">
        <h2 class=\"display-3\">Mise à jour d'une categorie</h2>
        <hr class=\"my-4\">
        <div class=\"row\">

            <form name=\"updateCategorie\" method=\"post\" class=\"col-lg-8\" enctype=\"multipart/form-data\">

                <div class=\"form-group row\">
                    <label for=\"Nom\" class=\"col-sm-2 col-form-label\">Nom de categorie</label>
                    <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"Nom\" class=\"form-control form-control-lg\" value=\"{{ categorie.Nom }}\" >
                    </div>
                </div>

                <div class=\"form-group row\">
                    <label for=\"Description\" class=\"col-sm-2 col-form-label\">Description</label>
                    <div class=\"col-sm-10\">
                        <textarea name=\"Description\" class=\"form-control\" rows=\"7\">{{ categorie.Description }}</textarea>
                    </div>
                </div>

                <input type=\"submit\" value=\"Valider\" class=\"btn btn-primary my-1\">
            </form>
        </div>

    </div>

{% endblock %}", "Categorie/update.html.twig", "C:\\dev\\www\\tp\\templates\\Categorie\\update.html.twig");
    }
}
