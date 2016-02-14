<?php

namespace App\Http\Controllers;

use App\Repositories\AccountRepositoryInterface;

class HelloController extends ITIMController
{
    protected $account;
    public function __construct(AccountRepositoryInterface $AccountRepository)
    {
        $this->account = $AccountRepository;
    }

    public function getIndex(){
        //return $this->theme->scope('home.index')->render();
        echo $this->account->find(11);
    }
}
