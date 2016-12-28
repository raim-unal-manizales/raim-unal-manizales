<?php
namespace App\Repositories;

use App\Entities\FieldTable;

/**
 *
 */
class FieldTableRepository extends BaseRepository
{
  public function getModel()
  {
    return new FieldTable();
  }

  public function createObject($fieldTable)
  {
    return new FieldTable($fieldTable);
  }

  public function store($fieldTable)
  {
    return $this->createObject($fieldTable)->save();
  }

}
