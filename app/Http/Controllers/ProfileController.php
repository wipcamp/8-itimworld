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
        return $this->theme->scope('profile.register')->layout('blank')->render();
    }

    public function postRegister(){
      $data = Input::all();
      $this->ProfileRepository->create($data);
      return $data;
    }
}
