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
class __TwigTemplate_3eb572035d6c3b66d2716561ce77cc0f289ceae7216e8148d48ec29a63982ff7 extends Template
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
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\"
            integrity=\"sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n\"
            crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\"
            integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\"
            crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\"
            integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\"
            crossorigin=\"anonymous\"></script>
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\"
          integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
    <title>Pull up</title>
    <link rel=\"stylesheet\" href=\"/assets/edit.css\">
    <link rel=\"icon\" href=\"/uploads/images/favicon.ico\"/>
    ";
        // line 22
        $this->displayBlock('css', $context, $blocks);
        // line 23
        echo "</head>
<body>

<div class=\"logo\">
    <a href=\"/welcome\"><img src=\"/uploads/images/logo.png\" class=\"rounded mx-auto d-block\" alt=\"...\"
                                       style=\"height: 70px;\"></a>
</div>


<center>
    <form method=\"post\" class=\"container\"
          enctype=\"multipart/form-data\" novalidate>

        ";
        // line 36
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "ImageFileName", [], "any", false, false, false, 36), "") && call_user_func_array($this->env->getFunction('file_exist')->getCallable(), [((("./uploads/images/" . twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "ImageRepository", [], "any", false, false, false, 36)) . "/") . twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "ImageFileName", [], "any", false, false, false, 36))]))) {
            // line 37
            echo "            <img class='card-img-top' alt='Article'
                 src='/uploads/images/";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "ImageRepository", [], "any", false, false, false, 38), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "ImageFileName", [], "any", false, false, false, 38), "html", null, true);
            echo "'/>
        ";
        } else {
            // line 40
            echo "
            <h6 class=\"display-4\"><img src=\"/uploads/images/18404253_10208853500390567_4427579252194182369_o.jpg\" height=\"200px\"></h6>
        ";
        }
        // line 43
        echo "        <div class=\"custom-file\">
            <input type=\"file\" class=\"form-control-file custom-file-input\" name=\"image\" id=\"inputFile\">
            <label class=\"custom-file-label\" for=\"inputGroupFile01\"></label>
        </div>
        <div class=\"row form-row\">
            <div class=\"col-md-4 mb-3\">
                <label for=\"validationCustom01\">Nom</label>
                <input type=\"text\" class=\"form-control\" name=\"nom\" required value=\"";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["utilisateur"] ?? null), "USER_NOM", [], "any", false, false, false, 50), "html", null, true);
        echo "\">
                <div class=\"valid-feedback\">
                </div>

            </div>
            <div class=\"col-md-4 mb-3\">
                <label for=\"validationCustom02\">Prenom</label>
                <input type=\"text\" class=\"form-control\" name=\"prenom\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["utilisateur"] ?? null), "USER_PRENOM", [], "any", false, false, false, 57), "html", null, true);
        echo "\" required>
                <div class=\"valid-feedback\">

                </div>
            </div>


            <div class=\"col-md-4 mb-3\">
                <label for=\"validationCustomUsername\">age</label>
                <div class=\"input-group\">
                    <div class=\"input-group-prepend\">
                        <span class=\"input-group-text\"></span>
                    </div>
                    <input name=\"age\" type=\"text\" class=\"form-control\" id=\"validationCustomUsername\"
                           aria-describedby=\"inputGroupPrepend\" value=\"";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["utilisateur"] ?? null), "USER_AGE", [], "any", false, false, false, 71), "html", null, true);
        echo "\" required>
                    <div class=\"invalid-feedback\">

                    </div>
                </div>
            </div>
        </div>

        <div class=\"row form-row\">
            <div class=\"col-md-6 mb-3\">
                <label for=\"validationCustom03\">Ville</label>
                <input type=\"text\" class=\"form-control\" name=\"ville\" value=\"";
        // line 82
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["utilisateur"] ?? null), "USER_VILLE", [], "any", false, false, false, 82), "html", null, true);
        echo "\" required>
                <div class=\"invalid-feedback\">

                </div>
            </div>
            <div class=\"col-md-6 mb-3 cellule-vertical\">
                <label for=\"validationCustom04\">Sexe</label>
                <select class=\"form-control\" name=\"sexe\" id=\"validationCustom04\" value=\"";
        // line 89
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["utilisateur"] ?? null), "USER_SEXE", [], "any", false, false, false, 89), "html", null, true);
        echo "\"
                        required>
                    <option selected disabled value=\"\">...</option>
                    <option>Homme</option>
                    <option>Femme</option>
                </select>
                <div class=\"invalid-feedback\">

                </div>
            </div>
        </div>

        <div class=\"row form-row\">

            <div class=\"col-md-4 mb-3 cellule-vertical\">
                <label for=\"validationCustom04\">Ton projet</label>
                <select name=\"projet\" class=\"form-control\" id=\"validationCustom04\" value=\"";
        // line 105
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["utilisateur"] ?? null), "USER_PROJET", [], "any", false, false, false, 105), "html", null, true);
        echo "\"
                        required>
                    <option selected disabled value=\"\">...</option>
                    <option>Sport</option>
                    <option>Entreprise</option>
                    <option>Regime</option>
                    <option>Voyage</option>
                    <option>Découverte</option>
                    <option>Apprentissage</option>
                    <option>Création</option>
                </select>
                <div class=\"invalid-feedback\">

                </div>
            </div>


            <div class=\"col-md-8 mb-3\">
                <label for=\"validationCustom01\">Décris ton projet</label>
                <input class=\"form-control\" name=\"description\" rows=\"4\" value=\"";
        // line 124
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["utilisateur"] ?? null), "USER_DESC", [], "any", false, false, false, 124), "html", null, true);
        echo "\" required>
                <div class=\"valid-feedback\">

                </div>
            </div>
        </div>

        <div class=\"row form-row\">
            <div class=\"col-md-4 mb-3\">
                <label for=\"validationCustom01\">Centre d'interêt</label>
                <input type=\"text\" class=\"form-control\" name=\"centre\" value=\"";
        // line 134
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["utilisateur"] ?? null), "USER_CENTRE", [], "any", false, false, false, 134), "html", null, true);
        echo "\" required>
                <div class=\"valid-feedback\">

                </div>
            </div>
            <div class=\"col-md-4 mb-3\">
                <label for=\"validationCustom02\">Profession</label>
                <input type=\"text\" class=\"form-control\" name=\"profession\" value=\"";
        // line 141
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["utilisateur"] ?? null), "USER_PROFESSION", [], "any", false, false, false, 141), "html", null, true);
        echo "\"
                       required>
                <div class=\"valid-feedback\">

                </div>
            </div>

            <div class=\"col-md-4 mb-3\">
                <label for=\"validationCustom01\">Parle nous de toi</label>
                <input class=\"form-control\" name=\"moi\" value=\"";
        // line 150
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["utilisateur"] ?? null), "USER_MOI", [], "any", false, false, false, 150), "html", null, true);
        echo "\" required>
                <div class=\"valid-feedback\">

                </div>
            </div>

            </br></br></br></br></br>
            <div class=\"col-md-4 mb-3\">
                <label for=\"validationCustom04\">Situation</label>
                <select class=\"form-control\" name=\"situation\" id=\"validationCustom04\"
                        value=\"";
        // line 160
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["utilisateur"] ?? null), "USER_SITUATION", [], "any", false, false, false, 160), "html", null, true);
        echo "\" required>
                    <option selected disabled value=\"\">...</option>
                    <option>Celibataire</option>
                    <option>En couple</option>
                    <option>C'est compliqué</option>
                </select>
                <div class=\"invalid-feedback\">

                </div>
            </div>

            <div class=\"col-md-4 mb-3\">
                <label for=\"validationCustom04\">Je cherche</label>
                <select class=\"form-control\" name=\"cherche\" id=\"validationCustom04\"
                        value=\"";
        // line 174
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["utilisateur"] ?? null), "USER_CHERCHE", [], "any", false, false, false, 174), "html", null, true);
        echo "\" required>
                    <option selected disabled value=\"\">...</option>
                    <option>Un homme</option>
                    <option>Une femme</option>
                    <option>Peu importe</option>
                </select>
                <div class=\"invalid-feedback\">

                </div>
            </div>
        </div>

        ";
        // line 186
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "login", [], "any", false, false, false, 186), "roles", [], "any", false, false, false, 186));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 187
            echo "            ";
            if (0 === twig_compare($context["role"], "administrateur")) {
                // line 188
                echo "
                <div class=\"col-md-4 mb-3\">
                    <label for=\"validationCustom02\">Rôle</label>
                    <input type=\"text\" class=\"form-control\" name=\"role\" value=\"";
                // line 191
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["utilisateur"] ?? null), "USER_ROLE", [], "any", false, false, false, 191), "html", null, true);
                echo "\" required>
                    <div class=\"valid-feedback\">

                    </div>
                </div>
            ";
            }
            // line 197
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 198
        echo "
      <button class=\"btn btn-primary mb-5\" type=\"submit\">Valider</button>

    </form>


