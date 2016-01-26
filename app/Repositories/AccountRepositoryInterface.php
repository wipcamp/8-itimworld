<?php
namespace App\Repositories;

interface AccountRepositoryInterface
{
    public function find($param);
    public function create($data);
    public function get($param);
    public function update($data);
}
