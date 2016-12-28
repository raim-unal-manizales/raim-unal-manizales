<?php
namespace App\Repositories;

use App\Entities\Personalization;

/**
 *
 */
class PersonalizationRepository extends BaseRepository
{
  public function getModel()
  {
    return new Personalization();
  }

  public function createObject($personalization)
  {
    return new Personalization($personalization);
  }

  public function store($personalization)
  {
    return $this->createObject($personalization)->save();
  }

}
