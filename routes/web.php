<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pr5', function(){
    return "<h1>Welcome </h1>";
});

Route::get('/pr6',function(){
    return[
        ['id'=>1,'name'=>'john'],
        ['id'=>2,'name'=>'doe'],
    ];
});

Route::get('/pr7/{name}',function($name){
    echo $name;
});

Route::get('/pr8/{name}/{id}',function($name,$id){
    echo $name.",".$id;
});

Route::get('/pr9',function(){
    $task = ['task1','task2','task3'];
    return view('tasklist',compact('task'));
});

Route::view('/pr14','dashboard');
Route::view('/register','register');
Route::view('/login','login');


Route::get('/pro16',function(){
    $tasks = ['study','play','cook'];
    return view('task',compact('tasks'));
});

Route::get('/pro17',function(){
    $task = (object)[
        'title' => 'my first task',
        'completed' => true  //or write false
    ];

    return view('checktask',compact('task'));
});

Route::get('/pro18',function(){

    $tasks = [
        ['title'=> 'study','completed'=> true],
        ['title'=> 'code','completed'=>false],
    ];
    return view('emptytask',compact('tasks'));
});
