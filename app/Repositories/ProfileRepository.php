<?php
namespace App\Repositories;

use App\Models\Wip8_profile;
use App\Models\Wip8_school;

class ProfileRepository implements ProfileRepositoryInterface{
  protected $profile;
  protected $school;

  public function __construct(){
    $this->profile = new Wip8_profile();
    $this->school = new Wip8_school();
  }

  public function create($data){
    $this->profile->wip_id = array_get($data,'wip_id');
    $this->profile->citizen_id = array_get($data,'citizen_id');
    $this->profile->name_th = array_get($data,'name_th');
    $this->profile->surname_th = array_get($data,'surname_th');
    $this->profile->name_en = array_get($data,'name_en');
    $this->profile->surname_en = array_get($data,'surname_en');
    $this->profile->nickname = array_get($data,'nickname');
    $this->profile->dob = array_get($data,'dob');
    $this->profile->address = array_get($data,'address');
    $this->profile->tel = array_get($data,'tel');
    $this->profile->sex = array_get($data,'sex');
    $this->profile->religion = array_get($data,'religion');
    $this->profile->allergy = array_get($data,'allergy');
    $this->profile->disease = array_get($data,'disease');
    $this->profile->email = array_get($data,'email');
    $this->profile->computer_skill = array_get($data,'computer_skill');
    $this->profile->activitys = array_get($data,'activitys');
    $this->profile->facebook = array_get($data,'facebook');
    $this->profile->twitter = array_get($data,'twitter');
    $this->profile->referal = array_get($data,'referal');
    $this->profile->parent_relation = array_get($data,'parent_relation');
    $this->profile->parent_name = array_get($data,'parent_name');
    $this->profile->parent_tel = array_get($data,'parent_tel');
    $this->profile->school_id = array_get($data,'school_id');
    $this->profile->level = array_get($data,'level');
    $this->profile->program = array_get($data,'program');
    $this->profile->gpax = array_get($data,'gpax');
    $this->profile->avatar = array_get($data,'avatar');
		$this->profile->save();
  }

  public function firstDivRegis($data){
    $this->profile->where('wip_id',array_get($data,'wip_id'))
                  ->update(array('name_th' => array_get($data,'name_th'),
                          'surname_th' => array_get($data,'surname_th'),
                          'name_en' => array_get($data,'name_en'),
                          'surname_en' => array_get($data,'surname_en'),
                          'nickname' => array_get($data,'nickname'),
                          'religion' => array_get($data,'religion'),
                          'dob' => array_get($data,'dob'),
                          'tel' => array_get($data,'tel'),
                          'sex' => array_get($data,'sex'),
                          'facebook' => array_get($data,'facebook'),
                          'twitter' => array_get($data,'twitter')));
    $result = $this->profile->where('wip_id',array_get($data,'wip_id'))->get();
    return $result;
  }

  public function secondDivRegis($data){
    $this->profile->where('wip_id',array_get($data,'wip_id'))
                  ->update(array('address' => array_get($data,'address'),
                          'facebook' => array_get($data,'facebook'),
                          'twitter' => array_get($data,'twitter')));
    $result = $this->profile->where('wip_id',array_get($data,'wip_id'))->get();
    return $result;
  }

  public function thirdDivRegis($data){
    $i = $this->school->where('school_name',array_get($data,'school_id'))->get();
    $this->profile->where('wip_id',array_get($data,'wip_id'))
                  ->update(array('school_id' => array_get($data,'school_id'),
                          'level' => array_get($data,'level'),
                          'gpax' => array_get($data,'gpax'),
                          'program' => array_get($data,'program')));
    $result = $this->profile->where('wip_id',array_get($data,'wip_id'))->get();
    if($i == null||$i==''){
      $this->school->school_name = array_get($data,'school_id');
      $this->school->save();
      $in = $this->school->where('school_name',array_get($data,'school_id'))->get();
      $ij = json_decode($i,true);
      $this->profile->where('wip_id',array_get($data,'wip_id'))->update(['school_id'=> array_get($in,'school_id')]);
    }else{
      $ij = json_decode($i,true);
      $this->profile->where('wip_id',array_get($data,'wip_id'))->update(['school_id'=> array_get($ij,'school_id')]);
    }
    return $result;
  }

  public function fourDivRegis($data){
    $this->profile->where('wip_id',array_get($data,'wip_id'))
                  ->update(array('parent_name' => array_get($data,'parent_name'),
                          'parent_relation' => array_get($data,'parent_relation'),
                          'parent_tel' => array_get($data,'parent_tel')));
    $result = $this->profile->where('wip_id',array_get($data,'wip_id'))->get();
    return $result;
  }

  public function fiveDivRegis($data){
    $this->profile->where('wip_id',array_get($data,'wip_id'))
                  ->update(array('computer_skill' => array_get($data,'computer_skill'),
                          'referal' => array_get($data,'referal'),
                          'activitys' => array_get($data,'activitys')));
    $result = $this->profile->where('wip_id',array_get($data,'wip_id'))->get();
    return $result;
  }

  public function sixDivRegis($data){
    $this->profile->where('wip_id',array_get($data,'wip_id'))
                  ->update(array('allergy' => array_get($data,'allergy'),
                          'disease' => array_get($data,'disease')));
    $result = $this->profile->where('wip_id',array_get($data,'wip_id'))->get();
    return $result;
  }

  public function find($param){
    $result = $this->profile->where('wip_id',$param)
                            ->orWhere('name_th',$param)
                            ->orWhere('name_en',$param)
                            ->get();
    return $result;
  }


  public function findByWIPID($wip_id){
      $result = $this->profile->where('wip_id',$wip_id)->first();
      return $result;
  }
}
