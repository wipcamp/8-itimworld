<?php
namespace App\Repositories;

use App\Models\Wip8_account;
use Input;
use App\User;

class AvatarRepository implements AvatarRepositoryInterface{
  protected $avatar;

  public function __construct(){
    $this->avatar = new User();
  }

  public function upload($data,$path){
  	    $this->avatar->where('wip_id', array_get($data,'wip_id'))
                                    ->update('avatar',$path);
  }
  
  public function get($param){
  	return true;
  }

}
