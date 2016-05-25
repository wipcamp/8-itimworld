<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wip8_checkin extends  Model{
  public $timestamps = false;

  public function Wip8_pass(){
    return $this->belongsTo('App\Models\Wip8_pass','wip_id');
  }

  public function Wip8_flavor(){
    return $this->belongsTo('App\Models\Wip8_flavor','group');
  }
}
