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

Route::get('/', 'HomeController@showWelcome');

Route::get('/sayhello/{name}', 'HomeController@sayHello');

// Route::get('/sayhello', function(){
//     return view('my-first-view');
// });

Route::get('/uppercase/{word}', function($word) {
    return strtoupper($word);
});

Route::get('/increment/{number}', function($number) {
    return ++$number;
});

Route::resource('posts', 'PostsController');

Route::get('orm-test', function() {
    $post = \App\Models\Post::find('1');
    return $post;
});


