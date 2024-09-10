<?php

namespace App\Controllers;

use App\Core\Controller;

class PetController extends Controller
{
  protected $pet_model;

  public function __construct()
  {
    $this->pet_model = model('PetModel');
  }

  public function index()
  {
    $pets = $this->pet_model->listAll();
    return $this->response($pets);
  }

  public function show($id)
  {
    $pet = $this->pet_model->findById($id);
    if (!$pet) {
      return $this->response('Pet not found', 404);
    }
    return $this->response($pet);
  }

  public function store()
  {
    $request_body = $this->getRequestBody();
    $pet = [
      'nome' => $request_body['nome'],
      'tipo' => $request_body['tipo'],
      'raca' => $request_body['raca'],
      'dt_nascimento' => $request_body['dt_nascimento'],
      'castrado' => $request_body['castrado'],
      'dono' => $request_body['dono'],
    ];
    $this->pet_model->createPet($pet);
    return $this->response('Pet created successfully');
  }

  public function update() {}

  public function destroy($id)
  {
    $pet = $this->pet_model->findById($id);
    if (!$pet) {
      return $this->response('Pet not found', 404);
    }
    $this->pet_model->deletePet($id);
    return $this->response('Pet deleted successfully');
  }
}
