<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //index function
    public function index(){
        return view("pages.index")->with();
    }
    //about view
    public function about(){
        return view("pages.about");
    }
}
