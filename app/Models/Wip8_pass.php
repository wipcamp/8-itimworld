<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wip8_pass extends Model{

	 protected $primaryKey = 'wip_id';

	public function Wip8_checkin(){
		return $this->hasMany('App\Models\Wip8_checkin');
	}

	public $timestamps = false;
}
