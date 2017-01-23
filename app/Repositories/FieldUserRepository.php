<?php
namespace App\Repositories;

use App\Entities\FieldUser;

/**
 *
 */
class FieldUserRepository extends BaseRepository
{
  public function getModel()
  {
    return new FieldUser();
  }

  public function createObject($fieldUser)
  {
    return new FieldUser($fieldUser);
  }

  public function store($fieldUser)
  {
    return $this->createObject($fieldUser)->save();
  }

  public function updateFieldUser($fieldUserNew, $id)
  {
    $fielduser = $this->find($id)->fill($fieldUserNew);
    if ($fieldUserNew['info'] == "1") {
        $fielduser->id_option = $fielduser->value;
    }
    return $fielduser->save();
  }
  public function getForUserAndFielTable($user_id,$fieldTable_id)
  {
    return $this->getModel()->where('id_user', $user_id)->where('id_field_table', $fieldTable_id)->get();
  }

}
