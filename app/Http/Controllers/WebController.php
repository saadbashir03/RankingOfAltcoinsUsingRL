<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WebController extends Controller
{
   public function index()
   {
    $response = Http::get('http://127.0.0.1:8000/');

       $jsonData = $response->json();

//    return view('result',compact($jsonData));

   return view('result',['jsonData'=> $jsonData]);

   }
}
