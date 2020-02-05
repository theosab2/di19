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

/* Categorie/listCategorie.html.twig */
class __TwigTemplate_b1579c231d0d4fbd666837a6c36df2e6ba88f9247440e67763e1e1dfb73ed178 extends Template
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
        $this->parent = $this->loadTemplate("index.html.twig", "Categorie/listCategorie.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " Liste des categories - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "
    <div class=\"jumbotron\">
        <h1 class=\"display-4\">Liste des categories</h1>
    </div>
    <div class=\"container\">
        <table class=\"table table-striped\">
            <thead>
            <tr>
                <th scope=\"col\">#</th>
                <th scope=\"col\">Titre</th>
                <th scope=\"col\">Description</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categorieList"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 20
            echo "                <tr>
                    <th scope=\"row\"><a href=\"/Categorie/Show/";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 21), "html", null, true);
            echo "\">#";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 21), "html", null, true);
            echo "</a></th>
                    <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "Titre", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
                    <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "Description", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
                    <td>
                        <div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
                            <a class=\"btn btn-success\" href=\"/Categorie/Show/";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 26), "html", null, true);
            echo "\"><i class=\"far fa-eye\"></i></a>
                            <a class=\"btn btn-warning\" href=\"/Categorie/Update/";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 27), "html", null, true);
            echo "\"><i class=\"fas fa-edit\"></i></a>
                            <a class=\"btn btn-danger\" href=\"/Categorie/Delete/";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 28), "html", null, true);
            echo "\"><i class=\"far fa-trash-alt\"></i></a>
                        </div>
                        <a class=\"btn btn-secondary\" href=\"/Categorie/WriteOne/";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 30), "html", null, true);
            echo "\"><i class=\"fas fa-file-download\"></i></a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "
            </tbody>
        </table>
    </div>

";
    }

    public function getTemplateName()
    {
        return "Categorie/listCategorie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 34,  111 => 30,  106 => 28,  102 => 27,  98 => 26,  92 => 23,  88 => 22,  82 => 21,  79 => 20,  75 => 19,  59 => 5,  55 => 4,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"index.html.twig\" %}
{% block title %} Liste des categories - {{ parent() }}{% endblock %}

{% block body %}

    <div class=\"jumbotron\">
        <h1 class=\"display-4\">Liste des categories</h1>
    </div>
    <div class=\"container\">
        <table class=\"table table-striped\">
            <thead>
            <tr>
                <th scope=\"col\">#</th>
                <th scope=\"col\">Titre</th>
                <th scope=\"col\">Description</th>
            </tr>
            </thead>
            <tbody>
            {% for categorie in categorieList %}
                <tr>
                    <th scope=\"row\"><a href=\"/Categorie/Show/{{ categorie.id }}\">#{{ categorie.id }}</a></th>
                    <td>{{ categorie.Titre }}</td>
                    <td>{{ categorie.Description }}</td>
                    <td>
                        <div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
                            <a class=\"btn btn-success\" href=\"/Categorie/Show/{{ categorie.id }}\"><i class=\"far fa-eye\"></i></a>
                            <a class=\"btn btn-warning\" href=\"/Categorie/Update/{{ categorie.id }}\"><i class=\"fas fa-edit\"></i></a>
                            <a class=\"btn btn-danger\" href=\"/Categorie/Delete/{{ categorie.id }}\"><i class=\"far fa-trash-alt\"></i></a>
                        </div>
                        <a class=\"btn btn-secondary\" href=\"/Categorie/WriteOne/{{ categorie.id }}\"><i class=\"fas fa-file-download\"></i></a>
                    </td>
                </tr>
            {% endfor %}

            </tbody>
        </table>
    </div>

{% endblock %}", "Categorie/listCategorie.html.twig", "C:\\dev\\www\\tp\\templates\\Categorie\\listCategorie.html.twig");
    }
}
