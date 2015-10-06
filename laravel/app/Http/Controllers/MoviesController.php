<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MoviesController extends Controller
{
    function index()
         {
    
                   
    //$Movies = \App\Movie::where('title','=','shuga')->get();
      //$Movies = \App\movie::where('rating','>'2)->get(); //select * from movies where rating > 2
      //return $movies;
        //$movie= new \App/movie();
        //$Movie->title='Akirachix';
        //$movie->genre='awesome'
        //$movie->rating=5;
        //$movie->save();
       // $movie= \App\Movie::find(5);
        //$movie->genre="Horror";
        //$movie->save();
        //return $movie; //return \App\Movie;;all();
         //$movies=\App\Movie::all();
        //return view('movies',['movies'=>$movies]);


        $students=\App\Students::all();
        return view('students',['students'=>$students]);

   
    }
}