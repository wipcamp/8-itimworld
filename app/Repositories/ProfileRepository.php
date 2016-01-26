<?php
namespace App\Repositories;

use App\Models\Profile;

class ProfileRepository implements ProfileRepositoryInterface{
  protected $profile;

  public function __construct(){
    $this->profile = new Profile();
  }

  public function create($data){
    $this->test->wip_id = array_get($data,'wip_id');
    $this->test->email = array_get($data,'email');
    $this->test->password = array_get($data,'password');
    $this->test->facebook_id = array_get($data,'facebook_id');
    $this->test->timestamp = array_get($data,'name_th');

    $this->test->save();
  }
}
