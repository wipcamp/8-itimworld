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
    return $this->theme->scope('upload.avatar')->render();
  }
}
