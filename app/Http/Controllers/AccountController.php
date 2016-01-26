<?php
namespace App\Http\Controllers;

use Theme;
use App\Models\Wip8_profile;
use Input;
use App\Repositories\AccountRepositoryInterface;

class AccountController extends ITIMController{
  protected $AccountRepository;

  public function __construct(AccountRepositoryInterface $AccountRepository){
    parent::__construct();
    $this->AccountRepository = $AccountRepository;
  }

  public function getRegister(){
      return $this->theme->scope('register')->render();
  }

  public function postRegister(){
    $data = Input::all();
    $this->AccountRepository->create($data);
    return $data;
  }
}
