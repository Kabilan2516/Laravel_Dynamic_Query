<?php

use App\Http\Controllers\CrudController;
use App\Http\Controllers\ViewController;
use Illuminate\Support\Facades\Route;

Route :: view('/','index');

Route::get('/insert_user',[ViewController::class,'insert_form']);//just show the form
Route::post('/insert_user',[CrudController::class,'insert']);//insert data into the database
Route::get('/edit_users',[CrudController::class,'edit']);
Route::post('/edit_users',[CrudController::class,'update']);

Route::get('/view', [CrudController::class,'select'])->name('select');

Route::get('/insert_question',[ViewController::class,'question_form']);//just show the form
Route::post('/insert_question',[CrudController::class,'insert']);//insert data into the database
Route::get('edit_question',[CrudController::class,'edit']);
Route::post('/edit_question',[CrudController::class,'update']);

Route::get('/delete',[CrudController::class,'delete']);



