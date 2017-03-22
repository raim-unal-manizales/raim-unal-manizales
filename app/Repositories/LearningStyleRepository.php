<?php
namespace App\Repositories;

use App\Entities\LearningStyle;

/**
 * Reference Learning Style Repository
 */
class LearningStyleRepository extends BaseRepository
{
  public function getModel()
  {
    return new LearningStyle();
  }

  public function createObject($learningStyle)
  {
    return new LearningStyle($learningStyle);
  }

  public function store($learningStyle)
  {
    return $this->createObject($learningStyle)->save();
  }

}
