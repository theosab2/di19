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

/* User/Matching.html.twig */
class __TwigTemplate_cfa09b0cc0d585a5ea61f6cf0d4bf618f92cfd2354c5478b9398b53495a5bb90 extends Template
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
        $this->parent = $this->loadTemplate("/Article/Accueil.html.twig", "User/Matching.html.twig", 1);
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
        <th scope=\"col\">Nom</th>
        <th scope=\"col\">Prenom</th>
        <th scope=\"col\">Projet</th>
        <th scope=\"col\">Message</th>

    </tr>
    </thead>
    <tbody>
    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["utilisateurlist"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["Utilisateur"]) {
            // line 29
            echo "
        <tr>
            <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Utilisateur"], "USER_NOM", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
            <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Utilisateur"], "USER_PRENOM", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
            <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Utilisateur"], "USER_PROJET", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>


        </tr>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Utilisateur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "    </tbody>

";
    }

    public function getTemplateName()
    {
        return "User/Matching.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 39,  99 => 33,  95 => 32,  91 => 31,  87 => 29,  83 => 28,  58 => 5,  54 => 4,  47 => 2,  36 => 1,);
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
        <th scope=\"col\">Nom</th>
        <th scope=\"col\">Prenom</th>
        <th scope=\"col\">Projet</th>
        <th scope=\"col\">Message</th>

    </tr>
    </thead>
    <tbody>
    {% for Utilisateur in utilisateurlist %}

        <tr>
            <td>{{ Utilisateur.USER_NOM }}</td>
            <td>{{ Utilisateur.USER_PRENOM }}</td>
            <td>{{ Utilisateur.USER_PROJET }}</td>


        </tr>

    {% endfor %}
    </tbody>

{% endblock %}", "User/Matching.html.twig", "C:\\Git\\PullUp\\templates\\User\\Matching.html.twig");
    }
}
