<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('listings', [
      'heading' => 'Latest Listings',
      'listings' => [
        [
          'id' => 1,
          'title' => 'PHP job',
          'job-type' => 'Part-time',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
          Duis sit amet rhoncus sapien. Donec mollis vulputate ex eget auctor. Integer 
          fringilla in tellus non faucibus. Ut et enim id velit convallis vestibulum. 
          Aliquam nisi diam, dapibus in facilisis at, porttitor ac ipsum. Morbi consequat 
          aliquam tellus aliquet finibus.'
        ],
        [
          'id' => 2,
          'title' => 'Laravel job',
          'job-type' => 'Full-time',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
          Duis sit amet rhoncus sapien. Donec mollis vulputate ex eget auctor. Integer 
          fringilla in tellus non faucibus. Ut et enim id velit convallis vestibulum.'
        ],
        [
          'id' => 3,
          'title' => 'PHP Expert',
          'job-type' => 'Contract',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
          Duis sit amet rhoncus sapien. Donec mollis vulputate ex eget auctor. Integer 
          fringilla in tellus non faucibus. Ut et enim id velit convallis vestibulum. 
          Aliquam nisi diam, dapibus in facilisis at, porttitor ac ipsum. Morbi consequat 
          aliquam tellus aliquet finibus. Aliquam nisi diam, dapibus in facilisis at, 
          porttitor ac ipsum. Morbi consequat aliquam tellus aliquet finibus.'
        ]
      ]
    ]);
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
  // dd($request->query->get('name'));
  return $request->name . " " . $request->age;
});