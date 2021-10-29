<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class articleController extends Controller
{
  public function index(){
      $posts =[
      'mon premier post' ,
      'mon deuxiem post'
      ];
      return view('article',[
        'posts'=>$posts
      ] );
      //compact('posts')
  } 
}
