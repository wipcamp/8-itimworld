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

     $script = $this->theme->scope('upload.script')->content();
     $this->theme->asset()->writeContent('inline-script', $script, array());

     $style = $this->theme->scope('upload.style')->content();
     $this->theme->asset()->writeContent('inline-style', $style, array());



    return $this->theme->scope('upload.avatar')->layout('profile')->render();

  }
}
