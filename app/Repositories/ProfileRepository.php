<?php
namespace App\Repositories;

use App\Models\Wip8_profile;

class ProfileRepository implements ProfileRepositoryInterface{
  protected $profile;

  public function __construct(){
    $this->profile = new Wip8_profile();
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
		$this->profile->save();
  }

  public function firstDivRegis($data){
    $this->profile->name_th = array_get($data,'name_th');
    $this->profile->surname_th = array_get($data,'surname_th');
    $this->profile->name_en = array_get($data,'name_en');
    $this->profile->surname_en = array_get($data,'surname_en');
    $this->profile->nickname = array_get($data,'nickname');
    $this->profile->religion = array_get($data,'religion');
    $this->profile->dob = array_get($data,'dob');
    $this->profile->sex = array_get($data,'sex');
    $this->profile->email = array_get($data,'email');
    $this->profile->tel = array_get($data,'tel');
    $this->profile->allergy = array_get($data,'allergy');
    $this->profile->disease = array_get($data,'disease');
    $this->profile->save();
  }

  public function secondDivRegis($data){
    $this->profile->address = array_get($data,'address');
    $this->profile->facebook = array_get($data,'facebook');
    $this->profile->twitter = array_get($data,'twitter');
    $this->profile->save();
  }

  public function thirdDivRegis($data){
    $this->profile->school_id = array_get($data,'school_id');
    $this->profile->level = array_get($data,'level');
    $this->profile->program = array_get($data,'program');
    $this->profile->gpax = array_get($data,'gpax');
    $this->profile->save();
  }

  public function fourthDivRegis($data){
    $this->profile->parent_name = array_get($data,'parent_name');
    $this->profile->parent_relation = array_get($data,'parent_relation');
    $this->profile->parent_tel = array_get($data,'parent_tel');
    $this->profile->save();
  }

  public function lastDivRegis($data){
    $this->profile->computer_skill = array_get($data,'computer_skill');
    $this->profile->referal = array_get($data,'referal');
    $this->profile->activitys = array_get($data,'activitys');
    $this->profile->save();
  }

  public function edit($data){
    $this->profile->where('wip_id',array_get($data,'wip_id'))
                  ->update(array('citizen_id' => array_get($data,'citizen_id'),
                          'name_th' => array_get($data,'name_th'),
                          'surname_th' => array_get($data,'surname_th'),
                          'name_en' => array_get($data,'name_en'),
                          'surname_en' => array_get($data,'surname_en'),
                          'nickname' => array_get($data,'nickname'),
                          'dob' => array_get($data,'dob'),
                          'address' => array_get($data,'address'),
                          'tel' => array_get($data,'tel'),
                          'sex' => array_get($data,'sex'),
                          'religion' => array_get($data,'religion'),
                          'allergy' => array_get($data,'allergy'),
                          'disease' => array_get($data,'disease'),
                          'email' => array_get($data,'email'),
                          'computer_skill' => array_get($data,'computer_skill'),
                          'activitys' => array_get($data,'activitys'),
                          'facebook' => array_get($data,'facebook'),
                          'twitter' => array_get($data,'twitter'),
                          'referal' => array_get($data,'referal'),
                          'parent_relation' => array_get($data,'parent_relation'),
                          'parent_name' => array_get($data,'parent_name'),
                          'parent_tel' => array_get($data,'parent_tel'),
                          'school_id' => array_get($data,'school_id'),
                          'level' => array_get($data,'level'),
                          'program' => array_get($data,'program'),
                          'gpax' => array_get($data,'gpax')));
    $result = $this->profile->where('wip_id',array_get($data,'wip_id'))->get();
    return $result;
  }

  public function find($param){
    $result = $this->account->where('wip_id',$param)
                            ->orWhere('name_th',$param)
                            ->orWhere('name_en',$param)
                            ->get();
    return $result;
  }
}
