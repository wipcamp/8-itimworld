<?php
namespace App\Http\Controllers;

use Theme;

class ITIMController extends Controller
{
    protected $theme;

    public function __construct()
    {
        //this->middleware('auth');
        $this->theme = Theme::uses('itim_world')->layout('default');
      
    }
}
