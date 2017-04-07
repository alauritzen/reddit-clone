@extends('layouts.master')

<form method = "POST" action = "{{ action('PostsController@store') }}">
{!! csrf_field() !!} 

<p>Title: <input name = "title" type = "text" value = "{{ old('title') }}"></p>
<p>Post: <input name = "content" type = "textarea" value = "{{ old('content') }}"></p>
<p>URL: <input name = "url" type = "url" value = "{{ old('url') }}"></p>

<input type = "submit">
<input type = "button" action = "{{action('PostsController@index')}}" value = "Cancel">