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

/* Contact/form.html.twig */
class __TwigTemplate_91a8875a3800deaf82d98c92c2608b8a2e0cef0633cfcaee2a534a02df01623c extends Template
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
        echo "<!DOCTYPE>
<html>
<head>
    <title>Contact</title>

    <meta charset=\"UTF-8\">

    <!-- VIEWPORT [TRES IMPORTANT POUR LE RESPONSIVE DESIGN] -->
    <meta name=\"viewport\" content=\"width:device-width, initial-scale=1.0\">

    <!-- Normalize CSS -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.min.css\">

    <!-- Font Awesome -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css\">

    <!-- Magnific Popup -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css\">

    <!-- Lity -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/lity/2.1.1/lity.min.css\">

    <!-- Stylesheets -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/contact.css\">
    <link rel=\"icon\" href=\"/uploads/images/favicon.ico\"/>


</head>

<body>


<form method=\"post\" action=\"/Contact/sendMail\">
    <input type=\"text\" name=\"nom\" placeholder=\"Votre nom !\" class=\"name\" required />
    <input name=\"email\" placeholder=\"Votre email !\" class=\"email\" type=\"email\" required />
    <textarea rows=\"4\" cols=\"50\" name=\"content\" placeholder=\"Merci de rentrer votre message ici !\" class=\"message\" required></textarea>
    <input name=\"submit\" class=\"btn\" type=\"submit\" value=\"Envoyer\" />
</form>

<div>
    <br><br>
    <br><br><br>
    <br>
    <br>
    <a href=\"#\"><span>Facebook</span></a>
    <a href=\"#\"><span>Twitter</span></a>
    <a href=\"#\"><span>Google+</span></a>
    <a href=\"#\"><span>Github</span></a>
</div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "Contact/form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE>
<html>
<head>
    <title>Contact</title>

    <meta charset=\"UTF-8\">

    <!-- VIEWPORT [TRES IMPORTANT POUR LE RESPONSIVE DESIGN] -->
    <meta name=\"viewport\" content=\"width:device-width, initial-scale=1.0\">

    <!-- Normalize CSS -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.min.css\">

    <!-- Font Awesome -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css\">

    <!-- Magnific Popup -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css\">

    <!-- Lity -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/lity/2.1.1/lity.min.css\">

    <!-- Stylesheets -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/contact.css\">
    <link rel=\"icon\" href=\"/uploads/images/favicon.ico\"/>


</head>

<body>


<form method=\"post\" action=\"/Contact/sendMail\">
    <input type=\"text\" name=\"nom\" placeholder=\"Votre nom !\" class=\"name\" required />
    <input name=\"email\" placeholder=\"Votre email !\" class=\"email\" type=\"email\" required />
    <textarea rows=\"4\" cols=\"50\" name=\"content\" placeholder=\"Merci de rentrer votre message ici !\" class=\"message\" required></textarea>
    <input name=\"submit\" class=\"btn\" type=\"submit\" value=\"Envoyer\" />
</form>

<div>
    <br><br>
    <br><br><br>
    <br>
    <br>
    <a href=\"#\"><span>Facebook</span></a>
    <a href=\"#\"><span>Twitter</span></a>
    <a href=\"#\"><span>Google+</span></a>
    <a href=\"#\"><span>Github</span></a>
</div>
</body>
</html>", "Contact/form.html.twig", "C:\\Git\\PullUp\\templates\\Contact\\form.html.twig");
    }
}
