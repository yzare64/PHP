<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function put()
    {
        session()->put(['lname'=>'zare']);

    }

    public function get()
    {
        return session()->get('name1','not');
    }

    public function has()
    {
        if(session()->has('name1'))
        {
            return session()->get('name');
        }
        else
        {
            return  'Session Does Not Exists';
        }
    }


}
