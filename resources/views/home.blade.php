@extends('layouts.app')

@section('content')
    <style>
        .card {
            border: 2px solid;
            margin-bottom: 30px;
        }

        .card-header {
            background-color: azure;
        }

        .card-body {
            background-color: burlywood;
            font-weight: bold;
        }

        .card-footer {
            background-color: azure;
        }

        input[type="radio"] {
            /* display: none; */
        }

        h1 {
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            text-align: center;
        }

        .options {
            background-color: antiquewhite;
        }

        .options:hover {
            background-color: white;
        }

        input[type="radio"]:checked+label {
            background-color: blue;
        }

        .card-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .flex-item {
            margin: auto;
            width: 85px;
            height: 35px;
        }
    </style>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8 mx-auto">
                <br>
                <div class="card">
                    <div class="card-header">
                        <h1>Welcome to Quiz</h1>
                    </div>
                    <form class="form" action="{{ route('store') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            @foreach ($questions as $question)
                                <p>{{ $loop->iteration }}. {{ $question->question }}</p>
                                <br>
                                <div class="row justify-content-center">
                                    <input type="radio" name="option[{{ $question->id }}]" style="display: none"
                                        value="" checked />
                                    <div class="col-lg-6">
                                        <input type="radio" name="option[{{ $question->id }}]" id="option1"
                                            value="a" />
                                        <label for="option1"><button class="options" disabled>a.
                                                {{ $question->a }}</button></label>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="radio" name="option[{{ $question->id }}]" id="option2"
                                            value="b" />
                                        <label for="option2"><button class="options" disabled>b.
                                                {{ $question->b }}</button></label>
                                    </div>
                                    <br>
                                    <br>
                                    <div class="col-lg-6">
                                        <input type="radio" name="option[{{ $question->id }}]" id="option3"
                                            value="c" />
                                        <label for="option3"><button class="options" disabled>c.
                                                {{ $question->c }}</button></label>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="radio" name="option[{{ $question->id }}]" id="option4"
                                            value="d" />
                                        <label for="option4"><button class="options" disabled>d.
                                                {{ $question->d }}</button></label>
                                    </div>
                                </div>
                                <hr>
                            @endforeach
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary flex-item">Submit</button>
                            <button type="reset" class="btn btn-warning flex-item">Reset</button>
                            <br>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
