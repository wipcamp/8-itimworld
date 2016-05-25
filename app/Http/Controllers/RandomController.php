<?php

namespace App\Http\Controllers;

use App\Models\Wip8_checkin;
use App\Models\Wip8_flavor;
use App\Models\Wip8_pass;
use Theme;
use DB;
use App\User;
use Input;
use Redirect;

class RandomController extends ITIMController{

  protected $checkin;
  protected $account;
  protected $flavor;
  protected $pass;

  public function __construct(){
    $this->checkin = new Wip8_checkin();
    $this->account = new User();
    $this->flavor = new Wip8_flavor();
    $this->pass = new Wip8_pass();
  }

  public function getIndex(){
    return view('bundle');
  }

  public function postFlavor(){
    $a = Input::all();
    $s = array_get($a,'flavor');
    $count = DB::table('wip8_checkins')->join('wip8_flavors',function($join){
      $join->on('wip8_checkins.group','=','wip8_flavors.flavor_id');
    })->join('wip8_passes',function($join){
      $join->on('wip8_passes.wip_id','=','wip8_checkins.wip_id');
    })->join('users',function($join){
      $join->on('users.wip_id','=','wip8_checkins.wip_id');
    })->whereIn('wip8_flavors.flavor_id',$s)->orderByRaw("RAND()")->limit(1)
    ->get(array('wip8_passes.wip_id','wip8_flavors.flavor_th','wip8_passes.nickname','users.avatar'
                ,'wip8_passes.nickname','wip8_passes.name_th','wip8_passes.surname_th'));
    // foreach ($count as $a) {
    //   echo $a->wip_id."\n";
    // }
    $array = json_decode(json_encode($count), true);
    return view('random')->with('s',array_get($array,'0'))->with('a',$s);
    //return $s;
  }

  // public function postFlavor(){
  //   $flavor = Input::all();
  // }
}
