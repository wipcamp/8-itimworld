<?php
namespace App\Http\Controllers;

use Theme;
use App\Models\Wip8_account;
use Input;
use App\Repositories\AvatarRepositoryInterface;

class AvatarController extends ITIMController{
  protected $AvatarRepository;

  public function __construct(AvatarRepositoryInterface $AvatarRepository){
    parent::__construct();
    $this->AvatarRepository = $AvatarRepository;
  }

  public function getIndex(){
    return $this->theme->scope('upload.avatar')->render();
  }
}
