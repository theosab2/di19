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

// article
$router = new \src\Router\Router($_GET['url']);
$router->get('/', "Article#ListAll");
$router->get('/Article', "Article#ListAll");
$router->get('/Article/Show/:id','Article#Show#id');
$router->get('/Article/Update/:id', "Article#Update#id");
$router->post('/Article/Update/:id', "Article#Update#id");
$router->get('/Article/Add', "Article#Add");
$router->post('/Article/Add', "Article#Add");
$router->get('/Article/Delete/:id', "Article#Delete#id");
$router->get('/Article/Fixtures', "Article#Fixtures");
$router->get('/Article/Write', "Article#Write");
$router->get('/Article/Read', "Article#Read");
$router->get('/Article/WriteOne/:id', "Article#Read#id");
$router->get('/Api/Article', "Api#ArticleGet");
$router->post('/Api/Article', "Api#ArticlePost");
$router->put('/Api/Article/:id/:json', "Api#ArticlePut#id#json");
$router->get('/Article/ListAll','Article#listAll');
$router->post('/Article/Cherche', "Article#Cherche");
$router->get('/Article/Val/:id', 'Article#Val#id');
$router->get('/Article/FiltreCategorie/:id', 'Article#FiltreCategorie#id');


//categorie
$router->get('/Categorie', "Categorie#ListAll");
$router->get('/Categorie/Add','Categorie#add');
$router->post('/Categorie/Add','Categorie#add');
$router->get('/Categorie/show/:id','Categorie#show#id');
$router->get('/Categorie/update/:id','Categorie#update#id');
$router->post('/Categorie/update/:id','Categorie#update#id');
$router->get('/Categorie/delete/:id','Categorie#delete#id');

//Utilisateur
$router->get('/Contact', 'Contact#showForm');
$router->post('/Contact/sendMail', 'Contact#sendMail');

//Inscription
$router->get('/inscription','User#inscriptionForm');
$router->post('/inscription','User#inscriptionCheck');

//Connexion
$router->get('/login','User#loginForm');
$router->post('/login','User#loginCheck');

//Déconnexion
$router->get('/Logout', 'User#logout');

// API
$router->get('/Api/Article/Last','Api#ArticleGetLast');

//Validation Article
$router->get('/Article/Validation', 'Article#ListValidator');

$router->get('/Utilisateur', 'User#AfficherUtilisateur');

$router->get('/Article/ValUtilisateur/:id', 'User#ValUtilisateur#id');
$router->post('/Article/ValUtilisateur/:id', 'User#ValUtilisateur#id');

$router->get('/ListUtilisateur.html.twig', 'User#AfficherTlm');

echo $router->run();



