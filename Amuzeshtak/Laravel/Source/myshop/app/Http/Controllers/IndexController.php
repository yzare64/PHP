<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('fronts.index');
    }

    public function product()
    {
        return view('fronts.product');
    }
}
