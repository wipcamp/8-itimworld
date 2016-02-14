<?php

namespace App\Http\Controllers;

use Theme;
use App\Models\Wip8_profile;
use Input;
use App\Repositories\QuestionRepositoryInterface;

class QuestionController extends ITIMController{

  protected $QuestionRepository;

  public function __construct(QuestionRepositoryInterface $QuestionRepository){
    parent::__construct();
    $this->QuestionRepository = $QuestionRepository;
  }

  public function getIndex(){
    // $this->QuestionRepository->insertQuestion(22222);
    // return $this->theme->scope('question.question')->layout('blank')->render();

    //  $script = $this->theme->scope('question.script')->content();
    //  $this->theme->asset()->writeContent('inline-script', $script, array());
    //
    //  $style = $this->theme->scope('question.style')->content();
    //  $this->theme->asset()->writeContent('inline-style', $style, array());
    //
    //
    //
     $missions = $this->QuestionRepository->getAllQuestion($this->user->wip_id);

     $answer = array();
     foreach ($missions as $mission) {
         $question_id = array_get($mission, 'question_id', 0);
         $answer_text = array_get($mission, 'answer', '');

         if(trim($answer_text) != ""){
             $answer[$question_id] = $answer_text;
         }

     }

     $view = array(
         'answer' => $answer
     );
     return $this->theme->scope('question.index', $view)->layout('profile')->render();
  }


    public function getMission($mission = null){
        if(!$mission){
            return redirect('question');
        }

        if($mission == 1){
            $mission_view = 'question.question_1';
        }else if($mission == 2){
            $mission_view = 'question.question_2';
        }else if($mission == 3){
            $mission_view = 'question.question_3';
        }else if($mission == 4){
            $mission_view = 'question.question_4';
        }else if($mission == 5){
            $mission_view = 'question.question_5';
        }else if($mission == 6){
            $mission_view = 'question.question_6';
        }else if($mission == 7){
            $mission_view = 'question.question_7';
        }else if($mission == 8){
            $mission_view = 'question.question_8';
        }else{
            $mission_view = 'question.question_not_found';
        }


        $mission = $this->QuestionRepository->getQuestion($mission, $this->user->wip_id);

        $script = $this->theme->scope('question.script')->content();
        $this->theme->asset()->writeContent('inline-script', $script, array());

        $style = $this->theme->scope('question.style')->content();
        $this->theme->asset()->writeContent('inline-style', $style, array());

        $view = array(
            'mission' => $mission
        );
        return $this->theme->scope($mission_view, $view)->layout('profile')->render();
  }

  public function postMission(){
      //dd(Input::all());
      $wip_id = $this->user->wip_id;
      $data = Input::all();

      $param = array(
          'question_id' => array_get($data, 'mission_id'),
          'wip_id'     => $wip_id,
          'answer'     => array_get($data, 'mission_answer'),
      );

      $this->QuestionRepository->updateQuestion($param);

      return redirect('question');

  }




}
