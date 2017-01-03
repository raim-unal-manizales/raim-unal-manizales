<?php
namespace App\Repositories;

use App\Entities\ReferenceLearningStyle;

/**
 * Reference Learning Style Repository
 */
class RLSRepository extends BaseRepository
{
  public function getModel()
  {
    return new ReferenceLearningStyle();
  }

  public function createObject($referenceLearningStyle)
  {
    return new ReferenceLearningStyle($referenceLearningStyle);
  }

  public function store($referenceLearningStyle)
  {
    return $this->createObject($referenceLearningStyle)->save();
  }

  public function whereHigher($mayorUno,$mayorDos)
  {
    return  $this->getModel()->where('styleUno',$mayorUno)->where('styleTwo',$mayorDos)->lists('id')->toArray();
  }
  public function idDefectNull()
  {
    return  $this->getModel()->where('learningStile', 'Defect-null')->lists('id')->toArray();
  }

}
