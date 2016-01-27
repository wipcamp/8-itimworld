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
}
