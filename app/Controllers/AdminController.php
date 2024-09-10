<?php

namespace App\Controllers;

use App\Core\Controller;

class AdminController extends Controller
{
  protected $admin_model;

  public function __construct()
  {
    $this->admin_model = model('AdminModel');
  }

  public function login()
  {
    $request_body = $this->getRequestBody();

    if (!isset($request_body['email'], $request_body['senha'])) {
      return $this->response('Campos de email e senha são obrigatórios', 400);
    }

    $admin = $this->admin_model->find($request_body['email'], 'email');
    if (!($admin && $request_body['senha'] === $admin['senha'])) {
      return $this->response('Erro ao logar', 404);
    }

    return $this->response('Logado com sucesso');
  }

  public function logout()
  {
    return $this->response('Logout com sucesso, por favor, remova o token do cliente.');
  }
}
