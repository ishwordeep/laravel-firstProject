<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        $title="About US";
        //to transfer data too view
        return view('about')->with('myTitle',$title);   //myTitle is varible for page about.blade.php
    }
}
