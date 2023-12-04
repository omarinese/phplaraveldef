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


Route::get('/users', function (){
    $user1 = new stdClass();
    $user1->id =1;
    $user1->name = "Oriol Marine Sevilla";
    $user1->email = "oriolmarine12@gmail.com";
    $user1->password="contrasenya1";
    $user2= new stdClass();
    $user2->id = 2;
    $user2->name="Jordi Vega";
    $user2->email= "jordi@gmail.com";
    $user2->password=1;

    $users=[
        $user1,
        $user2
    ];

    return view('users',[
        'users'=> $users
    ]);
});

Route::get('/contact', [PagesController::class,'contact']);

Route::get('/about', [PagesController::class,'about']);



