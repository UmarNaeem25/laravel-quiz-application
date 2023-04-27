@extends('layouts.app')

@section('content')
    <style>
        .card {
            border: 2px solid;
            margin-bottom: 30px;
        }

        .card-header {
            background-color: lightseagreen;
        }

        .card-body {
            background-color:azure;
            font-weight: bold;
        }

        .card-footer {
            background-color: lightseagreen;
        }

        h1 {
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            text-align: center;
        }

        .options {
            background-color: whitesmoke;
        }

        .options:hover {
            background-color: white;
        }

        input[type="radio"]:checked+label {
            background-color: blue;
        }

        .card-footer {
            height: 30px;
        }

        .flex-item {
            margin: auto;
            width: 85px;
            height: 35px;
        }

        #correct_answer {
            font-weight: bold;
            font-size: 15px;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script></script>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8 mx-auto">
                <br>
                <div class="card">
                    <div class="card-header">
                        <p style="font-weight: bold; font-size:18px">You have scored {{ $quiz->sum('obtained_marks')}} marks out of
                            {{ count($questions) }}</p>
                    </div>
                    <div class="card-body">
                        @foreach ($quiz as $question)
                          

                            <p>{{ $loop->iteration }}. {{ $question->question->question }}</p>
                            <br>
                            <div class="row justify-content-center">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <input type="radio" disabled />
                                    <label for="option1"><button class="options">a. {{ $question->question->a }}</button></label>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <input type="radio" disabled />
                                    <label for="option2"><button class="options">b. {{ $question->question->b }}</button></label>
                                </div>
                                <br>
                                <br>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <input type="radio" disabled />
                                    <label for="option3"><button class="options">c. {{ $question->question->c }}</button></label>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <input type="radio" disabled />
                                    <label for="option4"><button class="options">d. {{ $question->question->d }}</button></label>
                                </div>
                            </div>
                            <br>
                            <p id="correct_answer">
                                &nbsp;&nbsp;

                                @if ($question->obtained_marks == 1)
                                    <span style="color:green">Right!</span>
                                @else
                                    <span style="color: red">Wrong!</span>
                                @endif
                                &nbsp;&nbsp; Correct Answer: {{ $question->question->right_option }}
                            </p>
                            <hr>
                        @endforeach
                    </div>
                    <div class="card-footer">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
