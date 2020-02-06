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

/* User/login.html.twig */
class __TwigTemplate_47756b8761e502619451a8a536fe1a6c6edd9d758714fb0a5498685e2c2a34d3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>

<html lang=\"fr\">




<head>

    <meta charset=\"UTF-8\">

    <title> Connexion</title>

    <link rel=\"stylesheet\" href=\"https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css\">

    <link rel=\"stylesheet\" href=\"/assets/styleconnexion.css\">

</head>




<body id=\"connexion\">

</a></div>

<div class=\"content\">

    <div class=\"container\">
        <p class=\"perror\">";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "errorlogin", [], "any", false, false, false, 30), "html", null, true);
        echo "</p>


        <div class=\"menu\">


            <a href=\"connexion\" class=\"btn-connexion\">

                <h2>Se Connecter</h2>

            </a>

            <a href=\"inscription\" class=\"btn-enregistrer
active\">

                <h2>S'inscrire</h2>

            </a>

        </div>

        <div class=\"connexion\">

            <form class=\"contact-form\" name=\"connexion\" method=\"post\">

                <label>Identifiant</label>

                <input name=\"email\" placeholder=\"\" type=\"text\">


                <label>Mot de passe</label>

                <input name=\"password\" placeholder=\"\" type=\"password\">

                <div class=\"check\">

                    <label>

                        <input id=\"check\" type=\"checkbox\" class=\"checkbox\">

                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"26px\" height=\"23px\">

                            <path class=\"path-back\"
                                  d=\"M1.5,6.021V2.451C1.5,2.009,1.646,1.5,2.3,1.5h18.4c0.442,0,0.8,0.358,0.8,0.801v18.398c0,0.442-0.357,0.801-0.8,0.801H2.3c-0.442,0-0.8-0.358-0.8-0.801V6\">

                            </path>

                            <path class=\"path-moving\"
                                  d=\"M24.192,3.813L11.818,16.188L1.5,6.021V2.451C1.5,2.009,1.646,1.5,2.3,1.5h18.4c0.442,0,0.8,0.358,0.8,0.801v18.398c0,0.442-0.357,0.801-0.8,0.801H2.3c-0.442,0-0.8-0.358-0.8-0.801V6\">

                            </path>

                        </svg>

                    </label>

                    <h3>Restez connecté</h3>

                </div>

                <!-- Captcha -->
                <head>
                    <title>reCAPTCHA demo: Simple page</title>
                    <script src=\"https://www.google.com/recaptcha/api.js\" async defer></script>
                </head>
                <body>
                <form action=\"?\" method=\"POST\">
                    <div class=\"g-recaptcha\" data-sitekey=\"6LcNR9YUAAAAAB0P3Y5B0UdAlg_sVQYa5l0nQ6MC\"></div>
                    <br/>
                    <input class=\"submit\" value=\"login\" type=\"submit\">
                </form>
                </body>
                <!-- -->

            </form>

            <hr>


        </div>



    </div>


</body>




</html>";
    }

    public function getTemplateName()
    {
        return "User/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 30,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>

<html lang=\"fr\">




<head>

    <meta charset=\"UTF-8\">

    <title> Connexion</title>

    <link rel=\"stylesheet\" href=\"https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css\">

    <link rel=\"stylesheet\" href=\"/assets/styleconnexion.css\">

</head>




<body id=\"connexion\">

</a></div>

<div class=\"content\">

    <div class=\"container\">
        <p class=\"perror\">{{ session.errorlogin }}</p>


        <div class=\"menu\">


            <a href=\"connexion\" class=\"btn-connexion\">

                <h2>Se Connecter</h2>

            </a>

            <a href=\"inscription\" class=\"btn-enregistrer
active\">

                <h2>S'inscrire</h2>

            </a>

        </div>

        <div class=\"connexion\">

            <form class=\"contact-form\" name=\"connexion\" method=\"post\">

                <label>Identifiant</label>

                <input name=\"email\" placeholder=\"\" type=\"text\">


                <label>Mot de passe</label>

                <input name=\"password\" placeholder=\"\" type=\"password\">

                <div class=\"check\">

                    <label>

                        <input id=\"check\" type=\"checkbox\" class=\"checkbox\">

                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"26px\" height=\"23px\">

                            <path class=\"path-back\"
                                  d=\"M1.5,6.021V2.451C1.5,2.009,1.646,1.5,2.3,1.5h18.4c0.442,0,0.8,0.358,0.8,0.801v18.398c0,0.442-0.357,0.801-0.8,0.801H2.3c-0.442,0-0.8-0.358-0.8-0.801V6\">

                            </path>

                            <path class=\"path-moving\"
                                  d=\"M24.192,3.813L11.818,16.188L1.5,6.021V2.451C1.5,2.009,1.646,1.5,2.3,1.5h18.4c0.442,0,0.8,0.358,0.8,0.801v18.398c0,0.442-0.357,0.801-0.8,0.801H2.3c-0.442,0-0.8-0.358-0.8-0.801V6\">

                            </path>

                        </svg>

                    </label>

                    <h3>Restez connecté</h3>

                </div>

                <!-- Captcha -->
                <head>
                    <title>reCAPTCHA demo: Simple page</title>
                    <script src=\"https://www.google.com/recaptcha/api.js\" async defer></script>
                </head>
                <body>
                <form action=\"?\" method=\"POST\">
                    <div class=\"g-recaptcha\" data-sitekey=\"6LcNR9YUAAAAAB0P3Y5B0UdAlg_sVQYa5l0nQ6MC\"></div>
                    <br/>
                    <input class=\"submit\" value=\"login\" type=\"submit\">
                </form>
                </body>
                <!-- -->

            </form>

            <hr>


        </div>



    </div>


</body>




</html>", "User/login.html.twig", "C:\\dev\\www\\di19\\templates\\User\\login.html.twig");
    }
}
