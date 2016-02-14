<?php
namespace App\Repositories;

interface DocumentRepositoryInterface{
  public function create($data);
  public function get($param);
  public function update($data,$update);
}
