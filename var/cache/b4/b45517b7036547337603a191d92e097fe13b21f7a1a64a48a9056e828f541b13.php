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

/* Article/list.html.twig */
class __TwigTemplate_a97093949c817ca209ba59a54664f5b2fb7719c756136befacf42b4aed9877bb extends Template
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
        $this->parent = $this->loadTemplate("index.html.twig", "Article/list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " Liste des articles - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
    <div class=\"jumbotron\">
        <h1 class=\"display-4\">Liste des articles</h1>
    </div>
    <div class=\"container\">
    <table class=\"table table-striped\">
        <thead>
        <tr>
            <th scope=\"col\">#</th>
            <th scope=\"col\">Titre</th>
            <th scope=\"col\">Auteur</th>
            <th scope=\"col\">Date</th>
            <th scope=\"col\">Actions</th>
            <th scope=\"col\">Categorie</th>
        </tr>
        </thead>

        <tbody>
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articleList"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 25
            echo "
            <tr>
                <th scope=\"row\"><a href=\"/Article/Show/";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 27), "html", null, true);
            echo "\">#";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 27), "html", null, true);
            echo "</a></th>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "Titre", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "Auteur", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "DateAjout", [], "any", false, false, false, 30), "d/m/Y"), "html", null, true);
            echo "</td>
                <td>
                    <div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
                        <a class=\"btn btn-success\" href=\"/Article/Show/";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 33), "html", null, true);
            echo "\"><i class=\"far fa-eye\"></i></a>
                        ";
            // line 34
            if (twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "login", [], "any", true, true, false, 34)) {
                // line 35
                echo "                        <a class=\"btn btn-warning\" href=\"/Article/Update/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 35), "html", null, true);
                echo "\"><i class=\"fas fa-edit\"></i></a>

                            ";
                // line 37
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "login", [], "any", false, false, false, 37), "roles", [], "any", false, false, false, 37));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    // line 38
                    echo "
                            ";
                    // line 39
                    if (0 === twig_compare($context["role"], "administrateur")) {
                        // line 40
                        echo "
                                <a class=\"btn btn-danger\" href=\"/Article/Delete/";
                        // line 41
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 41), "html", null, true);
                        echo "\"><i class=\"fas fa-times-circle\"></i></a>
                        ";
                    }
                    // line 43
                    echo "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 44
                echo "                        ";
            }
            // line 45
            echo "                    </div>
                    <!--<a class=\"btn btn-secondary\" href=\"/Article/WriteOne/";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 46), "html", null, true);
            echo "\"><i class=\"fas fa-file-download\"></i></a>
                    -->
                </td>
                <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "Categorie", [], "any", false, false, false, 49), "Nom", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>

            </tr>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "
        </tbody>
    </table>
    </div>


";
    }

    public function getTemplateName()
    {
        return "Article/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 54,  154 => 49,  148 => 46,  145 => 45,  142 => 44,  136 => 43,  131 => 41,  128 => 40,  126 => 39,  123 => 38,  119 => 37,  113 => 35,  111 => 34,  107 => 33,  101 => 30,  97 => 29,  93 => 28,  87 => 27,  83 => 25,  79 => 24,  59 => 6,  55 => 5,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"index.html.twig\" %}
{% block title %} Liste des articles - {{ parent() }}{% endblock %}


{% block body %}

    <div class=\"jumbotron\">
        <h1 class=\"display-4\">Liste des articles</h1>
    </div>
    <div class=\"container\">
    <table class=\"table table-striped\">
        <thead>
        <tr>
            <th scope=\"col\">#</th>
            <th scope=\"col\">Titre</th>
            <th scope=\"col\">Auteur</th>
            <th scope=\"col\">Date</th>
            <th scope=\"col\">Actions</th>
            <th scope=\"col\">Categorie</th>
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
                        {% if session.login is defined %}
                        <a class=\"btn btn-warning\" href=\"/Article/Update/{{ article.id }}\"><i class=\"fas fa-edit\"></i></a>

                            {% for role in session.login.roles %}

                            {% if role == 'administrateur' %}

                                <a class=\"btn btn-danger\" href=\"/Article/Delete/{{ article.id }}\"><i class=\"fas fa-times-circle\"></i></a>
                        {% endif %}
                            {% endfor %}
                        {% endif %}
                    </div>
                    <!--<a class=\"btn btn-secondary\" href=\"/Article/WriteOne/{{ article.id }}\"><i class=\"fas fa-file-download\"></i></a>
                    -->
                </td>
                <td>{{ article.Categorie.Nom }}</td>

            </tr>

        {% endfor %}

        </tbody>
    </table>
    </div>


{% endblock %}", "Article/list.html.twig", "C:\\Git\\PullUp\\templates\\Article\\list.html.twig");
    }
}
