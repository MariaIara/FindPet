<?php

use App\Core\Router;

/* ~~~ Application Routes 🚦 ~~~  */

Router::get('/', function () {
  view('example');
});
