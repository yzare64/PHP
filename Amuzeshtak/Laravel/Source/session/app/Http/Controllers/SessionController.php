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
        return session()->get('name','not');
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

    public function forget()
    {
        session()->forget(['name','lname']); // delete session name and lname keys

    }

    //delete all session
    public function flush()
    {
        session()->flush();
        return 'session flush';
    }


}
