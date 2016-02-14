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
        $this->theme->setTitle("WIPCAMP #8");
        return $this->theme->scope('document.index')->render();
    }

    public function getABC(){
        echo "hello from ABC";
    }


    public function postShow(){
        echo "hello from post show action";
    }



}
