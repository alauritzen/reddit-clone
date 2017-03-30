@extends('layouts.master')

@section('content')
    <h1>Hello, <?=$name?>!</h1>

    <a href = "<?= action('HomeController@showWelcome') ?>">Return to home</a>

@stop