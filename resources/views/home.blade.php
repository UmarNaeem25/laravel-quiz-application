@extends('layouts.app')

@section('content')
    <style>
        .card {
            border: 2px solid;
            margin-bottom: 30px;
        }

        .card-header {
            background-color: whitesmoke;
        }

        .card-body {
            background-color: turquoise;
            font-weight: 400;
        }

        .card-footer {
            background-color: whitesmoke;
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
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h2 class="mx-auto text-center mb-2 mt-2">Welcome to Quiz</h2>
                        <div class="countdown text-end" style="min-width: 50px;">

                        </div>
                    </div>
                    <form class="form" action="{{ route('store') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div id="question-chunks">
                                @foreach ($chunks as $index => $questions)
                                    <div class="question-page" style="{{ $index === 0 ? '' : 'display:none;' }}"
                                        data-page="{{ $index }}">
                                        @foreach ($questions as $key => $question)
                                            <p><b>{{ $key + 1 }}</b>. {{ $question->question }}</p>
                                            <div class="row">
                                                <input type="hidden" name="option[{{ $question->id }}]" value="">
                                                <div class="col-md-6">
                                                    <label><input type="radio" name="option[{{ $question->id }}]"
                                                            value="a"> a. {{ $question->a }}</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <label><input type="radio" name="option[{{ $question->id }}]"
                                                            value="b"> b. {{ $question->b }}</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <label><input type="radio" name="option[{{ $question->id }}]"
                                                            value="c"> c. {{ $question->c }}</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <label><input type="radio" name="option[{{ $question->id }}]"
                                                            value="d"> d. {{ $question->d }}</label>
                                                </div>
                                            </div>
                                            <hr>
                                        @endforeach
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="card-footer text-center d-flex justify-content-center gap-2">
                            <button type="button" id="prevBtn" class="btn btn-secondary"
                                style="display: none">Previous</button>
                            <button type="button" id="nextBtn" class="btn btn-primary">Next</button>
                            <button type="submit" id="submitBtn" class="btn btn-success d-none">Submit</button>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
@endsection
