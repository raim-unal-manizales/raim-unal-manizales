<?php
namespace App\Repositories;

use App\Entities\Table;

/**
 *
 */
class TableRepository extends BaseRepository
{
  public function getModel()
  {
    return new Table();
  }

  public function createObject($table)
  {
    return new Table($table);
  }
  public function OrderId()
  {
    return $users = $this->getModel()->orderBy('id','ASC')->paginate(10);
  }
  public function store($table)
  {
    return $this->createObject($table)->save();
  }
}
