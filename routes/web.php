<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
  return response('<h1>Hello World</h1>', 200)
  ->header('Content-Type', 'text/plain')
  ->header('firstName', 'Ben');
  // return '<h1>Hello World</h1>';
});

// Load posts/post view
// Route::get('/posts/{id}', function ($id) {
//   return view('posts.post', ['id' => $id]);
// })->where('id', '[0-9]+');

Route::get('/posts/{id}', function ($id){
  dd($id);
  return response('Post ' . $id);
})->where('id', '[0-9]+'); // id is number or returns 404

Route::get('/search', function(Request $request) {
  dd($request->query->get('name'));
  return $request->name . " " . $request->age;
});