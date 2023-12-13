<?php

namespace App\Http\Controllers;
use App\Models\Quiz;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index()
    {
        // $quizzes = DB::table('quizzes')->get();
        // return view('main', ['quizzes' => $quizzes]);
        $quizzes = Quiz::all();
        return view('main', ['quizzes' => $quizzes]);
    }
}
