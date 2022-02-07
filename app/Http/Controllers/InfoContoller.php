<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoContoller extends Controller
{
    public function index(){
        $name = 'Yazan';
        $age = 25;
        $job = 'full stack developer';
        $hobbies = 'reading';
        return view('welcome' , compact('name' , 'age' ,'job','hobbies'));
    }
 
}