<?php
namespace App\Repositories;

interface ProfileRepositoryInterface{
  public function create($data);
  public function find($param); //หาได้จาก wip id , ชื่อ(ไทย) , ชื่อ(อังกฤษ)
}
