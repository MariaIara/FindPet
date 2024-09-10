<?php

namespace App\Controllers;

use App\Core\Controller;

class NotFoundController extends Controller
{
  public function index()
  {
    view('not_found', [
      'title' => 'Ops! 404',
      'paragraph' => 'The page you are looking for cannot be found'
    ]);
  }
}
