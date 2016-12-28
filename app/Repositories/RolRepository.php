<?php
namespace App\Repositories;

use App\Entities\Rol;

/**
 *
 */
class RolRepository extends BaseRepository
{
  public function getModel()
  {
    return new Rol();
  }

  public function createObject($user)
  {
    return new User($user);
  }

  public function list()
  {
    return $rol = $this->getModel()->orderBy('name','ASC')->lists('name', 'id');
  }

  public function store($rol)
  {
    return $this->createObject($rol)->save();
  }

}
