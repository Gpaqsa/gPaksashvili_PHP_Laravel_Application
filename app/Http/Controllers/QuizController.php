<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index()
    {
        $quizzes = DB::table('quizzes')->get();
        return view('main', ['quizzes' => $quizzes]);
    }
}
