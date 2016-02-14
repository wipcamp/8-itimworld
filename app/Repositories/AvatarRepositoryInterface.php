<?php
namespace App\Repositories;

interface AvatarRepositoryInterface
{
  public function upload($data,$path);
  public function get($param);
}
