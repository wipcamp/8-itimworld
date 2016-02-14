<?php
namespace App\Http\Controllers;

use Theme;
use App\Models\Wip8_profile;
use App\Models\Wip8_account;
use Input;
use App\Repositories\DashboardRepositoryInterface;

class DashboardController extends ITIMController{
  protected $DashboardRepository;

  public function __construct(DashboardRepositoryInterface $DashboardRepository){
    parent::__construct();
    $this->DashboardRepository = $DashboardRepository;
  }

  public function getCountall(){
    $result = $this->DashboardRepository->count();
    return $result;
  }

  public function getCountboy(){
    $result = $this->DashboardRepository->countSep('m');
    return $result;
  }

  public function getCountgirl(){
    $result = $this->DashboardRepository->countSep('f');
    return $result;
  }

  public function getList(){
    $result = $this->DashboardRepository->account();
    return $result;
  }
}
