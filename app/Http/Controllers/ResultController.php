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
    public function index()
    {   
        $questions = Question::with('result')->get();
        $quiz = Result::where('user_id', auth()->user()->id)->get();

        
        if(count($quiz) > 0){
            return view('done')->with(['questions'=> $questions, 'quiz'=> $quiz]);
        }
        return view('home')->with('questions',$questions);
    }
    
    public function store(Request $request){

        DB::beginTransaction();

        $questions=Question::all();
        
    
        $options= array_values($request->option);

        
        for($i=0; $i<count($questions); $i++){
            
            $result = DB::table('results')->insert([
            'user_id' => auth()->user()->id,
            'question_id' => $questions[$i]->id,
            'obtained_marks' => ($options[$i] == $questions[$i]->right_option) ? 1:0
            ]);
    
        }

        if ($result){
            DB::commit();
            return redirect()->route('login');
        }

            
        }
        
}
