<?php
namespace App\Repositories;

interface ProfileRepositoryInterface{
  public function create($data);
  public function get($param);
  public function update($data);
  public function find($param);
}
