<?php
namespace App\Repositories;

use App\Entities\Option;

/**
 *
 */
class OptionFieldRepository extends BaseRepository
{
  public function getModel()
  {
    return new Option();
  }

  public function createObject($option)
  {
    return new Option($option);
  }

  public function store($option)
  {
    return $this->createObject($option)->save();
  }

}
