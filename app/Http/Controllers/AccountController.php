<?php
namespace App\Http\Controllers;

use Theme;
use App\Models\Wip8_profile;
use Input;
use App\Repositories\AccountRepositoryInterface;
use App\Repositories\ProfileRepositoryInterface;
//use Illuminate\Support\Facades\Auth;
use Session;
use Auth;

class AccountController extends ITIMController{
  protected $AccountRepository;
  protected $ProfileRepository;

  public function __construct(AccountRepositoryInterface $AccountRepository, ProfileRepositoryInterface $ProfileRepository){
    parent::__construct();
    $this->AccountRepository = $AccountRepository;
    $this->ProfileRepository = $ProfileRepository;
  }

  public function getRegister($wip_id = null){

      $user = array();
      if($wip_id){
          $user = $this->AccountRepository->findByWIPID($wip_id);
      }

      $view = array(
          'provider' => array_get($user, 'provider','email'),
          'user'    => $user
      );

      return $this->theme->scope('account.regisSimple', $view)->layout('blank')->render();
  }

  public function getMail(){
      $user = $this->AccountRepository->findByWIPID(83226);
      $this->AccountRepository->sendMailVerifyAccount($user);
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


    public function getVerify($wip_id, $verify_code){

        $user = $this->AccountRepository->verifyAccount($wip_id, $verify_code);
        if($user){
            return $this->theme->scope('account.verify_success')->layout('blank')->render();
        }
    }

    public function getNotVerify(){
        return $this->theme->scope('account.not_verify')->layout('blank')->render();
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

   public function getCondition(){
     $style = $this->theme->scope('upload.style')->content();
      $this->theme->asset()->writeContent('inline-style', $style, array());
   		return $this->theme->scope('account.condition')->layout('sample')->render();
   }

}
