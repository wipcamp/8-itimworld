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

    public function getRegister(){
        return $this->theme->scope('regist')->render();
    }

    public function postRegister(){
      $data = Input::all();
      $this->ProfileRepository->create($data);
      return $data;
    }
}
