<?php
namespace App\Repositories;

  use App\Models\Wip8_answer;

class QuestionRepository implements QuestionRepositoryInterface{

  protected $answer;

  public function __construct(){
    $this->answer = new Wip8_answer();
  }

  public function insertQuestion($data){
    $this->answer->wip_id = $data;//array_get($data,'wip_id');
    $this->answer->save();
    return $data;
  }

  public function getQuestion($mission_id, $wip_id){

    $mission = $this->answer->where('wip_id', $wip_id)
                   ->where('question_id', $mission_id)->first();
    return json_decode($mission, true);

  }

  public function updateQuestion($data){
    $this->answer->where('wip_id',array_get($data,'wip_id'))
                 ->update(array('question_id' => array_get($data,'question_id'),
                          'answer' => array_get($data,'answer')));

  }

}
