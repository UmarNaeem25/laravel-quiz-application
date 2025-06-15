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

    // Additional 40 questions
    ['What symbol is used to end a statement in JavaScript?', ';', ':', '.', ',', 'a'],
    ['Which HTML tag is used to create a dropdown list?', '<select>', '<dropdown>', '<list>', '<option>', 'a'],
    ['How do you comment in HTML?', '//', '#', '<!-- comment -->', '/* comment */', 'c'],
    ['Which company developed JavaScript?', 'Mozilla', 'Netscape', 'Microsoft', 'Google', 'b'],
    ['Which HTML tag is used to define a paragraph?', '<p>', '<para>', '<paragraph>', '<text>', 'a'],
    ['Which of the following is a server-side language?', 'HTML', 'CSS', 'JavaScript', 'PHP', 'd'],
    ['Which CSS property is used to change the background color?', 'background-color', 'color', 'bgcolor', 'bg-color', 'a'],
    ['How do you declare a variable in JavaScript?', 'let x', 'var x', 'const x', 'All of the above', 'd'],
    ['What does DOM stand for?', 'Document Object Model', 'Data Object Model', 'Document Oriented Model', 'Digital Object Model', 'a'],
    ['Which HTML tag is used for inserting a line break?', '<br>', '<lb>', '<break>', '<newline>', 'a'],
    ['Which tag defines the largest heading in HTML?', '<h1>', '<heading>', '<head>', '<h6>', 'a'],
    ['Which method is used to select an element by ID in JavaScript?', 'getElementById()', 'querySelector()', 'getById()', 'selectById()', 'a'],
    ['Which HTML tag is used to define a form?', '<form>', '<input>', '<textarea>', '<submit>', 'a'],
    ['What is the correct file extension for JavaScript files?', '.js', '.javascript', '.java', '.script', 'a'],
    ['Which tag is used to define a table row?', '<tr>', '<td>', '<row>', '<table-row>', 'a'],
    ['Which tag is used to define a table cell?', '<td>', '<tr>', '<th>', '<cell>', 'a'],
    ['How do you define a constant in JavaScript?', 'const', 'constant', 'define', 'static', 'a'],
    ['Which function is used to parse JSON in JavaScript?', 'JSON.parse()', 'JSON.decode()', 'parseJSON()', 'readJSON()', 'a'],
    ['Which HTML tag is used to define emphasized text?', '<em>', '<strong>', '<i>', '<b>', 'a'],
    ['Which property is used to hide an element in CSS?', 'display: none', 'visibility: hidden', 'opacity: 0', 'All of the above', 'd'],
    ['Which PHP superglobal is used to collect form data sent with POST?', '$_GET', '$_POST', '$_REQUEST', '$_FORM', 'b'],
    ['Which keyword is used to define a class in PHP?', 'class', 'define', 'object', 'struct', 'a'],
    ['Which symbol is used to start a variable in PHP?', '$', '#', '@', '&', 'a'],
    ['What does API stand for?', 'Application Programming Interface', 'Application Program Input', 'Advanced Programming Interface', 'None', 'a'],
    ['Which tag is used to make text bold in HTML?', '<b>', '<strong>', '<bold>', 'Both a and b', 'd'],
    ['Which attribute in `<img>` tag specifies the image path?', 'src', 'href', 'link', 'path', 'a'],
    ['What is the default value of position in CSS?', 'static', 'relative', 'absolute', 'fixed', 'a'],
    ['Which function is used to round a number in JavaScript?', 'Math.round()', 'round()', 'Math.floor()', 'Math.ceil()', 'a'],
    ['Which statement is used to stop a loop in PHP?', 'break', 'exit', 'stop', 'end', 'a'],
    ['What does MVC stand for?', 'Model View Controller', 'Main View Control', 'Model View Command', 'Monitor View Controller', 'a'],
    ['Which HTML tag is used to define a checkbox?', '<input type="checkbox">', '<check>', '<checkbox>', '<input checkbox>', 'a'],
    ['Which SQL command is used to fetch data?', 'SELECT', 'FETCH', 'GET', 'READ', 'a'],
    ['What is the purpose of the `<meta>` tag in HTML?', 'Metadata', 'Navigation', 'Media content', 'Menus', 'a'],
    ['What does the `===` operator mean in JavaScript?', 'Equal value and type', 'Equal value only', 'Not equal', 'Assign', 'a'],
    ['Which function is used to include one PHP file into another?', 'include()', 'require()', 'import()', 'Both a and b', 'd'],
    ['Which tag is used to define JavaScript code in HTML?', '<script>', '<js>', '<javascript>', '<code>', 'a'],
    ['Which of these is a CSS framework?', 'Bootstrap', 'jQuery', 'Vue', 'PHP', 'a'],
    ['What is the output of `typeof []` in JavaScript?', 'object', 'array', 'list', 'undefined', 'a'],
    ['Which method adds an element to the end of an array in JavaScript?', 'push()', 'pop()', 'shift()', 'unshift()', 'a'],
    ['Which HTML tag is used to play video files?', '<video>', '<media>', '<player>', '<vid>', 'a']
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
