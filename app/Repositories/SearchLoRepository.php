<?php
namespace App\Repositories;

use App\Entities\Search_lo;

/**
 *
 */
class SearchLoRepository extends BaseRepository
{
  public function getModel()
  {
    return new Search_lo();
  }

  public function createObject($search_lo)
  {
    return new Search_lo($search_lo);
  }

  public function store($search_lo)
  {
    return $this->createObject($search_lo)->save();
  }

}
