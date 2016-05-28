<?php

namespace App\Http\Controllers;

use Input;
use App\Repositories\PosttestRepositoryInterface;
use Theme;
use Session;
use App\Models\Wip8_pass;
use DB;

class PosttestController extends ITIMController{

  protected $PosttestRepository;
  protected $profile;

  public function __construct(PosttestRepositoryInterface $PosttestRepository){
    parent::__construct();
    $this->PosttestRepository = $PosttestRepository;
    $this->profile = new Wip8_pass();
  }

   public function getWippo(){
     $wip = $this->user->wip_id;
     $array = DB::table('wip8_passes')->where('wip8_passes.wip_id',$wip)->get(array('wip8_passes.wip_id','wip8_passes.nickname',
                       'wip8_passes.surname_th','wip8_passes.name_th'));
     $profile = json_decode(json_encode($array), true);
     $res = array_get($profile,'0');
     return $res;
  }

  public function getIndex() {
    $wip_id = $this->user->wip_id;
    $score = $this->PosttestRepository->getPrescore($wip_id)->first();
    if($score['posttest']!=0){
      $score = $this->PosttestRepository->getPrescore($wip_id)->first();

      $count = DB::table('wip8_passes')->join('users',function($join){
        $join->on('wip8_passes.wip_id','=','users.wip_id');
      })->where('wip8_passes.wip_id',$wip_id)
      ->get(array('wip8_passes.wip_id','wip8_passes.nickname','users.avatar'
                  ,'wip8_passes.nickname','wip8_passes.name_th','wip8_passes.surname_th'));
      // foreach ($count as $a) {
      //   echo $a->wip_id."\n";
      // }
      $array = json_decode(json_encode($count), true);

      $data = array(
          'pretest' => $score['pretest'],
          'posttest' => $score['posttest'],
          'wip_id' => $wip_id,
          'profile' => array_get($array,'0')
      );
      return $this->theme->scope('posttest.final',$data)->layout('default')->render();
    }else{
    $question = $this->PosttestRepository->getAllQuestion();
    $wip = $this->user->wip_id;
    $array = DB::table('wip8_passes')->where('wip8_passes.wip_id',$wip)->get(array('wip8_passes.wip_id','wip8_passes.nickname',
                      'wip8_passes.surname_th','wip8_passes.name_th'));
    $profile = json_decode(json_encode($array), true);
    $questions = array(
        'questions' => $question,
        'profile' => array_get($profile,'0')
    );
    //return $questions;
    return $this->theme->scope('posttest.index',$questions)->layout('default')->render();
  }
  }

  public function getTestquestion() {
    $missions = $this->PosttestRepository->getAllQuestion();
    return $missions;
  }

  public function getTestscore() {
    $missions = $this->PosttestRepository->getAllScore();
    return $missions;
  }

  public function getFinal(){
    return $this->theme->scope('posttest.final')->layout('default')->render();
  }

  public function getDashboard(){
    return $this->theme->scope('posttest.dashboard')->layout('default')->render();
  }

  public function getStandby(){
    echo $this->PosttestRepository->getStandBy()[0]['init'];
  }
  public function postResult(){

    $wip_id = $this->user->wip_id;
    $data = Input::all();
    $this->PosttestRepository->getScore($data,$wip_id);
    $score = $this->PosttestRepository->getPrescore($wip_id)->first();

    $count = DB::table('wip8_passes')->join('users',function($join){
      $join->on('wip8_passes.wip_id','=','users.wip_id');
    })->where('wip8_passes.wip_id',$wip_id)
    ->get(array('wip8_passes.wip_id','wip8_passes.nickname','users.avatar'
                ,'wip8_passes.nickname','wip8_passes.name_th','wip8_passes.surname_th'));
    // foreach ($count as $a) {
    //   echo $a->wip_id."\n";
    // }
    $array = json_decode(json_encode($count), true);

    $data = array(
        'pretest' => $score['pretest'],
        'posttest' => $score['posttest'],
        'wip_id' => $wip_id,
        'profile' => array_get($array,'0')
    );
    return $this->theme->scope('posttest.final',$data)->layout('default')->render();
    //return $score;
  }
}
