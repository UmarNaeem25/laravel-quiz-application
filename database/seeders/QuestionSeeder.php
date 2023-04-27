<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->truncate();
        
        $questions = [

            ['HTML stands for?' , 'Hyper Text Markup Language' ,'Hyper Transform Markup Language', 'Hyper Transform Makeup Language' ,'None','a'],
            ['CSS stands for?' , 'Cascading Selector Sheets' ,'Cascading Style Sheets', 'Compiling Style Sheets' ,'None','b'],
            ['JS stands for?', 'Java Source','Java Statement','Java Seed', 'Java Script','d'],
            ['PHP stands for?', 'Personal Home Page', 'Pre Highlevel Processor' ,'Hypertext Pre Processor', 'None of these', 'c'],
        ];

        foreach($questions as $question){
            DB::table('questions')->insert([
                'question' => $question[0],
                'a' => $question[1],
                'b' => $question[2],
                'c' => $question[3],
                'd' => $question[4],
                'right_option' => $question[5],
            ]
            );
        }

    }
}
