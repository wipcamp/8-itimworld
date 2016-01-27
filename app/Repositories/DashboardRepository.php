<?php
namespace App\Repositories;

use App\Models\Wip8_profile;
use App\Models\Wip8_account;

class DashboardRepository implements DashboardRepositoryInterface{
  protected $profile;
  protected $account;

  public function __construct(){
    $this->accont = new Wip8_account();
    $this->profile = new Wip8_profile();
  }

  public function count(){
    $result = $this->profile->count();
    return $result;
  }

  public function countSep($let){
    if($let==='m'||$let==='f'){
      $result = $this->profile->where('sex',$let)->count();
    }elseif ($let==='4'||$let==='5'||$let==='6') {
      $result = $this->profile->where('sex',$let)->count();
    }
    return $result;
  }

  public function account(){
    $data = $this->profile->get();
    $result = json_decode($data,true);
    return $result;
  }

}
