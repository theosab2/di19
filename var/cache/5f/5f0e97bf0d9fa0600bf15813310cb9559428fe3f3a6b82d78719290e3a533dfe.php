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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("index.html.twig", "User/readFile.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " Editeur CSS - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "
<html lang=\"fr\">

<head>

    <meta charset=\"UTF-8\">

    <title> ReadFile</title>

    <link rel=\"stylesheet\" href=\"/assets/index.css\">
    <link rel=\"stylesheet\" href=\"/assets/test.css\">

</head>

<body>
    <form name=\"addArticle\" method=\"post\" enctype=\"multipart/form-data\">
        <textarea id=\"cssFileData\" name=\"cssFileData\"
                  rows=\"14\" cols=\"150\">";
        // line 22
        echo twig_escape_filter($this->env, ($context["cssFileData"] ?? null), "html", null, true);
        echo "
        </textarea>

        <div>
            <center><input type=\"submit\" value=Valider class=\"btn-warning\"></center>
        </div>
    </form>
</body>

</html>

";
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
        return array (  78 => 22,  59 => 5,  55 => 4,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"index.html.twig\" %}
{% block title %} Editeur CSS - {{ parent() }}{% endblock %}

{% block body %}

<html lang=\"fr\">

<head>

    <meta charset=\"UTF-8\">

    <title> ReadFile</title>

    <link rel=\"stylesheet\" href=\"/assets/index.css\">
    <link rel=\"stylesheet\" href=\"/assets/test.css\">

</head>

<body>
    <form name=\"addArticle\" method=\"post\" enctype=\"multipart/form-data\">
        <textarea id=\"cssFileData\" name=\"cssFileData\"
                  rows=\"14\" cols=\"150\">{{ cssFileData }}
        </textarea>

        <div>
            <center><input type=\"submit\" value=Valider class=\"btn-warning\"></center>
        </div>
    </form>
</body>

</html>

{% endblock %}", "User/readFile.html.twig", "C:\\dev\\www\\tp\\templates\\User\\readFile.html.twig");
    }
}
