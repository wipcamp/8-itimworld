<?php
namespace App\Repositories;

use App\Models\Wip8_account;

class AccountRepository implements AccountRepositoryInterface
{
	protected $account;

	public function __construct(){
		$this->account = new Wip8_account();
	}

	public function find($param){
    $result = $this->account->get()->where('wip_id',$param);
		$result = $this->account->get()->where('name_th',$param);
		$result = $this->account->get()->where('name_en',$param);
    return $result;
	}

	public function create($data){
		$this->account->wip_id = array_get($data,'wip_id');
    $this->account->email = array_get($data,'email');
    $this->account->password = bcrypt(array_get($data,'password'));
    $this->account->facebook_id = array_get($data,'facebook_id');
    $this->account->save();
	}

	public function update($data){
		$this->account->where('id', array_get($data,'number'))->update(array('name' => array_get($data,'name')));
	}

	public function getAll(){
		$data = $this->account->all();
		$result = json_decode($data , true);
		return $result;
	}

	public function getSome($param){
		$data = $this->account->all()->take($param);
		$result = json_decode($data , true);
		return $result;
	}
}
