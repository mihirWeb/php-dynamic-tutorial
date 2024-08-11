<?php

require 'functions/dumpDie.php';

// dd($_SERVER);

$uri = parse_url($_SERVER['REQUEST_URI'])['path']; // parse url parses the uri into path and string
// $uri = str_replace('/DynamicPHPtutorial/', '', $uri);

// dd($_SERVER);
// echo $uri;

// dd($_SERVER);


// if($uri === '/DynamicPHPtutorial/'){
//     require 'controllers/home.php';
// }else if($uri === '/DynamicPHPtutorial/contact/'){
//     require 'controllers/contact.php';
// }else if($uri === '/DynamicPHPtutorial/about/'){
//     require 'controllers/about.php';
// }

// better way- 
$routes = [
    '/DynamicPHPtutorial/' => 'controllers/home.php',
    '/DynamicPHPtutorial/contact/' => 'controllers/contact.php',
    '/DynamicPHPtutorial/about/' => 'controllers/about.php',
];

if(array_key_exists($uri, $routes)){
    require $routes[$uri];
} else{
    http_response_code(404);

    require 'views/404.view.php';

    die();
}