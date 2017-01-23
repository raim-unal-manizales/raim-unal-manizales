<?php

namespace App\Http\Controllers\Base;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\FieldUserRepository;
use App\Repositories\UserRepository;
use App\Repositories\FieldTableRepository;


class FieldUserBaseController extends Controller
{

  public $fieldUserRepository;
  public $userRepository;
  public $fieldTableRepository;

  public function __construct(
    UserRepository $userRepository,
    FieldUserRepository $fieldUserRepository,
    FieldTableRepository $fieldTableRepository
  )
  {
    $this->fieldUserRepository = $fieldUserRepository;
    $this->userRepository = $userRepository;
    $this->fieldTableRepository = $fieldTableRepository;
  }

  public function traslateLocaleRelation($id)
  {
    $user= $this->userRepository->find($id);
    $fieldsForLocaleRelation = $this->fieldTableRepository->getLocaleRelation();

    foreach ($fieldsForLocaleRelation as  $fieldForLocaleRelation) {

      $fieldUser = $this->fieldUserRepository->getForUserAndFielTable($user->id,$fieldForLocaleRelation->id)->first();
      $locale_relation = $fieldForLocaleRelation->locale_relation;
      $fieldUser->value = $user->$locale_relation;

      $fieldEspecific = $this->fieldUserRepository->update($fieldUser->toArray(), $fieldUser->id);

    }

  }

  public function storeFieldsUser($datos, $info, $id_user,$ajuste)
  {
    $user= $this->userRepository->find($id_user);
    foreach ($info as $key => $values) {
        $position = $values['position'];
        $value =    $datos[$position-$ajuste];
        $option = 0;

        if ($values['locale_relation']) {
          $value = $user->$value;
        }elseif ($values['select'] == 1) {
            $option = $value;
        }

        $values['value'] = $value;
        $values['id_option'] = $option;
        $values['id_user']   = $id_user;

        if ($values['defect_value'] == null) {
            if ($values['value'] != null) {
                $fieldEspecific  = $this->fieldUserRepository->store($values);
            }
        }else{
            $fieldEspecific = $this->fieldUserRepository->update($values, $values['id_defect']);
        };
    }
  }



}
