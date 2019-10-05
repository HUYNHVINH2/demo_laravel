<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class sum extends Controller
{
    public function sumTwoNumber(Request  $request){
      echo ' hello';
      return   $request->all();
      return response()->json();

    }
    public function postForm(Request  $request){
      return   $request->Number; 
    }
    public function setCoockies(){
      $response = new Response();
      $response->withCookie(cookie('username', 'v', 1000));
      return   $response;
    }
    public function getCoockies(Request $request){
      
      return $request->cookie('username');
    }
      public function getJson(){
        return response()->json(['name'=>'vinh','skill'=>'js']);
      }

}
