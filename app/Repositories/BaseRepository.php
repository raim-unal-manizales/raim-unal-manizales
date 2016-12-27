<?php
namespace App\Repositories;
/**
 *
 */
abstract class BaseRepository
{
  /*
  * @return \App\Entities\Entity
  */
  abstract public function getModel();

  /*
  * @return \Illiminate\Database\Eloquent\Builder
  */
  public function newQuery()
  {
    $this->getModel()->newQuery();
  }

  public function find($id)
  {
    return $this->getModel()->findOrFail($id);
  }

  public function update($New, $id)
  {
    return $this->find($id)->fill($New)->update();
  }
  
  public function destroy($id)
  {
    return $this->getModel()->find($id)->delete();
  }

}
