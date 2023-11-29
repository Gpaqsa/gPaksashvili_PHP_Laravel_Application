<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;

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
//     $quizzes = [
//         ['name' => 'What does FIFA stand for in English?', 'image' => 'https://static.independent.co.uk/s3fs-public/thumbnails/image/2015/05/28/12/fifa.jpg?quality=75&width=1200&auto=webp', 'status' => "active"],
//         ['name' => 'Who is the world’s highest-paid athlete in 2021?', 'image' => 'https://www.gyuanyule.com/png/13170509-forbes-highest-paid-athletes-in-the-world-2021_cover_1500x1000.png',  'status' => "active"],
//         ['name' => 'What was the first name of Argentinian soccer star Maradona?', 'image' => 'https://cdn.britannica.com/76/124976-050-E03E50CE/Diego-Maradona-1986.jpg', 'status' => "inactive"],
//         ['name' => 'What is a group of crows called?', 'image' => 'https://onecms-res.cloudinary.com/image/upload/s--BxTOjEBO--/c_crop,h_704,w_1252,x_0,y_84/c_fill,g_auto,h_468,w_830/f_auto,q_auto/v1/mediacorp/cna/image/2023/03/01/istock-156325442_0.jpg?itok=iubCCpVK', 'status' => "active"],
//     ];
//     return view('main', ['quizzes' => $quizzes]);
// })->name('main');

Route::get('/', [QuizController::class, 'index']);


Route::post('/subscribe', function () {
    return redirect()->route('main')->with('message', "Success");
})->name('subscribe');

// routes/web.php



// Route::get('/aboutMe', function(){
//     $data = "Giorgi Pakssahvili is  22 years old, Hobby Basketball";
//     return $data;
// });

// Route::get('/fullname', function(){
//     $data = "Giorgi Paksashvili";
//     return $data;
// });

// Route::get('/years', function(){
//     $data = "22 years old";
//     return $data;
// });

// Route::get('/hob', function(){
//     $data = "Hob is basketball";
//     return $data;
// });

// Route::get('/result', function () {
//     $data = 'Result is nothing';
//     return $data;
// });

// // Route::get('/', function () {
// //     $data = 'Giorgi paksashvili 22 years old, HOb is Basketball';
// //     return $data;
// // });

// Route::put('/update', function(){
//     return response()->json(['message'=> "წარმატებით განახლდა"]);
// });

// Route::post("/add", function(){
//     return response()->json(['message'=> "წარმატებით დაემატა"]);
// });

// Route::delete('/delete', function(){
//     return response()->json(['message'=> "წარმატებით წაიშალა"]);
// });
