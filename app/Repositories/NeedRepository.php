<?php
namespace App\Repositories;

use App\Entities\Need;

/**
 *
 */
class NeedRepository extends BaseRepository
{
  public function getModel()
  {
    return new Nedd();
  }

  public function createObject($need)
  {
    return new Nedd($need);
  }

  public function store($need)
  {
    return $this->createObject($need)->save();
  }

}
