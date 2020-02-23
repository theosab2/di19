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
class __TwigTemplate_1300f0393f384800c37069dd7ac0b21c45b019a4b366cf885da54d2413c3d38f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "
";
        // line 2
        $this->displayBlock('title', $context, $blocks);
        // line 3
        echo "
";
        // line 4
        $this->displayBlock('body', $context, $blocks);
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Validation d'article";
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
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
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articleList"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 18
            echo "
        <tr>
            <th scope=\"row\"><a href=\"/Article/Show/";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 20), "html", null, true);
            echo "\">#";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 20), "html", null, true);
            echo "</a></th>
            <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "Titre", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>
            <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "Auteur", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
            <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "DateAjout", [], "any", false, false, false, 23), "d/m/Y"), "html", null, true);
            echo "</td>
            <td>
                <div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
                    <a class=\"btn btn-primary\" href=\"/Article/Show/";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 26), "html", null, true);
            echo "\"><i class=\"far fa-eye\"></i></a>
                    <a class=\"btn btn-success\" href=\"/Article/Val/";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 27), "html", null, true);
            echo "\"><i class=\"fas fa-check-circle\"></i></a>
                    <a class=\"btn btn-danger\" href=\"/Article/Ref/";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 28), "html", null, true);
            echo "\"><i class=\"fas fa-times-circle\"></i></a>
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

    public function getDebugInfo()
    {
        return array (  124 => 34,  112 => 28,  108 => 27,  104 => 26,  98 => 23,  94 => 22,  90 => 21,  84 => 20,  80 => 18,  76 => 17,  62 => 5,  58 => 4,  51 => 2,  47 => 4,  44 => 3,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
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
                    <a class=\"btn btn-primary\" href=\"/Article/Show/{{ article.id }}\"><i class=\"far fa-eye\"></i></a>
                    <a class=\"btn btn-success\" href=\"/Article/Val/{{ article.id }}\"><i class=\"fas fa-check-circle\"></i></a>
                    <a class=\"btn btn-danger\" href=\"/Article/Ref/{{ article.id }}\"><i class=\"fas fa-times-circle\"></i></a>
                </div>
            </td>
        </tr>

    {% endfor %}
    </tbody>

    {% endblock %}", "Article/Validation.html.twig", "C:\\Git\\PullUp\\templates\\Article\\Validation.html.twig");
    }
}
