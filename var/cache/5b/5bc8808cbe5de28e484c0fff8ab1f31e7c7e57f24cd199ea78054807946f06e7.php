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

/* User/index.html.twig */
class __TwigTemplate_9f6e3e040da2a8c392216720da268de069ad25a994bb99d0c584455e8ce2c1e8 extends Template
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
    <meta name=\"viewport\" content=\"width:device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/lity/2.1.1/lity.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/styles.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/responsive.css\">
    <link rel=\"icon\" href=\"/uploads/images/favicon.ico\"/>
    <script src=\"https://use.typekit.net/bdw7xbl.js\"></script>
    <script>
        try {
            Typekit.load({
                async: true
            });
        } catch (e) {}
    </script>
";
        // line 22
        $this->displayBlock('css', $context, $blocks);
        // line 23
        echo "
</head>
<body>

    <section class=\"banner clearfix\">
        <div class=\"overlay\"></div>
        <header class=\"top_header clearfix\">
            <nav>
                <a href=\"/inscription\" class=\"popup\">Connexion/Inscription</a>
                <ul>
                    <li class=\"active\">
                        <a href=\"#\">
                            <img src=\"/assets/images/fr.png\" alt=\"English\" title=\"English\"> <span>FR</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </header>

        <div class=\"intro clearfix\">
            <div class=\"wrapper\">
                <h1>
                    <br>
                    <img src=\"/assets/images/logo.svg\" alt=\"Pullup Social\" title=\"Pullup Social\">
                </h1>
                <p>Give me an Objective !</p>

                <div class=\"download_mobile_apps_buttons\">
                    <a href=\"#\" class=\"button\">
                        <img src=\"/assets/images/appstore.png\" alt=\"Download iOS Application\" title=\"Download iOS Application\">
                    </a>
                    <a href=\"#\" class=\"button\">
                        <img src=\"/assets/images/playstore.png\" alt=\"Download Android Application\" title=\"Download Android Application\">
                    </a>
                </div>
            </div>
        </div>

    </section>
    <!-- END Banner -->

    <!-- Footer -->
    <footer class=\"footer clearfix\">
        <div class=\"footer_column\">
            <h3>Téléchargement</h3>
            <ul>
                <li><a href=\"#\">Téléchargement pour iOS</a></li>
                <li><a href=\"#\">Téléchargement pour Android</a></li>
            </ul>
        </div>
        <div class=\"footer_column\">
            <h3>Communauté</h3>
            <ul>
                <li><a href=\"#\">Blog</a></li>
                <li><a href=\"#\">Technologie</a></li>
                <li><a href=\"#\">Support</a></li>
            </ul>
        </div>
        <div class=\"footer_column\">
            <h3>Compagnie</h3>
            <ul>
                <li><a href=\"#\">Equipe</a></li>
                <li><a href=\"/Contact\">Contact</a></li>
            </ul>
        </div>
        <div class=\"footer_column\">
            <h3>Partenaires</h3>
            <ul>
                <li><a href=\"#\">Cesi Alternance</a></li>
                <li><a href=\"#\">Rencontre1Bof.com</a></li>
            </ul>
        </div>
        <div class=\"footer_column\">
            <h3>Légal</h3>
            <ul>
                <li><a href=\"/condition\">Conditions générales</a></li>
            </ul>
        </div>
    </footer>
";
        // line 102
        $this->displayBlock('body', $context, $blocks);
        // line 103
        echo "    <!-- END Footer -->
    <!-- jQuery -->
    <script src=\"https://code.jquery.com/jquery.min.js\"></script>
    <!-- Magnific Popup -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js\"></script>
    <!-- Lity -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/lity/2.1.1/lity.min.js\"></script>

";
        // line 111
        $this->displayBlock('javascript', $context, $blocks);
        // line 112
        echo "
</body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "PullUp";
    }

    // line 22
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 102
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 111
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "User/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  189 => 111,  183 => 102,  177 => 22,  170 => 5,  164 => 112,  162 => 111,  152 => 103,  150 => 102,  69 => 23,  67 => 22,  47 => 5,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <title>{% block title %}PullUp{% endblock %}</title>
    <meta name=\"viewport\" content=\"width:device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/lity/2.1.1/lity.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/styles.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/responsive.css\">
    <link rel=\"icon\" href=\"/uploads/images/favicon.ico\"/>
    <script src=\"https://use.typekit.net/bdw7xbl.js\"></script>
    <script>
        try {
            Typekit.load({
                async: true
            });
        } catch (e) {}
    </script>
{% block css %}{% endblock %}

</head>
<body>

    <section class=\"banner clearfix\">
        <div class=\"overlay\"></div>
        <header class=\"top_header clearfix\">
            <nav>
                <a href=\"/inscription\" class=\"popup\">Connexion/Inscription</a>
                <ul>
                    <li class=\"active\">
                        <a href=\"#\">
                            <img src=\"/assets/images/fr.png\" alt=\"English\" title=\"English\"> <span>FR</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </header>

        <div class=\"intro clearfix\">
            <div class=\"wrapper\">
                <h1>
                    <br>
                    <img src=\"/assets/images/logo.svg\" alt=\"Pullup Social\" title=\"Pullup Social\">
                </h1>
                <p>Give me an Objective !</p>

                <div class=\"download_mobile_apps_buttons\">
                    <a href=\"#\" class=\"button\">
                        <img src=\"/assets/images/appstore.png\" alt=\"Download iOS Application\" title=\"Download iOS Application\">
                    </a>
                    <a href=\"#\" class=\"button\">
                        <img src=\"/assets/images/playstore.png\" alt=\"Download Android Application\" title=\"Download Android Application\">
                    </a>
                </div>
            </div>
        </div>

    </section>
    <!-- END Banner -->

    <!-- Footer -->
    <footer class=\"footer clearfix\">
        <div class=\"footer_column\">
            <h3>Téléchargement</h3>
            <ul>
                <li><a href=\"#\">Téléchargement pour iOS</a></li>
                <li><a href=\"#\">Téléchargement pour Android</a></li>
            </ul>
        </div>
        <div class=\"footer_column\">
            <h3>Communauté</h3>
            <ul>
                <li><a href=\"#\">Blog</a></li>
                <li><a href=\"#\">Technologie</a></li>
                <li><a href=\"#\">Support</a></li>
            </ul>
        </div>
        <div class=\"footer_column\">
            <h3>Compagnie</h3>
            <ul>
                <li><a href=\"#\">Equipe</a></li>
                <li><a href=\"/Contact\">Contact</a></li>
            </ul>
        </div>
        <div class=\"footer_column\">
            <h3>Partenaires</h3>
            <ul>
                <li><a href=\"#\">Cesi Alternance</a></li>
                <li><a href=\"#\">Rencontre1Bof.com</a></li>
            </ul>
        </div>
        <div class=\"footer_column\">
            <h3>Légal</h3>
            <ul>
                <li><a href=\"/condition\">Conditions générales</a></li>
            </ul>
        </div>
    </footer>
{% block body %}{% endblock %}
    <!-- END Footer -->
    <!-- jQuery -->
    <script src=\"https://code.jquery.com/jquery.min.js\"></script>
    <!-- Magnific Popup -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js\"></script>
    <!-- Lity -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/lity/2.1.1/lity.min.js\"></script>

{% block javascript %}{% endblock %}

</body>
</html>", "User/index.html.twig", "C:\\Git\\PullUp\\templates\\User\\index.html.twig");
    }
}
