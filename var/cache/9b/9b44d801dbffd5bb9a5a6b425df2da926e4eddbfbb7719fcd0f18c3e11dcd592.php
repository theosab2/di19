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
class __TwigTemplate_f45414459dfda864b675e5c4687284599916b64043047572a14ef871cedfe58f extends Template
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
    <link rel=\"stylesheet\"
          href=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/pepper-grinder/jquery-ui.css\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.1/css/all.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css\">
    <link rel=\"stylesheet\" href=\"/assets/index.css\">
    ";
        // line 12
        $this->displayBlock('css', $context, $blocks);
        // line 13
        echo "    <link rel=\"icon\" href=\"book.ico\"/>
</head>
<body>

<nav class=\"navbar sticky-top nav-pills navbar-expand-lg navbar-dark bg-dark\">

    <a class=\"navbar-brand\" href=\"/Article/ListAll\">Blog du CESI</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarTogglerDemo02\"
            aria-controls=\"navbarTogglerDemo02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarTogglerDemo02\">
        <!--<div class=\"row\">-->

        <ul class=\"navbar-nav mr-auto mt-2 mt-lg-0\">
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/Article/ListAll\">Liste des articles</a>
            </li>
            ";
        // line 31
        if (twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "login", [], "any", true, true, false, 31)) {
            // line 32
            echo "                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/Article/Add\">Ajout d'un article</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/Categorie\">Liste des categories</a>
                </li>

                ";
            // line 39
            if (twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "login", [], "any", true, true, false, 39)) {
                // line 40
                echo "                    ";
                if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "login", [], "any", false, false, false, 40), "isadmin", [], "any", false, false, false, 40), 1)) {
                    // line 41
                    echo "                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"/Categorie/Add\">Ajout d'une categorie</a>
                        </li>
                ";
                }
                // line 45
                echo "
                 ";
                // line 46
                if (twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "login", [], "any", true, true, false, 46)) {
                    // line 47
                    echo "                     ";
                    if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "login", [], "any", false, false, false, 47), "isadmin", [], "any", false, false, false, 47), 1)) {
                        // line 48
                        echo "
                        <li class=\"nav-item mr-auto mt-2 mt-lg-0\">
                            <a class=\"nav-link\" href=\"/Article/Validation\">Valider un article</a>
                        <li/>
                        <li class=\"nav-item mr-auto mt-2 mt-lg-0\">
                            <a class=\"nav-link\" href=\"/User\">Changer le design</a>
                        <li/>

                        ";
                    }
                    // line 57
                    echo "
                    ";
                }
                // line 59
                echo "                ";
            }
            // line 60
            echo "            ";
        }
        // line 61
        echo "        </ul>

        <form class=\"form-inline\" method=\"post\" action=\"/Article/Cherche\">
            <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Rechercher un article\" name=\"search\">
            <input type=\"submit\" class=\"btn btn-outline-success my-2 my-sm-0\" value=\"Rechercher\" name=\"searchSubmit\">
        </form>

    </div>

</nav>

<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
    ";
        // line 73
        if (twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "login", [], "any", true, true, false, 73)) {
            // line 74
            echo "        <a class=\"navbar-brand\" href=\"#\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "login", [], "any", false, false, false, 74), "prenom", [], "any", false, false, false, 74), "html", null, true);
            echo "</a>
    ";
        } else {
            // line 76
            echo "        <a class=\"navbar-brand\" href=\"#\">Visiteur</a>
    ";
        }
        // line 78
        echo "    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\"
            aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\"
                   aria-haspopup=\"true\" aria-expanded=\"false\">

                </a>
                <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">

                    ";
        // line 92
        if ( !twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "login", [], "any", true, true, false, 92)) {
            // line 93
            echo "                        <a class=\"dropdown-item\" href=\"/inscription\">Inscription</a>
                        <a class=\"dropdown-item\" href=\"/login\">Connexion</a>
                    ";
        }
        // line 96
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "login", [], "any", true, true, false, 96)) {
            // line 97
            echo "                        <a class=\"dropdown-item\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "login", [], "any", false, false, false, 97), "email", [], "any", false, false, false, 97), "html", null, true);
            echo "</a>
                        <a class=\"dropdown-item\">";
            // line 98
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "login", [], "any", false, false, false, 98), "nom", [], "any", false, false, false, 98), "html", null, true);
            echo "</a>
                        <a class=\"dropdown-item\" href=\"/logout\">Deconnexion</a>
                    ";
        }
        // line 101
        echo "                    <div class=\"dropdown-divider\"></div>
                </div>
            </li>
            ";
        // line 104
        if (twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "login", [], "any", true, true, false, 104)) {
            // line 105
            echo "                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/Api/Article/Last\">Affiche les 5 derniers articles</a>
                </li>
                ";
            // line 108
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "login", [], "any", false, false, false, 108), "isadmin", [], "any", false, false, false, 108), 1)) {
                // line 109
                echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/Utilisateur\">Valider un utilisateur</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/ListUtilisateur\">Liste des utilisateurs</a>
                    </li>
                ";
            }
            // line 116
            echo "
            ";
        }
        // line 118
        echo "            <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\"
                   aria-haspopup=\"true\" aria-expanded=\"false\">
                    Filtre Categorie
                </a>
                <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                    ";
        // line 124
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listCat"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["Categorie"]) {
            // line 125
            echo "                        <a class=\"dropdown-item\" name=\"FiltreCategorie\"
                           href=\"/Article/FiltreCategorie/";
            // line 126
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Categorie"], "Id", [], "any", false, false, false, 126), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Categorie"], "Nom", [], "any", false, false, false, 126), "html", null, true);
            echo "</a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "                    <div class=\"dropdown-divider\"></div>
                </div>
            </li>
        </ul>
    </div>
