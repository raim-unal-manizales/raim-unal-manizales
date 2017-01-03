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
    return new Need();
  }

  public function createObject($need)
  {
    return new Need($need);
  }

  public function store($need)
  {
    return $this->createObject($need)->save();
  }

}
