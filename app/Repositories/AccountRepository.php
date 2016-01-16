<?php
namespace App\Repositories;

class AccountRepository implements AccountRepositoryInterface
{
	protected $test;

	public function __construct(){
		//$this->test = new Test();
	}
	public function find($id){
		//echo "1";

		//echo $this->test->count();

        return 10;
	}
}
