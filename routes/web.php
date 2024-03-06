<?php

use Illuminate\Support\Facades\Route;

Route::get('/course', function () {
    $courses = [
        (object) ['id' => 101, 'name' => 'Science', 'code' => 'bt02'],
        (object) ['id' => 102, 'name' => 'Math', 'code' => 'bt03'],
        (object) ['id' => 103, 'name' => 'English', 'code' => 'bt04'],
        (object) ['id' => 104, 'name' => 'History', 'code' => 'bt05'],
        (object) ['id' => 105, 'name' => 'Physics', 'code' => 'bt06'],
        (object) ['id' => 106, 'name' => 'Chemistry', 'code' => 'bt07'],
    ];

    return view('course.index', compact('courses'));
})->name('course.index');

Route::get('/course/form', function () {
    return view('course.form');
})->name('course.form');


Route::get('/', function () {
    return view('welcome');
});
