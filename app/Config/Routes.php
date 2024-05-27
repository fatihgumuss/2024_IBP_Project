<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login', 'Auth::login');
$routes->post('/auth', 'Auth::auth');
$routes->get('/logout', 'Auth::logout');

$routes->get('/admin/dashboard', 'AdminDashboard::index', ['filter' => 'auth']);
$routes->get('/users/dashboard', 'UserDashboard::index', ['filter' => 'auth']);

$routes->get('/users/create', 'Users::create');
$routes->post('/users/store', 'Users::store');
$routes->get('/users/edit/(:num)', 'Users::edit/$1');
$routes->post('/users/update', 'Users::update');
$routes->get('/users/delete/(:num)', 'Users::delete/$1');;

$routes->get('/books', 'Books::index');
$routes->get('/books/create', 'Books::create');
$routes->post('/books/store', 'Books::store');
$routes->get('/books/delete/(:num)', 'Books::delete/$1');

$routes->get('/announcements/create', 'Announcements::create');
$routes->post('/announcements/store', 'Announcements::store');
$routes->get('/announcements/edit/(:num)', 'Announcements::edit/$1');
$routes->post('/announcements/update/(:num)', 'Announcements::update/$1');
$routes->get('/announcements/delete/(:num)', 'Announcements::delete/$1');
$routes->get('/announcements/edit/(:num)', 'Announcements::edit/$1');
$routes->post('/announcements/update/(:num)', 'Announcements::update/$1');
$routes->get('/announcements/delete/(:num)', 'Announcements::delete/$1');

$routes->get('/messages', 'Messages::index');
$routes->get('/messages/create', 'Messages::create');
$routes->post('/messages/store', 'Messages::store');
$routes->get('/messages/read/(:num)', 'Messages::read/$1');

$routes->get('/user/books', 'UserBooks::index', ['filter' => 'auth']);
$routes->get('/user/messages', 'UserMessages::index', ['filter' => 'auth']);
$routes->post('/user/messages/store', 'UserMessages::store', ['filter' => 'auth']);
$routes->get('/user/announcements', 'UserAnnouncements::index', ['filter' => 'auth']);

