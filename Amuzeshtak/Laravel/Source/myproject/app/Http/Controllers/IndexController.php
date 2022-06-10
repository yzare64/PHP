<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $data=[
            'name'=>'yaser',
            'id'=>1
        ];
        return view('welcome',compact('data'));
    }
}
