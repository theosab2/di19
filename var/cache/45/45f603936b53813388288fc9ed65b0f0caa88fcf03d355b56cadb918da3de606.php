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

/* index.html.twig */
class __TwigTemplate_7f1ec3debd5ab760c71d7e5d73587642f64bd13349c8fd87c191d8cdff4e3e42 extends Template
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
            'css' => [$this, 'block_css'],
            'body' => [$this, 'block_body'],
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!doctype html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/pepper-grinder/jquery-ui.css\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.1/css/all.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css\">
    ";
        // line 10
        $this->displayBlock('css', $context, $blocks);
        // line 11
        echo "
<body>

<nav class=\"navbar sticky-top nav-pills navbar-expand-lg navbar-dark bg-dark\">

    <a class=\"navbar-brand\" href=\"/Article/ListAll\">Blog du CESI</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarTogglerDemo02\" aria-controls=\"navbarTogglerDemo02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarTogglerDemo02\">
        <!--<div class=\"row\">-->

        <ul class=\"navbar-nav mr-auto mt-2 mt-lg-0\">
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/Article/ListAll\">Liste des articles</a>
            </li>
            ";
        // line 27
        if (twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "login", [], "any", true, true, false, 27)) {
            // line 28
            echo "            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/Article/Add\">Ajout d'un article</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/Categorie\">Liste des categories</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/Categorie/Add\">Ajout d'une categorie</a>
            </li>
                 ";
            // line 37
            if (twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "login", [], "any", true, true, false, 37)) {
                // line 38
                echo "                     ";
                if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "login", [], "any", false, false, false, 38), "isadmin", [], "any", false, false, false, 38), 1)) {
                    // line 39
                    echo "            <li class=\"nav-item mr-auto mt-2 mt-lg-0\">
                <a class=\"nav-link\" href=\"/Article/Validation\">Valider un article</a>
            <li/>
                <li class=\"nav-item mr-auto mt-2 mt-lg-0\">
                    <a class=\"nav-link\" href=\"/Admin/Css\">Changer le design</a>
                <li/>
                ";
                }
                // line 46
                echo "                    ";
            }
            // line 47
            echo "            ";
        }
        // line 48
        echo "        </ul>

        <form class=\"form-inline\" method=\"post\" action=\"/Article/Cherche\">
            <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Rechercher un article\" name=\"search\">
            <input type=\"submit\" class=\"btn btn-outline-success my-2 my-sm-0\" value=\"Rechercher\" name=\"searchSubmit\">
        </form>

    </div>

</nav>

<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
    <a class=\"navbar-brand\" href=\"#\">Menu</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <?php
            echo 'Bonjour' .\$_SESSION['USER_PRENOM']
    ?>
    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">

                </a>
                <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">

                    ";
        // line 75
        if ( !twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "login", [], "any", true, true, false, 75)) {
            // line 76
            echo "                    <a class=\"dropdown-item\" href=\"/inscription\">Inscription</a>
                    <a class=\"dropdown-item\" href=\"/login\">Connexion</a>
                    ";
        }
        // line 79
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "login", [], "any", true, true, false, 79)) {
            // line 80
            echo "                    <a class=\"dropdown-item\" href=\"/logout\">Deconnexion</a>
                    ";
        }
        // line 82
        echo "                    <div class=\"dropdown-divider\"></div>
                </div>
            </li>
            ";
        // line 85
        if (twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "login", [], "any", true, true, false, 85)) {
            // line 86
            echo "            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/Api/Article/Last\">Affiche les 5 derniers articles</a>
            </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/Utilisateur\">Valider un utilisateur</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/ListUtilisateur\">Liste des utilisateur</a>
                </li>


            ";
        }
        // line 98
        echo "            <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    Filtre Categorie
                </a>
                <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                    ";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listCat"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["Categorie"]) {
            // line 104
            echo "                        <a class=\"dropdown-item\" name=\"FiltreCategorie\" href=\"/Article/FiltreCategorie/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Categorie"], "Id", [], "any", false, false, false, 104), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Categorie"], "Nom", [], "any", false, false, false, 104), "html", null, true);
            echo "</a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "                    <div class=\"dropdown-divider\"></div>
                </div>
            </li>
        </ul>
    </div>
</nav>


    ";
        // line 114
        $this->displayBlock('body', $context, $blocks);
        // line 115
        echo "


