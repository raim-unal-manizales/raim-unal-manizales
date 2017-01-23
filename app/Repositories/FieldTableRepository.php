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
  public function listSelect($field = "name")
  {
    return $this->getModel()->where('id_type_field', 2)->orderBy($field,'ASC')->lists($field, 'id');
  }

  public function getLocaleRelation()
  {
    return $this->getModel()->where('locale_relation', '!=', 'Otro')->get();
  }

}
