<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
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

    public function show($id){
    
        $posts=[
            1 =>'mon titre numero 1',
            2 =>'mon titre numero 2'
        ];

        $post = $posts[$id] ?? 'pas de valeurs pas de titre';

        return view('articles',[
            'posts'=>$post
        ]);
    }
   public function contact(){
    return view('contact');
   }
}
