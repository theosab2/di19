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

/* User/ListUtilisateur.html.twig */
class __TwigTemplate_6751ec090c32390bce5cf854818519a5cf6420f568acca9bfb5588368b430c7c extends Template
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
        $this->parent = $this->loadTemplate("index.html.twig", "User/ListUtilisateur.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Liste utilisateur";
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
        <th scope=\"col\">Id</th>
        <th scope=\"col\">Nom</th>
        <th scope=\"col\">Prenom</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["utilisateurlist"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["Utilisateur"]) {
            // line 16
            echo "
        <tr>
            <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Utilisateur"], "USER_ID", [], "any", false, false, false, 18), "html", null, true);
            echo "</td>
            <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Utilisateur"], "USER_NOM", [], "any", false, false, false, 19), "html", null, true);
            echo "</td>
            <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Utilisateur"], "USER_PRENOM", [], "any", false, false, false, 20), "html", null, true);
            echo "</td>
            <td>
                <div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
                    <a class=\"btn btn-danger\" href=\"/User/delUtilisateur/";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Utilisateur"], "USER_ID", [], "any", false, false, false, 23), "html", null, true);
            echo "\"><i class=\"fas fa-times-circle\"></i></a>
                </div>
            </td>
        </tr>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Utilisateur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "    </tbody>

";
    }

    public function getTemplateName()
    {
        return "User/ListUtilisateur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 29,  92 => 23,  86 => 20,  82 => 19,  78 => 18,  74 => 16,  70 => 15,  58 => 5,  54 => 4,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"index.html.twig\" %}
{% block title %}Liste utilisateur{% endblock %}

{% block body %}

    <table class=\"table table-striped\">
    <thead>
    <tr>
        <th scope=\"col\">Id</th>
        <th scope=\"col\">Nom</th>
        <th scope=\"col\">Prenom</th>
    </tr>
    </thead>
    <tbody>
    {% for Utilisateur in utilisateurlist %}

        <tr>
            <td>{{ Utilisateur.USER_ID }}</td>
            <td>{{ Utilisateur.USER_NOM }}</td>
            <td>{{ Utilisateur.USER_PRENOM }}</td>
            <td>
                <div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
                    <a class=\"btn btn-danger\" href=\"/User/delUtilisateur/{{ Utilisateur.USER_ID }}\"><i class=\"fas fa-times-circle\"></i></a>
                </div>
            </td>
        </tr>

    {% endfor %}
    </tbody>

{% endblock %}", "User/ListUtilisateur.html.twig", "C:\\dev\\www\\tp\\templates\\User\\ListUtilisateur.html.twig");
    }
}
