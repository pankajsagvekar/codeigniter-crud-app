<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/products', 'ProductController::index');
$routes->get('/products/(:any)', 'ProductController::find/$1'); 
//$1 to pass parameter to find function
//::any to pass string or anything in url

//alternative for product controller
$routes->group('users', static function ($routes) { 
    $routes->get('profile', 'ProductController::profile'); // users/profile
    $routes->get('orders', 'ProductController::order'); // users/orders
});

$routes->get('/students', 'StudentController::index');

//to return page witout using controller
// $routes->get('profile', function(){
//    return "i am single product"; 
// });
