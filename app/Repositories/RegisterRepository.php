<?php
namespace App\Repositories;

use App\Models\Test;

class RegisterRepository implements RegisterRepositoryInterface
{
	protected $test;

	public function __construct(){
		$this->test = new Test();
	}

	public function find($param){
    if(is_integer($param)||is_long($param)){
      $result = $this->test->where('number',$param)->get();
    }else if(is_string($param)){
      $result = $this->test->where('name',$param)->get();
    }
    return $result;
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
    $this->test->save();
  }

  public function getAll($param){
    $data = $this->test->all()->take($param);
    $result = json_decode($data, true);
    return $result;
  }

  public function check($param){
    $result = gettype($param);
    if(is_integer($param)||is_long($param)){
      $r = "integer:";
    }else if(is_string($param)){
      $r = "String :";
    }
    return $r;
  }
}