<script src=\"https://code.jquery.com/jquery-3.4.0.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"></script>
<script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
<script src=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/i18n/jquery-ui-i18n.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js\"></script>
";
        // line 124
        $this->displayBlock('javascript', $context, $blocks);
        // line 125
        echo "</body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "CESI BLOG";
    }

    // line 10
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 114
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 124
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 124,  238 => 114,  232 => 10,  225 => 5,  219 => 125,  217 => 124,  206 => 115,  204 => 114,  194 => 106,  183 => 104,  179 => 103,  172 => 98,  158 => 86,  156 => 85,  151 => 82,  147 => 80,  144 => 79,  139 => 76,  137 => 75,  108 => 48,  105 => 47,  102 => 46,  93 => 39,  90 => 38,  88 => 37,  77 => 28,  75 => 27,  57 => 11,  55 => 10,  47 => 5,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <title>{% block title %}CESI BLOG{% endblock %}</title>
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/pepper-grinder/jquery-ui.css\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.1/css/all.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css\">
    {% block css %}{% endblock %}

<body>

<nav class=\"navbar sticky-top nav-pills navbar-expand-lg navbar-dark bg-dark\">

    <a class=\"navbar-brand\" href=\"/Article/ListAll\">Blog du CESI</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarTogglerDemo02\" aria-controls=\"navbarTogglerDemo02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarTogglerDemo02\">
        <!--<div class=\"row\">-->

        <ul class=\"navbar-nav mr-auto mt-2 mt-lg-0\">
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/Article/ListAll\">Liste des articles</a>
            </li>
            {% if session.login is defined %}
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/Article/Add\">Ajout d'un article</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/Categorie\">Liste des categories</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/Categorie/Add\">Ajout d'une categorie</a>
            </li>
                 {% if session.login is defined  %}
                     {% if session.login.isadmin == 1 %}
            <li class=\"nav-item mr-auto mt-2 mt-lg-0\">
                <a class=\"nav-link\" href=\"/Article/Validation\">Valider un article</a>
            <li/>
                <li class=\"nav-item mr-auto mt-2 mt-lg-0\">
                    <a class=\"nav-link\" href=\"/Admin/Css\">Changer le design</a>
                <li/>
                {% endif %}
                    {% endif %}
            {% endif %}
        </ul>

        <form class=\"form-inline\" method=\"post\" action=\"/Article/Cherche\">
            <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Rechercher un article\" name=\"search\">
            <input type=\"submit\" class=\"btn btn-outline-success my-2 my-sm-0\" value=\"Rechercher\" name=\"searchSubmit\">
        </form>

    </div>

</nav>

<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
    <a class=\"navbar-brand\" href=\"#\">Menu</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <?php
            echo 'Bonjour' .\$_SESSION['USER_PRENOM']
    ?>
    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">

                </a>
                <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">

                    {% if not session.login is defined %}
                    <a class=\"dropdown-item\" href=\"/inscription\">Inscription</a>
                    <a class=\"dropdown-item\" href=\"/login\">Connexion</a>
                    {% endif %}
                    {% if session.login is defined %}
                    <a class=\"dropdown-item\" href=\"/logout\">Deconnexion</a>
                    {% endif %}
                    <div class=\"dropdown-divider\"></div>
                </div>
            </li>
            {% if session.login is defined %}
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/Api/Article/Last\">Affiche les 5 derniers articles</a>
            </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/Utilisateur\">Valider un utilisateur</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/ListUtilisateur\">Liste des utilisateur</a>
                </li>


            {% endif %}
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    Filtre Categorie
                </a>
                <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                    {% for Categorie in listCat %}
                        <a class=\"dropdown-item\" name=\"FiltreCategorie\" href=\"/Article/FiltreCategorie/{{ Categorie.Id }}\">{{ Categorie.Nom }}</a>
                    {% endfor %}
                    <div class=\"dropdown-divider\"></div>
                </div>
            </li>
        </ul>
    </div>
</nav>


    {% block body %}{% endblock %}



<script src=\"https://code.jquery.com/jquery-3.4.0.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"></script>
<script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
<script src=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/i18n/jquery-ui-i18n.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js\"></script>
{% block javascript %}{% endblock %}
</body>
</html>
", "index.html.twig", "C:\\dev\\www\\di19\\templates\\index.html.twig");
    }
}
