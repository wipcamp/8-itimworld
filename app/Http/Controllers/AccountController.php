<?php
namespace App\Http\Controllers;

use Theme;
use App\Models\Wip8_profile;
use Input;
use App\Repositories\AccountRepositoryInterface;
use Illuminate\Support\Facades\Auth;
use Session;
use Auth;

class AccountController extends ITIMController{
  protected $AccountRepository;

  public function __construct(AccountRepositoryInterface $AccountRepository){
    parent::__construct();
    $this->AccountRepository = $AccountRepository;
  }

  public function getRegister(){
      return $this->theme->scope('account.regisSimple')->layout('blank')->render();
  }

  public function postRegister(){
    $data = Input::all();
    $dataMail = $this->AccountRepository->createSimpleRegister($data);
    return $this->theme->scope('email.verify',$dataMail)->layout('blank')->render();
  }

  public function getForget(){
    return $this->theme->scope('email.email')->layout('blank')->render();
  }

  public function postForget(){
    $data = Input::all();
    $email = array_get($data,'email');
    $a = $this->AccountRepository->resetPassword($email);
    return $a;
  }

  public function postReset(){
    $data = Input::all();
    $r = $this->AccountRepository->changeForgetPass($data);
    return $r;
  }


    public function getVerify(){
      return $this->AccountRepository->checkVerify(87009);
    }

    public function VerifySecond($wip_id,$verify){
      $aa = $this->AccountRepository->checkVerify($wip_id,$verify);
      return $aa;
    }

  public function getFind(){
    $result = $this->AccountRepository->find(123);
    return $result;
  }

  public function getEdit(){
    return $this->theme->scope('update')->render();
  }

  public function postEdit(){
    $data = Input::all();
    $this->AccountRepository->update($data);
    $result = $this->AccountRepository->find(array_get($data,'wip_id'));
    return $result;
  }

  public function getWipid(){
    return $this->AccountRepository->wipId();
  }
  
  public function getLogout(){
        Auth::logout();
        Session::flush();
        return redirect('/');
    }
}
