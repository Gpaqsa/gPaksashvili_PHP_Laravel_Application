<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/aboutMe', function(){
    $data = "Giorgi Pakssahvili is  22 years old, Hobby Basketball";
    return $data;
});

Route::get('/fullname', function(){
    $data = "Giorgi Paksashvili";
    return $data;
});

Route::get('/years', function(){
    $data = "22 years old";
    return $data;
});

Route::get('/hob', function(){
    $data = "Hob is basketball";
    return $data;
});

Route::get('/result', function () {
    $data = 'Result is nothing';
    return $data;
});

Route::get('/', function () {
    $data = 'Giorgi paksashvili 22 years old, HOb is Basketball';
    return $data;
});

Route::put('/update', function(){
    return response()->json(['message'=> "წარმატებით განახლდა"]);
});

Route::post("/add", function(){
    return response()->json(['message'=> "წარმატებით დაემატა"]);
});

Route::delete('/delete', function(){
    return response()->json(['message'=> "წარმატებით წაიშალა"]);
});