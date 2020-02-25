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

/* User/testCaptcha.html.twig */
class __TwigTemplate_dd80065adad5db88871278421fbd2329ada97b0599624f8c89582e57602f9dc8 extends Template
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
        echo "<html>
<head>
    <title>reCAPTCHA demo: Simple page</title>
    <script src=\"https://www.google.com/recaptcha/api.js\" async defer></script>
</head>
<body>
<form action=\"?\" method=\"POST\">
    <div class=\"g-recaptcha\" data-sitekey=\"6LcNR9YUAAAAAB0P3Y5B0UdAlg_sVQYa5l0nQ6MC\"></div>
    <br/>
    <input type=\"submit\" value=\"Submit\">
</form>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "User/testCaptcha.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html>
<head>
    <title>reCAPTCHA demo: Simple page</title>
    <script src=\"https://www.google.com/recaptcha/api.js\" async defer></script>
</head>
<body>
<form action=\"?\" method=\"POST\">
    <div class=\"g-recaptcha\" data-sitekey=\"6LcNR9YUAAAAAB0P3Y5B0UdAlg_sVQYa5l0nQ6MC\"></div>
    <br/>
    <input type=\"submit\" value=\"Submit\">
</form>
</body>
</html>", "User/testCaptcha.html.twig", "C:\\dev\\www\\tp\\templates\\User\\testCaptcha.html.twig");
    }
}
