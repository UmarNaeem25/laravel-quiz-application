<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Result;
use Session;
use DB;
use Validator;

class ResultController extends Controller
{
    // public function index()
    // {
    //     $quiz = Result::where('user_id', auth()->user()->id)->where()->get();
        
    //     $count = Question::count();

    //     $quizChunks = $quiz->chunk(4);

    //     if ($quiz->count() > 0) {
    //         return view('done', compact('quiz' , 'quizChunks' , 'count'));
    //     }
        
    //     $questions = Question::with('result')->get();
    //     $chunks = $questions->chunk(4); 
        
    //     return view('home', [
    //         'chunks' => $chunks,
    //     ]);
    // }

    public function index()
    {
        $user = auth()->user();

        $newQuiz = $user->questions()
            ->where('has_done', 0)
            ->get();

        $oldQuiz =  $user->questions()
        ->withPivot('obtained_marks' , 'answer')
        ->where('has_done', 1)
        ->get();
        
        $marks = $oldQuiz->sum(function ($question) {
            return $question->pivot->obtained_marks;
        });

       $count = count($oldQuiz);

        if(count($oldQuiz) > 0){

            $quizChunks = $oldQuiz->chunk(4);

            return view('done', compact('quizChunks' , 'marks' , 'count'));
        }


        $chunks = $newQuiz->chunk(4);

        return view('home', compact('chunks'));
    }

    

    public function store(Request $request){

        $user = auth()->user();

        foreach($request->option as $key => $value){

            $questionId = Question::find($key);

            $isCorrect = ($value == $questionId->right_option) ? 1 : 0;
           
            $user->questions()->updateExistingPivot($questionId, [
                'answer' => $value,
                'obtained_marks' => $isCorrect,
                'has_done' => 1
            ]);
        }

        return redirect()->route('home');
    }

    public function redo(){

        $user = auth()->user();

        Result::where('user_id' , $user->id)->update(['has_done' => '0' , 'obtained_marks' =>'0' , 'answer' => '']);

        return redirect()->route('home');
    }
    
}
