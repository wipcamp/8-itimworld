<?php

namespace App\Http\Controllers;

use Theme;
use App\Models\Wip8_profile;
use Input;
use App\Repositories\ProfileRepositoryInterface;

class ProfileController extends ITIMController{

    protected $ProfileRepository;

    public function __construct(ProfileRepositoryInterface $ProfileRepository){
        parent::__construct();
        $this->ProfileRepository = $ProfileRepository;
    }

    public function show(){
        echo "show";
    }

    public function getIndex(){
        return $this->theme->scope('profile.profile')->layout('blank')->render();
    }

    public function getRegister(){
        $value = Session::get('user');
        $result = $this->ProfileRepository->find(array_get($value,'0.wip_id'));
        $data = json_decode($result,true);
        return $this->theme->scope('profile.register',array_get($data,'0'))->layout('blank')->render();
    }

    public function postFormfirst(){
      $data = Input::all();
      $result = $this->ProfileRepository->firstDivRegis($data);
      return $result;
    }
    public function postFormsecond(){
      $data = Input::all();
      $result = $this->ProfileRepository->secondDivRegis($data);
      return $result;
    }

    public function postFormthird(){
      $data = Input::all();
      $result = $this->ProfileRepository->thirdDivRegis($data);
      return $result;
    }

    public function postFormfour(){
      $data = Input::all();
      $result = $this->ProfileRepository->sixDivRegis($data);
      return $result;
    }

    public function postFormfive(){
      $data = Input::all();
      $result = $this->ProfileRepository->fourDivRegis($data);
      return $result;
    }

    public function postFormsix(){
      $data = Input::all();
      $result = $this->ProfileRepository->fiveDivRegis($data);
      return $result;
    }

    public function postRegister(){
      $data = Input::all();
      $this->ProfileRepository->create($data);
      return $data;
    }
}
