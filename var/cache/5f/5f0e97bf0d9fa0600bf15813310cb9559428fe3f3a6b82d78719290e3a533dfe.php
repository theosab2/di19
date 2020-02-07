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

/* User/readFile.html.twig */
class __TwigTemplate_39d1e8b068baee265a641fd1fdedeb51ce1b1037781ca062502b9486d82c52a8 extends Template
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

    <title> ReadFile</title>

    <link rel=\"stylesheet\" href=\"/assets/index.css\">
    <link rel=\"stylesheet\" href=\"/assets/test.css\">

</head>

<body>
    <form name=\"addArticle\" method=\"post\" enctype=\"multipart/form-data\">
        <label for=\"cssFileData\">Editeur CSS</label>

        <textarea id=\"cssFileData\" name=\"cssFileData\"
                  rows=\"25\" cols=\"185\">";
        // line 22
        echo twig_escape_filter($this->env, ($context["cssFileData"] ?? null), "html", null, true);
        echo "
        </textarea>

        <div>
            <center><input type=\"submit\" value=Valider class=\"btn-warning\"></center>
        </div>
    </form>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "User/readFile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 22,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>

<html lang=\"fr\">


<head>

    <meta charset=\"UTF-8\">

    <title> ReadFile</title>

    <link rel=\"stylesheet\" href=\"/assets/index.css\">
    <link rel=\"stylesheet\" href=\"/assets/test.css\">

</head>

<body>
    <form name=\"addArticle\" method=\"post\" enctype=\"multipart/form-data\">
        <label for=\"cssFileData\">Editeur CSS</label>

        <textarea id=\"cssFileData\" name=\"cssFileData\"
                  rows=\"25\" cols=\"185\">{{ cssFileData }}
        </textarea>

        <div>
            <center><input type=\"submit\" value=Valider class=\"btn-warning\"></center>
        </div>
    </form>
</body>

</html>", "User/readFile.html.twig", "C:\\dev\\www\\tp\\templates\\User\\readFile.html.twig");
    }
}
