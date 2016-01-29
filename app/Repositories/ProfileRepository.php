<?php
namespace App\Repositories;

use App\Models\Wip8_profile;

class ProfileRepository implements ProfileRepositoryInterface{
  protected $profile;

  public function __construct(){
    $this->profile = new Wip8_profile();
  }

  public function create($data){
    $this->test->wip_id = array_get($data,'wip_id');
    $this->test->citizen_id = array_get($data,'citizen_id');
    $this->test->name_th = array_get($data,'name_th');
    $this->test->surname_th = array_get($data,'surname_th');
    $this->test->name_en = array_get($data,'name_en');
    $this->test->surname_en = array_get($data,'surname_en');
    $this->test->nickname = array_get($data,'nickname');
    $this->test->dob = array_get($data,'dob');
    $this->test->address = array_get($data,'address');
    $this->test->tel = array_get($data,'tel');
    $this->test->sex = array_get($data,'sex');
    $this->test->religion = array_get($data,'religion');
    $this->test->allergy = array_get($data,'allergy');
    $this->test->disease = array_get($data,'disease');
    $this->test->email = array_get($data,'email');
    $this->test->computer_skill = array_get($data,'computer_skill');
    $this->test->activitys = array_get($data,'activitys');
    $this->test->facebook = array_get($data,'facebook');
    $this->test->twitter = array_get($data,'twitter');
    $this->test->referal = array_get($data,'referal');
    $this->test->parent_relation = array_get($data,'parent_relation');
    $this->test->parent_name = array_get($data,'parent_name');
    $this->test->parent_tel = array_get($data,'parent_tel');
    $this->test->school_id = array_get($data,'school_id');
    $this->test->level = array_get($data,'level');
    $this->test->program = array_get($data,'program');
    $this->test->gpax = array_get($data,'gpax');
		$this->$test->save();
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
