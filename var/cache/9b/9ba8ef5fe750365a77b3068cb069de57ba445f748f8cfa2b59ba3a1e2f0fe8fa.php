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
class __TwigTemplate_71e4e79f73e93a70bf134bc9f910c01ed283c1c3c33848d4977370585b2eabb4 extends Template
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
        return "/Article/Accueil.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("/Article/Accueil.html.twig", "User/Utilisateur.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Validation utilisateur";
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "
    <nav>
        <div class=\"menu\">
            <ul>

                <li>
                    <a class=\"dropdown-item\" href=\"/welcome\"><img src=\"/uploads/images/logo.png\"></a>
                </li>
            </ul>
        </div>
    </nav>
    </br></br></br></br>
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
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["utilisateurlist"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["Utilisateur"]) {
            // line 27
            echo "
        <tr>
            <!--<th scope=\"row\"><a href=\"/User/ValiderUtilisateur/";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 29), "html", null, true);
            echo "\">#";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 29), "html", null, true);
            echo "</a></th>-->
            <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Utilisateur"], "USER_ID", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
            <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Utilisateur"], "USER_NOM", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
            <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Utilisateur"], "USER_PRENOM", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
            <td>
                <div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
                    <a class=\"btn btn-success\" href=\"/User/ValUtilisateur/";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Utilisateur"], "USER_ID", [], "any", false, false, false, 35), "html", null, true);
            echo "\"><i class=\"fas fa-check-circle\"></i></a>
                    <a class=\"btn btn-danger\" href=\"/User/delUtilisateur/";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Utilisateur"], "USER_ID", [], "any", false, false, false, 36), "html", null, true);
            echo "\"><i class=\"fas fa-times-circle\"></i></a>
                </div>
            </td>
        </tr>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Utilisateur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
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
        return array (  125 => 42,  113 => 36,  109 => 35,  103 => 32,  99 => 31,  95 => 30,  89 => 29,  85 => 27,  81 => 26,  58 => 5,  54 => 4,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"/Article/Accueil.html.twig\" %}
{% block title %}Validation utilisateur{% endblock %}

{% block body %}

    <nav>
        <div class=\"menu\">
            <ul>

                <li>
                    <a class=\"dropdown-item\" href=\"/welcome\"><img src=\"/uploads/images/logo.png\"></a>
                </li>
            </ul>
        </div>
    </nav>
    </br></br></br></br>
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
