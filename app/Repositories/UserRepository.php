<?php
namespace App\Repositories;

use App\Entities\User;

/**
 *
 */
class UserRepository extends BaseRepository
{
  public function getModel()
  {
    return new User();
  }

  public function createObject($user)
  {
    return new User($user);
  }

  public function OrderId()
  {
    return $users = $this->getModel()->with('rol')->orderBy('id','ASC')->paginate(10);
  }

  public function store($user)
  {
    $user = $this->createObject($user);
    $temporalPassword = $user->password;
    $user->password = bcrypt($temporalPassword);
    $user->encript = encrypt($temporalPassword);
    return $this->getModel()->create($user->toArray());    
  }

  public function findRol($id)
  {
    return $users = $this->getModel()->with('rol')->findOrFail($id);
  }

  public function findNeed($id)
  {
    return $users = $this->getModel()->with('need')->findOrFail($id);
  }

  public function updateUser($userNew, $id)
  {
    $user = $this->find($id)->fill($userNew);
    $user->update();

    return $user;
  }

}
