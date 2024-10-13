<?php
  $title = "index";

  include 'includes/class-autoload.inc.php';
  include_once('includes/header.php');

$routes = [
    'register' => 'userscontr@register',
    'login'=> 'userscontr@login',
    //'/share' => 'classes\ShareController.class@share',
    '' => 'userscontr@index',
    'index' => 'userscontr@index',
    'shares' => 'sharescontr@shares',
    'logout' => 'userscontr@logout',
    'shares' => 'sharescontr@shares',
    'sharesomething' => 'sharescontr@sharesomething',
];

$request = isset($_GET['url']) ? rtrim($_GET['url'], '/') : '';

if(array_key_exists($request, $routes)){

    $route = explode('@', $routes[$request]);
    $controllerName = $route[0];
    $methodName = $route[1];
    $controller = new $controllerName();
    $controller->$methodName();


} else {
    echo "404 - Page not found";
}

