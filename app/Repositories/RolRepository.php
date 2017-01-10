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

  public function createObject($rol)
  {
    return new Rol($rol);
  }

  public function store($rol)
  {
    return $this->getModel()->create($rol);
  }

  public function listSinAdmin()
  {
    return $this->getModel()->where('id', '<>', 1)->orderBy('name','ASC')->lists('name', 'id');
  }

}
