<?php
namespace App\Repositories;

use App\Entities\TypeField;

/**
 *
 */
class TypeFieldRepository extends BaseRepository
{
  public function getModel()
  {
    return new TypeField();
  }

  public function createObject($typeField)
  {
    return new TypeField($typeField);
  }

  public function store($typeField)
  {
    return $this->createObject($typeField)->save();
  }

}
