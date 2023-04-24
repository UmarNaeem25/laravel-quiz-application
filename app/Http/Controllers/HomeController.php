<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Result;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $questions = Question::with('result')->get();
        $quiz = Result::where('user_id', auth()->user()->id)->get();

        
        if(count($quiz) > 0){
            return view('done')->with(['questions'=> $questions, 'quiz'=> $quiz]);
        }
        return view('home')->with('questions',$questions);
    }

    
}
