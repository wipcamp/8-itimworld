<?php
namespace App\Repositories;

use App\Models\Wip8_account;
use App\Models\Wip8_allwipid;
use App\Models\Wip8_profile;
use Mail;
use Hash;
use App\User;
use App\Models\Wip8_answer;

class AccountRepository implements AccountRepositoryInterface
{
	protected $account;
	protected $allwipid;
	protected $profile;
	protected $answer;

	public function __construct(){
		$this->account = new User();
		$this->allwipid = new Wip8_allwipid();
		$this->profile = new Wip8_profile();
		$this->answer = new Wip8_answer();
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
		$profile->citizen_id = array_get($data,'citizen_id');
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
		}
		return $data;
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


	public function createAccount($data){
		$wip_id_gen = $this->wipId();
		$verify_code = md5(Hash::make($wip_id_gen));

		$User = new User();
		$User->wip_id = $wip_id_gen;
		$User->email = array_get($data,'email');
		$User->verify = $verify_code;
		$User->password = bcrypt(array_get($data,'password'));
		$User->active = 0;
		$User->status = array_get($data,'status');
		$User->provider = array_get($data,'provider');
		$User->avatar = array_get($data,'avatar');
		$User->provider_id = array_get($data,'provider_id');
		$User->save();

		$Profile = new Wip8_profile();
		$Profile->wip_id = $wip_id_gen;
		$Profile->citizen_id = array_get($data,'citizen_id');
		$Profile->name_th = array_get($data,'name_th');
		$Profile->surname_th = array_get($data,'lastname_th');
		$Profile->email = array_get($data,'email');
		$Profile->save();

		return $User;
	}

	public function updateSocialAccount($data){
		$wip_id = array_get($data, 'wip_id');

		$user = $this->account->where('wip_id', $wip_id)
				->update(array('status' => 2));

		$profile_data = array(
			'citizen_id' => array_get($data,'citizen_id'),
			'name_th'	=> array_get($data,'name_th'),
			'surname_th' => array_get($data,'lastname_th')
		);
		$profile = $this->profile->where('wip_id', $wip_id)->update($profile_data);
		return $this->account->where('wip_id', $wip_id)->first();

	}

	public function findSocialUser($data, $provider){

		$result = $this->account->where('email',array_get($data,'email',''))
					->where('provider',$provider)
					->first();
		return $result;
	}

	public function findByWIPID($wip_id){
		$result = $this->account->where('wip_id', $wip_id)
					->first();

		//return json_decode($result, true);
		return $result;
	}

	public function sendMailVerifyAccount($user){
		$dataMail = array(
	    	'title' 	=> 'WIP Camp #8 Register',
	    	'content' 	=> 'WIP Camp #8',
			'name'		=>  $user->profile->name_th.' '.$user->profile->surname_th,
			'verify' 	=> array_get($user, 'verify'),
			'wip_id' 	=> array_get($user, 'wip_id'),
			'verify_link'	=> config('app.url').'/account/verify/'.array_get($user, 'wip_id').'/'.array_get($user, 'verify')
	  	);

		dd($dataMail);

		Mail::send('emails.welcome', $dataMail, function($message) use ($user){
			$message->from('noreply@wipcamp.com', $name = 'WIPCamp #8');
			$message->to(array_get($user, 'email'), $name = null);
			$message->subject('ยืนยันการสมัครค่าย WIPCamp #8');
			$message->priority(1);
		});
	}

	public function setAvatar($param,$avatar){
		$dataJson = $this->account->where('wip_id',array_get($param,'wip_id'))->get();
		$data = json_decode($dataJson,true);
		$this->account->where('wip_id',array_get($param,'wip_id'))
										->update(['avatar' => $avatar]);
	}

	public function initialProfile($user){
		for ($i=1; $i <= 8; $i++) {
			$answer = new Wip8_answer();
			$answer->wip_id = array_get($user, 'wip_id');
			$answer->question_id = $i;
			$answer->save();
		}
	}

	public function verifyAccount($wip_id, $verify_code){
		 $data = $this->account->where('wip_id',$wip_id)
		 		->where('verify',$verify_code)->first();
	     if(!$data){
			 return false;
		 }
		 $data->active = 1;
		 $data->save();
		 
		 return $data;
	}
}
