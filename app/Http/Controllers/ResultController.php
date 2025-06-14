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
        $quiz = Result::where('user_id', auth()->user()->id)->get();
        
        $count = Question::count();

        $quizChunks = $quiz->chunk(4);

        if ($quiz->count() > 0) {
            return view('done', compact('quiz' , 'quizChunks' , 'count'));
        }
        
        $questions = Question::with('result')->get();
        $chunks = $questions->chunk(4); 
        
        return view('home', [
            'chunks' => $chunks,
        ]);
    }
    
    
    public function store(Request $request){
        
        $questions=Question::all();
        
        $options= array_values($request->option);
        
        for($i=0; $i<count($questions); $i++){
            
            $result = DB::table('results')->insert([
                'user_id' => auth()->user()->id,
                'question_id' => $questions[$i]->id,
                'answer' => $options[$i],
                'obtained_marks' => ($options[$i] == $questions[$i]->right_option) ? 1:0
            ]);
            
        }
        
        if ($result){
            DB::commit();
            return redirect()->route('login');
        }
        
        
    }

    public function redo(){

        $quiz = Result::where('user_id', auth()->user()->id)->delete();

        return redirect()->route('home');
    }
    
}
