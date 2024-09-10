<?php

use App\Core\Router;

/* ~~~ Application Routes 🚦 ~~~  */

Router::get('/', function () {
  echo "Wellcome to PushPHP";
});

// Admin
Router::post('/admin/login', 'AdminController::login');
Router::post('/admin/logout', 'AdminController::logout');

// Pet
Router::get('/pets', 'PetController::index');
Router::get('/pets/{id}', 'PetController::show');
Router::post('/pets', 'PetController::store');
Router::put('/pets/{id}', 'PetController::update');
Router::delete('/pets/{id}', 'PetController::destroy');

// Cliente
Router::get('/clientes/{pet_id}', 'ClienteController::show');
Router::put('/clientes/{id}', 'ClienteController::update');

Router::run();
