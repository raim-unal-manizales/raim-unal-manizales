<?php
namespace App\Repositories;

use App\Entities\Visited_lo;

/**
 *
 */
class VisitedLoRepository extends BaseRepository
{
  public function getModel()
  {
    return new Visited_lo();
  }

  public function createObject($visited_lo)
  {
    return new Visited_lo($visited_lo);
  }

  public function store($visited_lo)
  {
    return $this->createObject($visited_lo)->save();
  }

}
