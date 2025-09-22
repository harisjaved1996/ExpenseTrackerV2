<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->group('admin', function($routes)
{
    // Route for the home page
    $routes->get('home', 'Admin\HomeController::index');

    // Route for the login page
    $routes->get('login', 'Admin\LoginController::index');

    // Route for handling login POST request
    $routes->post('login', 'Admin\LoginController::login');

    // Route for logout
    $routes->get('logout', 'Admin\LoginController::logout');
});
// $routes->get('/', 'Home::index');
$routes->get('/', 'Users::create');
