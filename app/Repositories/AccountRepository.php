<?php
namespace App\Repositories;

use App\Model\Test;

class AccountRepository implements AccountRepositoryInterface
{
	protected $test;

	public function __construct(){
		$this->test = new Test();
	}

	public function find($param){
		$wip_id = (long)$param;
    $result = $this->$test->get()->where('wip_id',$param);
		$result = $this->$test->get()->where('name_th',$param);
		$result = $this->$test->get()->where('name_en',$param);
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
		$this->$test->save();
	}

	public function update($data){
		$this->test->where('id', array_get($data,'number'))->update(array('name' => array_get($data,'name')));
	}

	public function get(){
		$data = $this->$test->all();
		$result = json_decode($data , true);
		return $result;
	}

	public function get($param){
		$data = $this->$test->all()->take($param);
		$result = json_decode($data , true);
		return $result;
	}
}
