<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wip8_flavor extends  Model{
  public $timestamps = false;

  protected $primaryKey = 'flavor_id';

  public function Wip8_checkin(){
    return $this->hasMany('App\Models\Wip8_checkin');
  }
}
