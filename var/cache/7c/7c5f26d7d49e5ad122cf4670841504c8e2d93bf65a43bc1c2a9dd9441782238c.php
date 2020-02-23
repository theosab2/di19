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

/* User/inscription.html.twig */
class __TwigTemplate_458ab554a36d889e9a6679123bbb2197b894f61166a08873305b5c59ff54d994 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "
<!DOCTYPE html>

<html lang=\"en\">

<head>

    <meta charset=\"UTF-8\">

    <title>-Inscription-</title>

    <link rel=\"stylesheet\" href=\"https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css\">

    <link rel=\"stylesheet\" href=\"/assets/styleconnexion.css\">
    <link rel=\"icon\" href=\"/uploads/images/favicon.ico\"/>

</head>

";
        // line 19
        $this->displayBlock('body', $context, $blocks);
        // line 89
        echo "



</html>";
    }

    // line 19
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "    </a></div>
    <div class=\"content\">
        <div class=\"container\">
            <p>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "errinscription", [], "any", false, false, false, 23), "html", null, true);
        echo "</p>
            <div class=\"menu\">
                <a href=\"login\" class=\"btn-enregistrer active\">
                    <h2>Se Connecter</h2>
                </a>
                <a href=\"inscription\" class=\"btn-connexion\"></a>
                    <h2>S'inscrire</h2>
                </a>
            </div>


            <div class=\"enregistrer\">
                <form name=\"inscription\" class=\"contact-form\" method=\"post\" enctype=\"multipart/form-data\">

                    <div class=\"form-group row\">
                        <label>Nom</label>
                        <input name=\"nom\" placeholder=\"\" type=\"text\" class=\"form-control\" required>
                    </div>
                    <div class=\"form-group row\">
                        <label>Prénom</label>
                        <input name=\"prenom\" placeholder=\"\" type=\"text\" class=\"form-control\" required>
                    </div>
                    <div class=\"form-group row\">
                        <label>E-mail</label>
                        <input name=\"email\" placeholder=\"\" type=\"text\" class=\"form-control\" required
                               pattern=\"^(([-\\w\\d]+)(\\.[-\\w\\d]+)*@([-\\w\\d]+)(\\.[-\\w\\d]+)*(\\.([a-zA-Z]{2,5}|[\\d]{1,3})){1,2})\$\">
                    </div>
                    <div class=\"form-group row\">
                        <label>Mot de passe</label>
                        <input name=\"password\" placeholder=\"\" type=\"password\" class=\"form-control\" required>
                    </div>
                    <div class=\"form-group row\">
                        <label>Confirmation de mot de passe</label>
                        <input name=\"password2\" placeholder=\"\" type=\"password\" class=\"form-control\" required>
                    </div>
                    <div class=\"check\">

                        <label>
                            <input id=\"check\" type=\"checkbox\" class=\"checkbox\" required
                                   aria-required=\"true\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"26px\" height=\"23px\">
                                <path class=\"path-back\"
                                      d=\"M1.5,6.021V2.451C1.5,2.009,1.646,1.5,2.3,1.5h18.4c0.442,0,0.8,0.358,0.8,0.801v18.398c0,0.442-0.357,0.801-0.8,0.801H2.3c-0.442,0-0.8-0.358-0.8-0.801V6\">
                                </path>

                                <path class=\"path-moving\"
                                      d=\"M24.192,3.813L11.818,16.188L1.5,6.021V2.451C1.5,2.009,1.646,1.5,2.3,1.5h18.4c0.442,0,0.8,0.358,0.8,0.801v18.398c0,0.442-0.357,0.801-0.8,0.801H2.3c-0.442,0-0.8-0.358-0.8-0.801V6\">
                                </path>
                            </svg>
                        </label>

                        <h3>J'accepte les conditions d'utilisation</h3>

                    </div>

                    <input class=\"submit\" value=\"S'inscrire\" type=\"submit\">

                </form>

            </div>

        </div>

    </div>

";
    }

    public function getTemplateName()
    {
        return "User/inscription.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  77 => 23,  72 => 20,  68 => 19,  60 => 89,  58 => 19,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!DOCTYPE html>

<html lang=\"en\">

<head>

    <meta charset=\"UTF-8\">

    <title>-Inscription-</title>

    <link rel=\"stylesheet\" href=\"https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css\">

    <link rel=\"stylesheet\" href=\"/assets/styleconnexion.css\">
    <link rel=\"icon\" href=\"/uploads/images/favicon.ico\"/>

</head>

{% block body %}
    </a></div>
    <div class=\"content\">
        <div class=\"container\">
            <p>{{ session.errinscription }}</p>
            <div class=\"menu\">
                <a href=\"login\" class=\"btn-enregistrer active\">
                    <h2>Se Connecter</h2>
                </a>
                <a href=\"inscription\" class=\"btn-connexion\"></a>
                    <h2>S'inscrire</h2>
                </a>
            </div>


            <div class=\"enregistrer\">
                <form name=\"inscription\" class=\"contact-form\" method=\"post\" enctype=\"multipart/form-data\">

                    <div class=\"form-group row\">
                        <label>Nom</label>
                        <input name=\"nom\" placeholder=\"\" type=\"text\" class=\"form-control\" required>
                    </div>
                    <div class=\"form-group row\">
                        <label>Prénom</label>
                        <input name=\"prenom\" placeholder=\"\" type=\"text\" class=\"form-control\" required>
                    </div>
                    <div class=\"form-group row\">
                        <label>E-mail</label>
                        <input name=\"email\" placeholder=\"\" type=\"text\" class=\"form-control\" required
                               pattern=\"^(([-\\w\\d]+)(\\.[-\\w\\d]+)*@([-\\w\\d]+)(\\.[-\\w\\d]+)*(\\.([a-zA-Z]{2,5}|[\\d]{1,3})){1,2})\$\">
                    </div>
                    <div class=\"form-group row\">
                        <label>Mot de passe</label>
                        <input name=\"password\" placeholder=\"\" type=\"password\" class=\"form-control\" required>
                    </div>
                    <div class=\"form-group row\">
                        <label>Confirmation de mot de passe</label>
                        <input name=\"password2\" placeholder=\"\" type=\"password\" class=\"form-control\" required>
                    </div>
                    <div class=\"check\">

                        <label>
                            <input id=\"check\" type=\"checkbox\" class=\"checkbox\" required
                                   aria-required=\"true\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"26px\" height=\"23px\">
                                <path class=\"path-back\"
                                      d=\"M1.5,6.021V2.451C1.5,2.009,1.646,1.5,2.3,1.5h18.4c0.442,0,0.8,0.358,0.8,0.801v18.398c0,0.442-0.357,0.801-0.8,0.801H2.3c-0.442,0-0.8-0.358-0.8-0.801V6\">
                                </path>

                                <path class=\"path-moving\"
                                      d=\"M24.192,3.813L11.818,16.188L1.5,6.021V2.451C1.5,2.009,1.646,1.5,2.3,1.5h18.4c0.442,0,0.8,0.358,0.8,0.801v18.398c0,0.442-0.357,0.801-0.8,0.801H2.3c-0.442,0-0.8-0.358-0.8-0.801V6\">
                                </path>
                            </svg>
                        </label>

                        <h3>J'accepte les conditions d'utilisation</h3>

                    </div>

                    <input class=\"submit\" value=\"S'inscrire\" type=\"submit\">

                </form>

            </div>

        </div>

    </div>

{% endblock %}




</html>", "User/inscription.html.twig", "C:\\Git\\PullUp\\templates\\User\\inscription.html.twig");
    }
}
