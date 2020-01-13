<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstWebPage extends Controller
{
    public function getPage1 (){
        return view('finalPage.FirstPage');
    }
    public function getPage2 (){
        return view('finalPage.SecondPage');
    }
}
