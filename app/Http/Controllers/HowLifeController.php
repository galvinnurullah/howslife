<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class HowLifeController extends Controller
{
    function index()
    {
        return view("howlife/index");
    }
   

}
