<?php
namespace App\Repositories;

interface RegisterRepositoryInterface
{
    public function find($param);
    public function create($data);
    public function getAll($param);

}
