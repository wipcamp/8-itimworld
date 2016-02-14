<?php
namespace App\Http\Controllers;

use Theme;
use App\Models\Wip8_account;
use Input;
use App\Repositories\AccountRepositoryInterface;

class AvatarController extends ITIMController{
  protected $AccountRepository;

  public function __construct(AccountRepositoryInterface $AccountRepository){
    parent::__construct();
    $this->AccountRepository = $AccountRepository;
  }

  public function getIndex(){
  	 $wip_id = "82037";												//wip_id
  	 $account = $this->AccountRepository->findByWIPID($wip_id);
  	 $avatar = array_get($account,'avatar');
  	 $data = array('wip_id' =>$wip_id ,'avatar' => $avatar );

     $script = $this->theme->scope('upload.script')->content();
     $this->theme->asset()->writeContent('inline-script', $script, array());

     $style = $this->theme->scope('upload.style')->content();
     $this->theme->asset()->writeContent('inline-style', $style, array());



    return $this->theme->scope('upload.avatar',$data)->layout('profile')->render();

  }

  public function postIndex(){
  	 $wip_id = "82037";												//wip_id
  	 $account = $this->AccountRepository->findByWIPID($wip_id);
  	 $avatar = array_get($account,'avatar');
  	 $data = array('wip_id' =>$wip_id ,'avatar' => $avatar );
     $script = $this->theme->scope('upload.script')->content();
     $style = $this->theme->scope('upload.style')->content();
     $this->theme->asset()->writeContent('inline-script', $script, array());
     if (Input::hasFile('avatar')) {
     	$file = Input::file('avatar');
     	 $Path = 'upload/'.$wip_id;
     	 $exten = explode(".", $file->getClientOriginalName());  
         $ext = $exten[1];             
         $file->move($Path, 'avatar.'.$ext);
     }
     $this->AccountRepository->setAvatar($account,"avatar.".$ext);
     $this->theme->asset()->writeContent('inline-style', $style, array());



    return $this->theme->scope('upload.avatar',$data)->layout('profile')->render();

  }
}
