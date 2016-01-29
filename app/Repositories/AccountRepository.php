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
    $result = $this->account->where('wip_id',$param)
														->orWhere('email',$param)
														->get();
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
		$this->account->where('wip_id', array_get($data,'wip_id'))
									->update(array('email' => array_get($data,'email'),
																 'facebook_id' => array_get($data,'facebook_id')));
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
