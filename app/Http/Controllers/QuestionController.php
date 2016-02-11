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
    return $this->theme->scope('question.question')->layout('blank')->render();
  }
}
