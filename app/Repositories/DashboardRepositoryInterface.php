<?php
namespace App\Repositories;

interface DashboardRepositoryInterface{

  public function count();
  public function countSep($let);// ผช ใส่ 'm' ผญ ใส่ 'f' ชั้นปี ใส่ '4' '5' '6'
  public function account();
}
