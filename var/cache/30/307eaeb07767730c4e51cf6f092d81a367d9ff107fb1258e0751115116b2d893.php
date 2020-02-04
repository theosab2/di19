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

/* Article/Validation.html.twig */
class __TwigTemplate_e99555185c683be66ac8c6fa976fb197d45add16ff84598acd9423a5f3111bba extends Template
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
        $this->parent = $this->loadTemplate("index.html.twig", "Article/Validation.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Validation d'article";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
    <table class=\"table table-striped\">
    <thead>
    <tr>
        <th scope=\"col\">#</th>
        <th scope=\"col\">Titre</th>
        <th scope=\"col\">Auteur</th>
        <th scope=\"col\">Date</th>
        <th scope=\"col\">Actions</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articleList"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 19
            echo "
        <tr>
            <th scope=\"row\"><a href=\"/Article/Show/";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 21), "html", null, true);
            echo "\">#";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 21), "html", null, true);
            echo "</a></th>
            <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "Titre", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
            <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "Auteur", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
            <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "DateAjout", [], "any", false, false, false, 24), "d/m/Y"), "html", null, true);
            echo "</td>
            <td>
                <div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
                    <a class=\"btn btn-success\" href=\"/Article/Show/";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 27), "html", null, true);
            echo "\"><i class=\"far fa-eye\"></i></a>
                    <a class=\"btn btn-success\" href=\"/Article/Val/";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 28), "html", null, true);
            echo "\"><i class=\"fas fa-check-circle\"></i></a>
                </div>
            </td>
        </tr>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "    </tbody>

";
    }

    public function getTemplateName()
    {
        return "Article/Validation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 34,  104 => 28,  100 => 27,  94 => 24,  90 => 23,  86 => 22,  80 => 21,  76 => 19,  72 => 18,  58 => 6,  54 => 5,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"index.html.twig\" %}
{% block title %}Validation d'article{% endblock %}


{% block body %}

    <table class=\"table table-striped\">
    <thead>
    <tr>
        <th scope=\"col\">#</th>
        <th scope=\"col\">Titre</th>
        <th scope=\"col\">Auteur</th>
        <th scope=\"col\">Date</th>
        <th scope=\"col\">Actions</th>
    </tr>
    </thead>
    <tbody>
    {% for article in articleList %}

        <tr>
            <th scope=\"row\"><a href=\"/Article/Show/{{ article.id }}\">#{{ article.id }}</a></th>
            <td>{{ article.Titre }}</td>
            <td>{{ article.Auteur }}</td>
            <td>{{ article.DateAjout | date(\"d/m/Y\") }}</td>
            <td>
                <div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
                    <a class=\"btn btn-success\" href=\"/Article/Show/{{ article.id }}\"><i class=\"far fa-eye\"></i></a>
                    <a class=\"btn btn-success\" href=\"/Article/Val/{{ article.id }}\"><i class=\"fas fa-check-circle\"></i></a>
                </div>
            </td>
        </tr>

    {% endfor %}
    </tbody>

{% endblock %}", "Article/Validation.html.twig", "C:\\dev\\www\\di19\\templates\\Article\\Validation.html.twig");
    }
}
