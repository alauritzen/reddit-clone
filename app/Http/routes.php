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

Route::get('/sayhello/{name}', function($name) {
    if ($name == "Chris") {
        return Redirect::to('/');
    }

    $data = array('name' => $name);
    return view('my-first-view', $data);
});

// Route::get('/sayhello', function(){
//     return view('my-first-view');
// });

Route::get('/uppercase/{word}', function($word) {
    return strtoupper($word);
});

Route::get('/increment/{number}', function($number) {
    return ++$number;
});


