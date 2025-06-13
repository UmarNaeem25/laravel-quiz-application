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
        background-color: azure;
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
        background-color: whitesmoke;
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
    
    .btn-skyblue {
        background-color: #00bfff;
        color: white;
    }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script></script>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-8 mx-auto">
            <br>
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <p style="font-weight: bold; font-size:18px">You have scored {{ $quiz->sum('obtained_marks') }} marks
                        out of
                        {{ $count }}</p>
                        <form action="{{ route('redo') }}" method="POST" style="display:inline;">
                            @csrf
                            <button type="submit" class="btn btn-info">Reattempt</button>
                        </form>
                        
                        
                    </div>
                    <div class="card-body">
                        <div id="question-chunks">
                            @foreach ($quizChunks as $chunkIndex => $chunk)
                            <div class="question-page" style="{{ $chunkIndex === 0 ? '' : 'display:none;' }}"
                            data-page="{{ $chunkIndex }}">
                            @foreach ($chunk as $questionIndex => $question)
                            @php
                            $selectedOption = $question->selected_option ?? null;
                            $correctOption = $question->question->right_option;
                            @endphp
                            
                            <p><strong>{{ $loop->iteration + $chunkIndex * 4 }}.</strong>
                                {{ $question->question->question }}</p>
                                
                                <div class="row justify-content-center">
                                    @foreach (['a', 'b', 'c', 'd'] as $opt)
                                    <div class="col-lg-6 col-md-6 col-sm-12 mb-2">
                                        <label class="d-block">
                                            <input type="radio" name="question_{{ $question->question->id }}"
                                            value="{{ $opt }}" disabled
                                            {{ $selectedOption === $opt ? 'checked' : '' }}>
                                            <span
                                            class="ms-2
                                        {{ $opt === $correctOption ? 'text-success' : '' }}
                                        {{ $selectedOption === $opt && $selectedOption !== $correctOption ? 'text-danger' : '' }}">
                                            {{ $opt }}. {{ $question->question->$opt }}
                                        </span>
                                    </label>
                                </div>
                                @endforeach
                            </div>
                            
                            <p id="correct_answer" class="mb-4">
                                @if ($question->obtained_marks == 1)
                                <span style="color:green">Right!</span>
                                @else
                                <span style="color:red">Wrong!</span>
                                @endif
                                &nbsp;&nbsp; Correct Answer:
                                <strong>{{ $question->question->right_option }}</strong>
                            </p>
                            <hr>
                            @endforeach
                        </div>
                        @endforeach
                    </div>
                </div>
                
                <div class="card-footer text-center d-flex justify-content-center gap-2">
                    <button type="button" id="prevBtn" class="btn btn-secondary" disabled>Previous</button>
                    <button type="button" id="nextBtn" class="btn btn-primary">Next</button>
                </div>
            </div>
            @endsection
            