</nav>


";
        // line 136
        $this->displayBlock('body', $context, $blocks);
        // line 137
        echo "

<script src=\"https://code.jquery.com/jquery-3.4.0.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"></script>
<script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
<script src=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/i18n/jquery-ui-i18n.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js\"></script>
";
        // line 145
        $this->displayBlock('javascript', $context, $blocks);
        // line 146
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

    // line 12
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 136
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 145
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
        return array (  294 => 145,  288 => 136,  282 => 12,  275 => 5,  269 => 146,  267 => 145,  257 => 137,  255 => 136,  245 => 128,  235 => 126,  232 => 125,  228 => 124,  220 => 118,  216 => 116,  207 => 109,  205 => 108,  200 => 105,  198 => 104,  193 => 101,  187 => 98,  182 => 97,  179 => 96,  174 => 93,  172 => 92,  156 => 78,  152 => 76,  146 => 74,  144 => 73,  130 => 61,  127 => 60,  124 => 59,  120 => 57,  109 => 48,  106 => 47,  104 => 46,  101 => 45,  95 => 41,  92 => 40,  90 => 39,  81 => 32,  79 => 31,  59 => 13,  57 => 12,  47 => 5,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <title>{% block title %}CESI BLOG{% endblock %}</title>
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\">
    <link rel=\"stylesheet\"
          href=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/pepper-grinder/jquery-ui.css\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.1/css/all.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css\">
    <link rel=\"stylesheet\" href=\"/assets/index.css\">
    {% block css %}{% endblock %}
    <link rel=\"icon\" href=\"book.ico\"/>
</head>
<body>

<nav class=\"navbar sticky-top nav-pills navbar-expand-lg navbar-dark bg-dark\">

    <a class=\"navbar-brand\" href=\"/Article/ListAll\">Blog du CESI</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarTogglerDemo02\"
            aria-controls=\"navbarTogglerDemo02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
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

                {% if session.login is defined %}
                    {% if session.login.isadmin == 1 %}
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"/Categorie/Add\">Ajout d'une categorie</a>
                        </li>
                {% endif %}

                 {% if session.login is defined  %}
                     {% if session.login.isadmin == 1 %}

                        <li class=\"nav-item mr-auto mt-2 mt-lg-0\">
                            <a class=\"nav-link\" href=\"/Article/Validation\">Valider un article</a>
                        <li/>
                        <li class=\"nav-item mr-auto mt-2 mt-lg-0\">
                            <a class=\"nav-link\" href=\"/User\">Changer le design</a>
                        <li/>

                        {% endif %}

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
    {% if session.login is defined %}
        <a class=\"navbar-brand\" href=\"#\">{{ session.login.prenom }}</a>
    {% else %}
        <a class=\"navbar-brand\" href=\"#\">Visiteur</a>
    {% endif %}
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\"
            aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\"
                   aria-haspopup=\"true\" aria-expanded=\"false\">

                </a>
                <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">

                    {% if not session.login is defined %}
                        <a class=\"dropdown-item\" href=\"/inscription\">Inscription</a>
                        <a class=\"dropdown-item\" href=\"/login\">Connexion</a>
                    {% endif %}
                    {% if session.login is defined %}
                        <a class=\"dropdown-item\">{{session.login.email}}</a>
                        <a class=\"dropdown-item\">{{session.login.nom}}</a>
                        <a class=\"dropdown-item\" href=\"/logout\">Deconnexion</a>
                    {% endif %}
                    <div class=\"dropdown-divider\"></div>
                </div>
            </li>
            {% if session.login is defined %}
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/Api/Article/Last\">Affiche les 5 derniers articles</a>
                </li>
                {% if session.login.isadmin == 1 %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/Utilisateur\">Valider un utilisateur</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/ListUtilisateur\">Liste des utilisateurs</a>
                    </li>
                {% endif %}

            {% endif %}
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\"
                   aria-haspopup=\"true\" aria-expanded=\"false\">
                    Filtre Categorie
                </a>
                <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                    {% for Categorie in listCat %}
                        <a class=\"dropdown-item\" name=\"FiltreCategorie\"
                           href=\"/Article/FiltreCategorie/{{ Categorie.Id }}\">{{ Categorie.Nom }}</a>
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
", "index.html.twig", "C:\\dev\\www\\tp\\templates\\index.html.twig");
    }
}
