<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Admin login routes (no authentication filter)
$routes->group('admin', function($routes)
{
    // Login routes - accessible without authentication
    $routes->get('login', 'Admin\Auth::login');
    $routes->post('login', 'Admin\Auth::authenticate');
});

// Admin routes group with authentication
$routes->group('admin', ['filter' => 'AdminAuth'], function($routes)
{
    // Admin dashboard home - redirects to /admin (main entry point)
    $routes->get('/', 'Admin\Dashboard::index');
    $routes->get('dashboard', 'Admin\Dashboard::index');

    // Expenses CRUD routes
    $routes->get('expenses', 'Admin\Expenses::index');
    $routes->get('expenses/create', 'Admin\Expenses::create');
    $routes->post('expenses/store', 'Admin\Expenses::store');
    $routes->get('expenses/edit/(:num)', 'Admin\Expenses::edit/$1');
    $routes->post('expenses/update/(:num)', 'Admin\Expenses::update/$1');
    $routes->delete('expenses/delete/(:num)', 'Admin\Expenses::delete/$1');

    // Logout route (needs to be accessible when authenticated)
    $routes->get('logout', 'Admin\Auth::logout');
});

// Default route
$routes->get('/', 'Home::index');
