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

     $script = $this->theme->scope('question.script')->content();
     $this->theme->asset()->writeContent('inline-script', $script, array());

     $style = $this->theme->scope('question.style')->content();
     $this->theme->asset()->writeContent('inline-style', $style, array());



    return $this->theme->scope('question.index')->layout('profile')->render();
  }
}
