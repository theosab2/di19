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
class __TwigTemplate_0e2982243091ddbd146241b4d622fe3f116d8de400fb33438982dd85749818a5 extends Template
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
        $this->parent = $this->loadTemplate("/Article/Accueil.html.twig", "User/ListUtilisateur.html.twig", 1);
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
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "login", [], "any", false, false, false, 21), "roles", [], "any", false, false, false, 21));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 22
            echo "        ";
            if (0 === twig_compare($context["role"], "administrateur")) {
                // line 23
                echo "        <th scope=\"col\">Id</th>
        ";
            }
            // line 25
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "        <th scope=\"col\">Nom</th>
        <th scope=\"col\">Prenom</th>
        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "login", [], "any", false, false, false, 28), "roles", [], "any", false, false, false, 28));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 29
            echo "        ";
            if (0 === twig_compare($context["role"], "administrateur")) {
                // line 30
                echo "        <th scope=\"col\">Rôle</th>
        ";
            }
            // line 32
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        <th scope=\"col\">Projet</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["utilisateurlist"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["Utilisateur"]) {
            // line 38
            echo "
        <tr>";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "login", [], "any", false, false, false, 39), "roles", [], "any", false, false, false, 39));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 40
                echo "            ";
                if (0 === twig_compare($context["role"], "administrateur")) {
                    // line 41
                    echo "            <td>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Utilisateur"], "USER_ID", [], "any", false, false, false, 41), "html", null, true);
                    echo "</td>
            ";
                }
                // line 43
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "            <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Utilisateur"], "USER_NOM", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
            <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Utilisateur"], "USER_PRENOM", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
        ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "login", [], "any", false, false, false, 46), "roles", [], "any", false, false, false, 46));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 47
                echo "            ";
                if (0 === twig_compare($context["role"], "administrateur")) {
                    // line 48
                    echo "            <td>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Utilisateur"], "USER_ROLE", [], "any", false, false, false, 48), "html", null, true);
                    echo "</td>
            ";
                }
                // line 50
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "            <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Utilisateur"], "USER_PROJET", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>
            <td>
                <div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
                    ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "login", [], "any", false, false, false, 54), "roles", [], "any", false, false, false, 54));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 55
                echo "                          ";
                if (0 === twig_compare($context["role"], "administrateur")) {
                    // line 56
                    echo "                    <a class=\"btn btn-danger\" href=\"/User/delUtilisateur/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Utilisateur"], "USER_ID", [], "any", false, false, false, 56), "html", null, true);
                    echo "\"><i class=\"fas fa-times-circle\"></i></a>
                </div>
            </td>
        </tr>
        ";
                }
                // line 61
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Utilisateur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
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
        return array (  209 => 63,  203 => 62,  197 => 61,  188 => 56,  185 => 55,  181 => 54,  174 => 51,  168 => 50,  162 => 48,  159 => 47,  155 => 46,  151 => 45,  146 => 44,  140 => 43,  134 => 41,  131 => 40,  127 => 39,  124 => 38,  120 => 37,  114 => 33,  108 => 32,  104 => 30,  101 => 29,  97 => 28,  93 => 26,  87 => 25,  83 => 23,  80 => 22,  76 => 21,  58 => 5,  54 => 4,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"/Article/Accueil.html.twig\" %}
{% block title %}Liste utilisateur{% endblock %}

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
        {% for role in session.login.roles %}
        {% if role == 'administrateur' %}
        <th scope=\"col\">Id</th>
        {% endif %}
        {% endfor %}
        <th scope=\"col\">Nom</th>
        <th scope=\"col\">Prenom</th>
        {% for role in session.login.roles %}
        {% if role == 'administrateur' %}
        <th scope=\"col\">Rôle</th>
        {% endif %}
        {% endfor %}
        <th scope=\"col\">Projet</th>
    </tr>
    </thead>
    <tbody>
    {% for Utilisateur in utilisateurlist %}

        <tr>{% for role in session.login.roles %}
            {% if role == 'administrateur' %}
            <td>{{ Utilisateur.USER_ID }}</td>
            {% endif %}
    {% endfor %}
            <td>{{ Utilisateur.USER_NOM }}</td>
            <td>{{ Utilisateur.USER_PRENOM }}</td>
        {% for role in session.login.roles %}
            {% if role == 'administrateur' %}
            <td>{{ Utilisateur.USER_ROLE }}</td>
            {% endif %}
            {% endfor %}
            <td>{{ Utilisateur.USER_PROJET }}</td>
            <td>
                <div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
                    {% for role in session.login.roles %}
                          {% if role == 'administrateur' %}
                    <a class=\"btn btn-danger\" href=\"/User/delUtilisateur/{{ Utilisateur.USER_ID }}\"><i class=\"fas fa-times-circle\"></i></a>
                </div>
            </td>
        </tr>
        {% endif %}
    {% endfor %}
    {% endfor %}
    </tbody>

{% endblock %}", "User/ListUtilisateur.html.twig", "C:\\Git\\PullUp\\templates\\User\\ListUtilisateur.html.twig");
    }
}
