<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{

    public function index($id=null,$name=null)
    {
        return 'users'.' '.$id.' '.$name;

        }
}
