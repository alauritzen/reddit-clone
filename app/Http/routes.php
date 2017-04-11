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
    $post1 = new \App\Models\Post();
    $post1 -> title = 'Eloquent is awesome!';
    $post -> url = 'https://laravel.com/docs/5.1/eloquent';
    $post -> content = 'It is super easy to create a new post.';
    $post1 -> created_by = '1';
    $post -> save();

    $post2 = new \App\Models\Post();
    $post2 -> title = 'Eloquent is really easy!';
    $post2 -> url = 'https://laravel.com/docs/5.1/eloquent';
    $post2 -> content = 'It is super easy to create a new post';
    $post2 -> created_by = '2';
    $post2 -> save();
});


