<?php
namespace App\Repositories;

use App\Entities\Calification_lo;

/**
 *
 */
class CalificationLoRepository extends BaseRepository
{
  public function getModel()
  {
    return new Calification_lo();
  }

  public function createObject($calification_lo)
  {
    return new Calification_lo($calification_lo);
  }

  public function store($calification_lo)
  {
    return $this->createObject($calification_lo)->save();
  }

}
