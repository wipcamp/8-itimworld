<?php

namespace App\Http\Controllers;

use Theme;
use App\Models\Wip8_profile;
use App\Models\Wip8_school;
use App\Models\Wip8_pas;
use Input;
use Validator;
use Session;
use App\Repositories\ProfileRepositoryInterface;

class ProfileController extends ITIMController{

    protected $ProfileRepository;

    public function __construct(ProfileRepositoryInterface $ProfileRepository){
        parent::__construct();
        $this->ProfileRepository = $ProfileRepository;
    }

    public function getIndex(){
        $wip_id = $this->user->wip_id;
        $check = $this->ProfileRepository->checkPass($wip_id);
        if ($check == "PASS") {
          $confirm = $this->ProfileRepository->getPass($wip_id);
          $status = "";
          $data = array(
          'transpot'=>$confirm['transpot'],
          'slip_status'=>$confirm['slip_status'],
          'slip_note'=>$confirm['slip_note'],
          'slip_file'=>$confirm['slip_file'],
          'size'=>$confirm['size'],
          'status'=>$status,
          );
          return $this->theme->scope('profile.pass',$data)->layout('profile')->render();
        }else{
          return $this->theme->scope('profile.fail')->layout('profile')->render();
        }
    }
    public function postIndex(){
        $wip_id = $this->user->wip_id;
        $check = $this->ProfileRepository->checkPass($wip_id);
        if ($check == "PASS") {
          if (Input::hasFile('slip')){
            $file = Input::file('slip');
            $rules = array(
                'slip' => 'mimes:jpeg,png,jpg,pdf'
                );
            $validator = validator::make(Input::all(), $rules);
            if ($validator->fails()) {
                $this->ProfileRepository->uploadSlip($wip_id,3,'กรุณาอัพโหลดไฟล์ png jpg jpeg หรือ pdf',$file);
                $this->ProfileRepository->confirm_add_log($wip_id,'กรุณาอัพโหลดไฟล์ png jpg jpeg หรือ pdf');
            }else{
                $ext = $file->getClientOriginalExtension();
                $name = 'slip.'.$ext;
                $Path = 'upload/'.$wip_id;
                $file->move($Path, $name);
                $this->ProfileRepository->uploadSlip($wip_id,2,'รอการตรวจสอบเอกสาร',$name);
                $this->ProfileRepository->confirm_add_log($wip_id,'อัพโหลดไฟล์');
            }
          }
          if(Input::get('size') != "" || Input::get('transpot') != ""){
          $size = Input::get('size');
          $transpot = Input::get('transpot');
          $this->ProfileRepository->setConfirm($wip_id,$size,$transpot);
          }
           $confirm = $this->ProfileRepository->getPass($wip_id);
        $status = "";
        $data = array(
          'transpot'=>$confirm['transpot'],
          'slip_status'=>$confirm['slip_status'],
          'slip_note'=>$confirm['slip_note'],
          'slip_file'=>$confirm['slip_file'],
          'size'=>$confirm['size'],
          'status'=>$status,
          );
          return $this->theme->scope('profile.pass',$data)->layout('profile')->render();
        }else{
          return $this->theme->scope('profile.fail')->layout('profile')->render();
        }
    }

    // public function getRegister(){
    //     $wip_id = $this->user->wip_id;
    //     $result = $this->ProfileRepository->find($wip_id);
    //     $data = json_decode($result,true);
    //     $school = array_get($data,'0.school_id');
    //     $school_db = new Wip8_school();
    //     $i = $school_db->where('school_id',$school)->get();
    //     $view = array(
    //       'data' => array_get($data, '0'),
    //       'wip_id' => $wip_id,
    //       'wip_school' => array_get($i,'0')
    //     );
    //     return $this->theme->scope('profile.register',$view)->layout('profile')->render();
    // }

    // public function postFormfirst(){
    //   $data = Input::all();
    //   $result = $this->ProfileRepository->firstDivRegis($data);
    //   return redirect('profile/register');
    // }
    // public function postFormsecond(){
    //   $data = Input::all();
    //   $result = $this->ProfileRepository->secondDivRegis($data);
    //   return redirect('profile/register');
    // }

    // public function postFormthird(){
    //   $data = Input::all();
    //   $result = $this->ProfileRepository->thirdDivRegis($data);
    //   return redirect('profile/register');
    // }

    // public function postFormfour(){
    //   $data = Input::all();
    //   $result = $this->ProfileRepository->sixDivRegis($data);
    //   return redirect('profile/register');
    // }

    // public function postFormfive(){
    //   $data = Input::all();
    //   $result = $this->ProfileRepository->fourDivRegis($data);
    //   return redirect('profile/register');
    // }

    // public function postFormsix(){
    //   $data = Input::all();
    //   $result = $this->ProfileRepository->fiveDivRegis($data);
    //   return redirect('profile/register');
    // }

    // public function postRegister(){
    //   $data = Input::all();
    //   $this->ProfileRepository->create($data);
    //   return $data;
    // }



    // public function getTypeahead(){
    // 	$term = Input::get('school_id');

    // 	$results = array();

    //   $this->school = new Wip8_school();
    //   $queries = $this->school->where('school_name','LIKE','%'.$term.'%')
    //                           ->take(10)->get();
    // 	foreach ($queries as $query)
    // 	{
    // 	    $results[] = $query->school_name ;
    // 	}
    // return json_encode($results);
    // }
}
