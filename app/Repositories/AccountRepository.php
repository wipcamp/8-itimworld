<?php
namespace App\Repositories;

use App\Models\Wip8_account;
use App\Models\Wip8_allwipid;
use App\Models\Wip8_profile;
use Mail;
use Hash;

class AccountRepository implements AccountRepositoryInterface
{
	protected $account;
	protected $allwipid;
	protected $profile;

	public function __construct(){
		$this->account = new Wip8_account();
		$this->allwipid = new Wip8_allwipid();
		$profile = new Wip8_profile();
	}

	public function wipId(){
		$result = $this->allwipid->orderByRaw("RAND()")->take(1)->get();
		$wip_id = json_decode($result, true);
		$this->allwipid->where('wip_id',array_get($wip_id,'0.wip_id'))->delete();
		return array_get($wip_id,'0.wip_id');
	}

	public function dropWipId($param){
		return $this->allwipid->where('wip_id',$param)->delete();
	}

	public function find($param){
    $result = $this->account->where('wip_id',$param)
														->orWhere('email',$param)
														->get();
    return $result;
	}

	public function resetPassword($email){
		$dataJson = $this->account->where('email',$email)->get();
		$data = json_decode($dataJson,true);
		$verify_code = md5(array_get($data,'0.password'));
		$dataMail = [
	    'title' => 'WIP Camp #8 Register',
	    'content' => 'Forget password',
			'data' => $data,
			'verify' => $verify_code,
			'wip_id' => array_get($data,'0.wip_id')
	  ];
		Mail::send('emails.forget',$dataMail,function($message) use ($data){
	    $message->to(array_get($data,'0.email'),array_get($data,'0.wip_id'))
							->subject('Forget Password');
	  });
		return $verify_code.'   '.md5(array_get($data,'0.password'));
	}

	public function changeForgetPass($param){
		$dataJson = $this->account->where('wip_id',array_get($param,'wip_id'))->get();
		$data = json_decode($dataJson,true);
		if(array_get($param,'verify') === md5(array_get($data,'0.password'))){
			$this->account->where('wip_id',array_get($param,'wip_id'))
										->update(['password' => Hash::make(array_get($param,'new_password'))]);
			return 'change pass';
		}
	}

	public function createSimpleRegister($data){
		$account = new Wip8_account();
		$profile = new Wip8_profile();
		$wip_id_gen = $this->wipId();
		$verify_code = md5(Hash::make('wipcamp'));
		$account->wip_id = $wip_id_gen;
    $account->email = array_get($data,'email');
		$account->verify = $verify_code;
    $account->password = bcrypt(array_get($data,'password'));
		$profile->wip_id = $wip_id_gen;
		$profile->citizen_id = 15653141;
		$profile->name_th = array_get($data,'name_th');
		$profile->surname_th = array_get($data,'surname_th');
		$profile->email = array_get($data,'email');
		$profile->save();
    $account->save();
		$dataMail = [
	    'title' => 'WIP Camp #8 Register',
	    'content' => 'WIP Camp #8',
			'data' => $data,
			'verify' => $verify_code,
			'wip_id' => $wip_id_gen
	  ];
		Mail::send('emails.welcome',$dataMail,function($message) use ($data){
	    $message->to(array_get($data,'email'),array_get($data,'name_th'))
							->subject('Test Laravel');
	  });
		return $dataMail;
	}

	public function checkVerify($wip_id,$verify){
		$data = $this->account->where('wip_id',$wip_id)->get();
		$result = json_decode($data , true);
		if($verify === array_get($result, '0.verify')){
			$this->account->where('wip_id',$wip_id)->update(['verify'=>1]);
			return 'in';
		}
	}

	public function create($data){
		$account = new Wip8_account();
		$account->wip_id = array_get($data,'wip_id');
    $account->email = array_get($data,'email');
    $account->password = bcrypt(array_get($data,'password'));
    $account->facebook_id = array_get($data,'facebook_id');
    $account->save();
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
