<?php
namespace App\Repositories;

use App\Models\Wip8_exam_question;
use App\Models\Wip8_exam_score;
use App\Models\Wip8_init_posttest;

class PosttestRepository implements PosttestRepositoryInterface{

  protected $answer;
  protected $score;
  protected $init;

  public function __construct(){
    $this->answer = new Wip8_exam_question();
    $this->score = new Wip8_exam_score();
    $this->init = new Wip8_init_posttest();
  }

  public function getStandBy(){
    return $this->init->get();
  }

  public function getAllQuestion(){
    $mission = $this->answer->get();
    return json_decode($mission, true);
  }

  public function getScore($data,$wipid){
    $score = 0;
    for ($i=1; $i <= count($this->answer->get()) ; $i++) {
      if ($data['q-'.$i] == $this->checkAnswer($i)) {
        $score++;
      }
    }
    $this->updateScore($score,$wipid);
    return $score;
  }

  public function getAllScore(){
    $mission = $this->score->get();
    return json_decode($mission, true);
  }

  public function getPrescore($wipid){
    return $this->score->where('wip_id',$wipid)
                ->get();
  }

  public function updateScore($score,$wipid){
    $this->score->where('wip_id',$wipid)
                ->update(['posttest' => $score]);
  }

  public function checkAnswer($id){
    $answer = $this->answer->where('id', $id)->first();
    return $answer['answer'];

  }

  public function updateInit($score,$wipid){
    //
  }
  
}
