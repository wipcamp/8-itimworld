<?php
namespace App\Http\Controllers;

use Theme;
use App\Models\Test;
use Input;
use App\Repositories\RegisterRepositoryInterface;

class RegisterController extends ITIMController{

    protected $RegisterRepository;

    public function __construct(RegisterRepositoryInterface $RegisterRepository){
      parent::__construct();
      $this->RegisterRepository = $RegisterRepository;
    }

    public function getRegis(){
        return $this->theme->scope('register')->render();
    }

    public function postRegis(){
      $data = Input::all();
      //echo array_get($data, 'number');
      $this->RegisterRepository->create($data);
      return redirect()->action('RegisterController@getMember');
      // return $req->input('name');
      //echo $data['xxxx'];
      //dd($data);
    }

    public function getFind($name){
      $result = $this->RegisterRepository->find($name);
      $view = array(
        'data' => $result
      );
      return $this->theme->scope('display',$view)->render();
    }

    public function getMember(){
       //$data = Test::all();
       //$result = json_decode($data, true);
       $result = $this->RegisterRepository->getAll(10);
       $view = array(
         'data' => $result
       );
       return $this->theme->scope('display',$view)->render();
    }

    public function getCheck(){
      $result = $this->RegisterRepository->check(1111111111111);
      return $result;
    }
}
