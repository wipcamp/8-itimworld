<?php

namespace App\Http\Controllers;

use Theme;
use App\Models\Wip8_profile;
use App\Models\Wip8_school;
use Input;
use Session;
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
        return $this->theme->scope('profile.index')->layout('profile')->render();
    }

    public function getRegister(){
        $wip_id = $this->user->wip_id;
        $result = $this->ProfileRepository->find($wip_id);
        $data = json_decode($result,true);
        $view = array(
          'data' => $data,
          'wip_id' => $wip_id
        );
        return $this->theme->scope('profile.register',$view)->layout('profile')->render();
    }

    public function postFormfirst(){
      $data = Input::all();
      $result = $this->ProfileRepository->firstDivRegis($data);
      return redirect('profile/register');
    }
    public function postFormsecond(){
      $data = Input::all();
      $result = $this->ProfileRepository->secondDivRegis($data);
      return redirect('profile/register');
    }

    public function postFormthird(){
      $data = Input::all();
      $result = $this->ProfileRepository->thirdDivRegis($data);
      return redirect('profile/register');
    }

    public function postFormfour(){
      $data = Input::all();
      $result = $this->ProfileRepository->sixDivRegis($data);
      return redirect('profile/register');
    }

    public function postFormfive(){
      $data = Input::all();
      $result = $this->ProfileRepository->fourDivRegis($data);
      return redirect('profile/register');
    }

    public function postFormsix(){
      $data = Input::all();
      $result = $this->ProfileRepository->fiveDivRegis($data);
      return redirect('profile/register');
    }

    public function postRegister(){
      $data = Input::all();
      $this->ProfileRepository->create($data);
      return $data;
    }



    public function getTypeahead(){
    	$term = Input::get('school_id');

    	$results = array();

      $this->school = new Wip8_school();
      $queries = $this->school->where('school_name','LIKE','%'.$term.'%')
                              ->take(10)->get();
    	foreach ($queries as $query)
    	{
    	    $results[] = $query->school_name ;
    	}
    return json_encode($results);
    }
}