</center>

<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
        'use strict';
        window.addEventListener('load', function () {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function (form) {
                form.addEventListener('submit', function (event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>
";
        // line 226
        $this->displayBlock('body', $context, $blocks);
        // line 227
        echo "<script src=\"https://code.jquery.com/jquery-3.4.0.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"></script>
<script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
<script src=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/i18n/jquery-ui-i18n.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js\"></script>
<!-- <script type=\"text/javascript\" src=\"/public/assets/index.js\"></script> -->
";
        // line 234
        $this->displayBlock('javascript', $context, $blocks);
        // line 235
        echo "
</body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "BlogBooks";
    }

    // line 22
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 226
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 234
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        return array (  377 => 234,  371 => 226,  365 => 22,  358 => 5,  352 => 235,  350 => 234,  341 => 227,  339 => 226,  309 => 198,  303 => 197,  294 => 191,  289 => 188,  286 => 187,  282 => 186,  267 => 174,  250 => 160,  237 => 150,  225 => 141,  215 => 134,  202 => 124,  180 => 105,  161 => 89,  151 => 82,  137 => 71,  120 => 57,  110 => 50,  101 => 43,  96 => 40,  89 => 38,  86 => 37,  84 => 36,  69 => 23,  67 => 22,  47 => 5,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <title>{% block title %}BlogBooks{% endblock %}</title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\"
            integrity=\"sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n\"
            crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\"
            integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\"
            crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\"
            integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\"
            crossorigin=\"anonymous\"></script>
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\"
          integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
    <title>Pull up</title>
    <link rel=\"stylesheet\" href=\"/assets/edit.css\">
    <link rel=\"icon\" href=\"/uploads/images/favicon.ico\"/>
    {% block css %}{% endblock %}
</head>
<body>

<div class=\"logo\">
    <a href=\"/welcome\"><img src=\"/uploads/images/logo.png\" class=\"rounded mx-auto d-block\" alt=\"...\"
                                       style=\"height: 70px;\"></a>
</div>


<center>
    <form method=\"post\" class=\"container\"
          enctype=\"multipart/form-data\" novalidate>

        {% if article.ImageFileName != '' and    file_exist('./uploads/images/'~article.ImageRepository~'/'~article.ImageFileName) %}
            <img class='card-img-top' alt='Article'
                 src='/uploads/images/{{ article.ImageRepository }}/{{ article.ImageFileName }}'/>
        {% else %}

            <h6 class=\"display-4\"><img src=\"/uploads/images/18404253_10208853500390567_4427579252194182369_o.jpg\" height=\"200px\"></h6>
        {% endif %}
        <div class=\"custom-file\">
            <input type=\"file\" class=\"form-control-file custom-file-input\" name=\"image\" id=\"inputFile\">
            <label class=\"custom-file-label\" for=\"inputGroupFile01\"></label>
        </div>
        <div class=\"row form-row\">
            <div class=\"col-md-4 mb-3\">
                <label for=\"validationCustom01\">Nom</label>
                <input type=\"text\" class=\"form-control\" name=\"nom\" required value=\"{{ utilisateur.USER_NOM }}\">
                <div class=\"valid-feedback\">
                </div>

            </div>
            <div class=\"col-md-4 mb-3\">
                <label for=\"validationCustom02\">Prenom</label>
                <input type=\"text\" class=\"form-control\" name=\"prenom\" value=\"{{ utilisateur.USER_PRENOM }}\" required>
                <div class=\"valid-feedback\">

                </div>
            </div>


            <div class=\"col-md-4 mb-3\">
                <label for=\"validationCustomUsername\">age</label>
                <div class=\"input-group\">
                    <div class=\"input-group-prepend\">
                        <span class=\"input-group-text\"></span>
                    </div>
                    <input name=\"age\" type=\"text\" class=\"form-control\" id=\"validationCustomUsername\"
                           aria-describedby=\"inputGroupPrepend\" value=\"{{ utilisateur.USER_AGE }}\" required>
                    <div class=\"invalid-feedback\">

                    </div>
                </div>
            </div>
        </div>

        <div class=\"row form-row\">
            <div class=\"col-md-6 mb-3\">
                <label for=\"validationCustom03\">Ville</label>
                <input type=\"text\" class=\"form-control\" name=\"ville\" value=\"{{ utilisateur.USER_VILLE }}\" required>
                <div class=\"invalid-feedback\">

                </div>
            </div>
            <div class=\"col-md-6 mb-3 cellule-vertical\">
                <label for=\"validationCustom04\">Sexe</label>
                <select class=\"form-control\" name=\"sexe\" id=\"validationCustom04\" value=\"{{ utilisateur.USER_SEXE }}\"
                        required>
                    <option selected disabled value=\"\">...</option>
                    <option>Homme</option>
                    <option>Femme</option>
                </select>
                <div class=\"invalid-feedback\">

                </div>
            </div>
        </div>

        <div class=\"row form-row\">

            <div class=\"col-md-4 mb-3 cellule-vertical\">
                <label for=\"validationCustom04\">Ton projet</label>
                <select name=\"projet\" class=\"form-control\" id=\"validationCustom04\" value=\"{{ utilisateur.USER_PROJET }}\"
                        required>
                    <option selected disabled value=\"\">...</option>
                    <option>Sport</option>
                    <option>Entreprise</option>
                    <option>Regime</option>
                    <option>Voyage</option>
                    <option>Découverte</option>
                    <option>Apprentissage</option>
                    <option>Création</option>
                </select>
                <div class=\"invalid-feedback\">

                </div>
            </div>


            <div class=\"col-md-8 mb-3\">
                <label for=\"validationCustom01\">Décris ton projet</label>
                <input class=\"form-control\" name=\"description\" rows=\"4\" value=\"{{ utilisateur.USER_DESC }}\" required>
                <div class=\"valid-feedback\">

                </div>
            </div>
        </div>

        <div class=\"row form-row\">
            <div class=\"col-md-4 mb-3\">
                <label for=\"validationCustom01\">Centre d'interêt</label>
                <input type=\"text\" class=\"form-control\" name=\"centre\" value=\"{{ utilisateur.USER_CENTRE }}\" required>
                <div class=\"valid-feedback\">

                </div>
            </div>
            <div class=\"col-md-4 mb-3\">
                <label for=\"validationCustom02\">Profession</label>
                <input type=\"text\" class=\"form-control\" name=\"profession\" value=\"{{ utilisateur.USER_PROFESSION }}\"
                       required>
                <div class=\"valid-feedback\">

                </div>
            </div>

            <div class=\"col-md-4 mb-3\">
                <label for=\"validationCustom01\">Parle nous de toi</label>
                <input class=\"form-control\" name=\"moi\" value=\"{{ utilisateur.USER_MOI }}\" required>
                <div class=\"valid-feedback\">

                </div>
            </div>

            </br></br></br></br></br>
            <div class=\"col-md-4 mb-3\">
                <label for=\"validationCustom04\">Situation</label>
                <select class=\"form-control\" name=\"situation\" id=\"validationCustom04\"
                        value=\"{{ utilisateur.USER_SITUATION }}\" required>
                    <option selected disabled value=\"\">...</option>
                    <option>Celibataire</option>
                    <option>En couple</option>
                    <option>C'est compliqué</option>
                </select>
                <div class=\"invalid-feedback\">

                </div>
            </div>

            <div class=\"col-md-4 mb-3\">
                <label for=\"validationCustom04\">Je cherche</label>
                <select class=\"form-control\" name=\"cherche\" id=\"validationCustom04\"
                        value=\"{{ utilisateur.USER_CHERCHE }}\" required>
                    <option selected disabled value=\"\">...</option>
                    <option>Un homme</option>
                    <option>Une femme</option>
                    <option>Peu importe</option>
                </select>
                <div class=\"invalid-feedback\">

                </div>
            </div>
        </div>

        {% for role in session.login.roles %}
            {% if role == 'administrateur' %}

                <div class=\"col-md-4 mb-3\">
                    <label for=\"validationCustom02\">Rôle</label>
                    <input type=\"text\" class=\"form-control\" name=\"role\" value=\"{{ utilisateur.USER_ROLE }}\" required>
                    <div class=\"valid-feedback\">

                    </div>
                </div>
            {% endif %}
        {% endfor %}

      <button class=\"btn btn-primary mb-5\" type=\"submit\">Valider</button>

    </form>


</center>

<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
        'use strict';
        window.addEventListener('load', function () {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function (form) {
                form.addEventListener('submit', function (event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>
{% block body %}{% endblock %}
<script src=\"https://code.jquery.com/jquery-3.4.0.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"></script>
<script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
<script src=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/i18n/jquery-ui-i18n.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js\"></script>
<!-- <script type=\"text/javascript\" src=\"/public/assets/index.js\"></script> -->
{% block javascript %}{% endblock %}

</body>
</html>", "User/readFile.html.twig", "C:\\Git\\PullUp\\templates\\User\\readFile.html.twig");
    }
}
