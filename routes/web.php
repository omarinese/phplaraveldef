<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserControllers;
use Illuminate\Support\Facades\Route;

Route::get('/', function (){
    $task1 = new stdClass();
    $task1->id =1;
    $task1->title = "Task1";
    $task1->description = "Bla bla bla";
    $task1->completed=1;
    $task2= new stdClass();
    $task2->id = 2;
    $task2->title="Task 2";
    $task2->description= "Lalalalalla";
    $task2->completed=1;

    $tasks=[
        $task1,
        $task2
    ];

    return view('tasks',[
        'tasks'=> $tasks
    ]);
});


Route::get('/tasks', function (){
    $task1 = new stdClass();
    $task1->id =1;
    $task1->title = "Task1";
    $task1->description = "Bla bla bla";
    $task1->completed=1;
    $task2= new stdClass();
    $task2->id = 2;
    $task2->title="Task 2";
    $task2->description= "Lalalalalla";
    $task2->completed=1;

    $tasks=[
        $task1,
        $task2
    ];

    return view('tasks',[
        'tasks'=> $tasks
    ]);
});


Route::get('/users', [UserControllers::class,'index']);

Route::get('/contact', [PagesController::class,'contact']);

Route::get('/about', [PagesController::class,'about']);



