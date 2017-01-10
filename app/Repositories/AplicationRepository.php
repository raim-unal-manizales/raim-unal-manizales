<?php
namespace App\Repositories;

use App\Entities\Aplication;

/**
 *
 */
class AplicationRepository extends BaseRepository
{
  public function getModel()
  {
    return new Aplication();
  }

  public function createObject($aplication)
  {
    return new Aplication($aplication);
  }
  public function store($aplication)
  {
    $aplication = $this->createObject($aplication);
    if (!empty($aplication->logo)) {
          $aplication->logo = $this->uploadFile($aplication);
    }
    return $aplication->save();
  }

  public function updateAplication($new,$id)
  {
    $aplication_ant = $this->getModel()->find($id);
    $name =$aplication_ant->logo;

    $aplication = $this->getModel()->find($id);
    $aplication-> fill($new);
    if (!empty($aplication->logo)) {
      $name= $this->uploadFile($aplication);
    }
    $aplication -> logo = $name;
    return $aplication->save();
  }

  public function listRequareInfo()
  {
    return $this->getModel()->where('rquiered_information','True')->get();
  }

  public function uploadFile($aplication)
  {
    $file = $aplication->logo;
    $name = '/raim/images/logo_aplication/logo_'.time().'.'.$file->getClientOriginalExtension();
    $path = $this->uploadPath().'/images/logo_aplication/';
    $file->move($path, $name);

    return $name;
  }
  public function uploadPath(){
      return "/var/www/raim";
  }

}
