<?php
session_start();

require '../vendor/autoload.php';

function chargerClasse($classe){
    $ds = DIRECTORY_SEPARATOR;
    $dir = __DIR__."{$ds}.."; //Remonte d'un cran par rapport à index.php
    $classeName = str_replace('\\', $ds,$classe);

    $file = "{$dir}{$ds}{$classeName}.php";
    if(is_readable($file)){
        require_once $file;
    }
}

spl_autoload_register('chargerClasse');

$router = new \src\Router\Router($_GET['url']);

//Route pour afficher les articles
$router->get('/', "Article#ListAll");
$router->get('/Article', "Article#ListAll");

//Route pour modifier les articles
$router->get('/Article/Update/:id', "Article#Update#id");
$router->post('/Article/Update/:id', "Article#Update#id");

//Route pour ajouter un article
$router->get('/Article/Add', "Article#Add");
$router->post('/Article/Add', "Article#Add");

//Route pour supprimer un article
$router->get('/Article/Delete/:id', "Article#Delete#id");

//Route aucune idée
$router->get('/Article/Fixtures', "Article#Fixtures");
$router->get('/Article/Write', "Article#Write");
$router->get('/Article/Read', "Article#Read");
$router->get('/Article/WriteOne/:id', "Article#Read#id");

//Route de l'Api pour je sais pas quoi
$router->get('/Api/Article', "Api#ArticleGet");
$router->post('/Api/Article', "Api#ArticlePost");
$router->post('/Article', "Api#ArticlePost");
$router->put('/Api/Article/:id/:json', "Api#ArticlePut#id#json");
$router->get('/Article/ListAll','Article#listAll');

//Route pour l'envoi de mail
$router->get('/Contact', 'Contact#showForm');
$router->post('/Contact/sendMail', 'Contact#sendMail');

//Route pour accéder a la page qui permet de se connecter
$router->get('/Login', 'User#loginForm');

//Route pour verifier la statue d'un utilisateur
$router->post('/Login', 'User#loginCheck');

//Route pour se deconnecter
$router->get('/Logout', 'User#logout');

//Route montrer les articles
$router->get('/Article/Show/:id', "Article#Show#id");
$router->post('/Article/Show/:id', "Article#Show#id");

//route pour accéder à la page de validation des articles
$router->get('/Article/Validation', 'Article#ListValidator');

//Route validation article
$router->get('/Article/Val/:id', 'Article#Val#id');

echo $router->run();



