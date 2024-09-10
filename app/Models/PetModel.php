<?php

namespace App\Models;

use App\Core\Model;

class PetModel extends Model
{
  protected $table = 'pet';

  public function listAll()
  {
    $pets = $this->all();
    return $pets;
  }

  public function findById($id)
  {
    $pet = $this->find($id);
    return $pet;
  }

  public function createPet($pet)
  {
    $this->save($pet);
  }

  public function updatePet($id, $pet)
  {
    $this->update($id, $pet);
  }

  public function deletePet($id)
  {
    $this->delete($id);
  }
}
