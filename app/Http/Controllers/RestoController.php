<?php

namespace App\Http\Controllers;
use App\Restaurant;
use Illuminate\Http\Request;



class RestoController extends Controller
{
       function index(){
         $resto= Restaurant::all();
         return view('list',['data'=> $resto]);
       }
}
