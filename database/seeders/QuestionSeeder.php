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
        DB::table('questions')->delete();


        
       $questions = [
        ['HTML stands for?' , 'Hyper Text Markup Language' ,'Hyper Transform Markup Language', 'Hyper Transform Makeup Language' ,'None','a'],
        ['CSS stands for?' , 'Cascading Selector Sheets' ,'Cascading Style Sheets', 'Compiling Style Sheets' ,'None','b'],
        ['JS stands for?', 'Java Source','Java Statement','Java Seed', 'Java Script','d'],
        ['PHP stands for?', 'Personal Home Page', 'Pre Highlevel Processor' ,'Hypertext Pre Processor', 'None of these', 'c'],
        ['Which tag is used to create a hyperlink in HTML?', '<a>', '<link>', '<href>', '<hlink>', 'a'],
        ['Which symbol is used for comments in CSS?', '//', '#', '/* comment */', '<!-- -->', 'c'],
        ['JavaScript is a ___ language?', 'Programming', 'Scripting', 'Markup', 'Styling', 'b'],
        ['Which one is a JavaScript framework?', 'Laravel', 'React', 'Django', 'Rails', 'b'],
        ['What is the default method of form submission in HTML?', 'GET', 'POST', 'SUBMIT', 'SEND', 'a'],
        ['Which function is used to output in PHP?', 'echo', 'print()', 'console.log()', 'response()', 'a'],
        ['Which CSS property controls the text size?', 'font-size', 'text-style', 'font-weight', 'text-size', 'a'],
        ['Which of these is not a programming language?', 'Python', 'Ruby', 'Linux', 'Java', 'c'],
        ['Which HTML element is used to display an image?', '<img>', '<image>', '<src>', '<pic>', 'a'],
        ['Which operator is used to assign a value in PHP?', '=', '==', '===', '=>', 'a'],
        ['How do you create a function in JavaScript?', 'function myFunction()', 'create myFunction()', 'def myFunction()', 'fun myFunction()', 'a'],
        ['In which year was JavaScript created?', '1995', '1990', '2000', '1989', 'a'],
        ['What does SQL stand for?', 'Structured Query Language', 'Simple Query Language', 'Standard Question Language', 'None of the above', 'a'],
        ['What tag is used for unordered lists in HTML?', '<ul>', '<ol>', '<li>', '<list>', 'a'],
        ['Which attribute is used to provide a unique ID in HTML?', 'id', 'class', 'unique', 'name', 'a'],
        ['Which HTML tag is used to create a table?', '<table>', '<tab>', '<tbl>', '<tb>', 'a'],
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
