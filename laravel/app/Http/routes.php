<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/movies','MoviesController@index');

Route::get('/about', function () {
    return view('about');
});
Route::get('/about', function () {
    return view('about');
});


//Route::get('/movies', function () {
      //$Movies = \App\Movie::where('title','=','shuga')->get();
     // $Movies = \App\Movie::where('rating','>',2)->get(); //select * from movies where rating > 2
     // return $Movies;
      // $movie= new \App\Movie();
//$movie->title='Spiderman';
   // $movie->genre='spiders';
       //$movie->rating=3;
       // $movie->save();
       //$movie= \App\Movie::find(5);
    //$movie->genre="Horror";
       //$movie->save();
        //return $movie;
 //$movies=\App\Movie::all();
        //return view('movies',['movies'=>$movies]);
   // return \App\Movies::all();

Route::controller('/students',function () {
//$students = \App\Students::where('first_name','=','Mary')->get();
      //return $students;
     // $students= new \App\Students();
//$students->first_name='Edith';
   // $students->last_name='Wangari';
     // $students->updated_at =2015-09-05;
        //$students->save();
       //return $students;
  $students= \App\Students::all();
return view('students',['students'=>$students]);
      //return \App\Students::all();
    });


   