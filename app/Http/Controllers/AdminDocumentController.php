<?php
namespace App\Http\Controllers;

class AdminDocumentController extends ITIMController
{
    public function __construct(){
        parent::__construct();
    }


    public function getIndex(){
        echo "Hello from index action";
    }

    public function getShow(){
        echo "hello from get show action";
    }

    public function getABC(){
        echo "hello from ABC";
    }


    public function postShow(){
        echo "hello from post show action";
    }



}
