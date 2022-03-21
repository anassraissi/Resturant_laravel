<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    function index(){
        // echo "hi Anass";
        return View('home');
    }
    function list(){
        // echo "hi Anass";
        return View('list');
    }
    
}
