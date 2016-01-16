<?php
namespace App\Http\Controllers;

use Theme;

class WIPPERController extends Controller
{
    protected $theme;

    public function __construct()
    {
        //this->middleware('auth');
        $this->theme = Theme::uses('wipper_world')->layout('index');
    }
}
