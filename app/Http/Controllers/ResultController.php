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
    public function store(Request $request){

        DB::beginTransaction();

        $questions=Question::all();
        
    
        $options= array_values($request->option);

        
        for($i=0; $i<count($questions); $i++){
            
            $result = DB::table('results')->insert([
            'user_id' => auth()->user()->id,
            'question_id' => $questions[$i]->id,
            'obtained_marks' => ($options[$i] == $questions[$i]->right_answer) ? 1:0
            ]);
    
        }

        if ($result){
            DB::commit();
            return redirect()->route('login');
        }

            
        }
        
}
