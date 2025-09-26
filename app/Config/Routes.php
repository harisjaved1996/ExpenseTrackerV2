<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->group('admin', function($routes)
{
    // Route for the home page
    $routes->get('home', 'Admin\Home::index');

    // Route for the login page
    $routes->get('login', 'Admin\Login::index');

    // Route for handling login POST request
    $routes->post('submit', 'Admin\Login::submit');

    // Route for logout
    $routes->get('logout', 'Admin\Login::logout');
});
// $routes->get('/', 'Home::index');
$routes->get('/', 'Users::create');
