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

/* User/Utilisateur.html.twig */
class __TwigTemplate_b24cb54c0f4e0cdf9cfaeee866f51b3d86ea21a13080615e6eb33db820315c7e extends Template
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
        $this->parent = $this->loadTemplate("index.html.twig", "User/Utilisateur.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Validation utilisateur";
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
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
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["utilisateurlist"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["Utilisateur"]) {
            // line 18
            echo "
        <tr>
            <!--<th scope=\"row\"><a href=\"/User/ValiderUtilisateur/";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 20), "html", null, true);
            echo "\">#";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 20), "html", null, true);
            echo "</a></th>-->
            <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Utilisateur"], "USER_ID", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>
            <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Utilisateur"], "USER_NOM", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
            <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Utilisateur"], "USER_PRENOM", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
            <td>
                <div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
                    <a class=\"btn btn-success\" href=\"/User/ValUtilisateur/";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Utilisateur"], "USER_ID", [], "any", false, false, false, 26), "html", null, true);
            echo "\"><i class=\"fas fa-check-circle\"></i></a>
                    <a class=\"btn btn-danger\" href=\"/User/delUtilisateur/";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Utilisateur"], "USER_ID", [], "any", false, false, false, 27), "html", null, true);
            echo "\"><i class=\"fas fa-times-circle\"></i></a>
                </div>
            </td>
        </tr>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Utilisateur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "    </tbody>

";
    }

    public function getTemplateName()
    {
        return "User/Utilisateur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 33,  102 => 27,  98 => 26,  92 => 23,  88 => 22,  84 => 21,  78 => 20,  74 => 18,  70 => 17,  58 => 7,  54 => 6,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"index.html.twig\" %}
{% block title %}Validation utilisateur{% endblock %}



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
            <!--<th scope=\"row\"><a href=\"/User/ValiderUtilisateur/{{ user.id }}\">#{{ user.id }}</a></th>-->
            <td>{{ Utilisateur.USER_ID }}</td>
            <td>{{ Utilisateur.USER_NOM }}</td>
            <td>{{ Utilisateur.USER_PRENOM }}</td>
            <td>
                <div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
                    <a class=\"btn btn-success\" href=\"/User/ValUtilisateur/{{ Utilisateur.USER_ID }}\"><i class=\"fas fa-check-circle\"></i></a>
                    <a class=\"btn btn-danger\" href=\"/User/delUtilisateur/{{ Utilisateur.USER_ID }}\"><i class=\"fas fa-times-circle\"></i></a>
                </div>
            </td>
        </tr>

    {% endfor %}
    </tbody>

{% endblock %}", "User/Utilisateur.html.twig", "C:\\Git\\PullUp\\templates\\User\\Utilisateur.html.twig");
    }
}
