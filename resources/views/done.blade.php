@extends('layouts.app')

@section('content')

<style>
    .card{
        border: 2px solid;
        margin-bottom: 30px;
    }
    .card-header{
        background-color: goldenrod;
        text-align: center;
    }
    .card-body{
        background-color: darkkhaki;
        font-weight: bold;
    }
    .card-footer{
        background-color: goldenrod;
    }
  
    h1{
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        text-align: center;
    }
    .options{
        background-color:antiquewhite;
    }
    .options:hover{
        background-color: white;
    }
    input[type="radio"]:checked + label{ background-color: blue; } 

    .card-footer{
        height: 30px;
    }
    .flex-item{
        margin: auto;
        width: 85px;
        height: 35px;
    }

    #correct_answer{
        font-weight: bold;
        font-size: 15px;
    }
    
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>

</script>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-8 mx-auto">
            <br>
            <div class="card">
                <div class="card-header">
                     @php
                        $result=App\Models\Result::where('user_id', auth()->user()->id)->sum('obtained_marks')
                    @endphp
                    <p style="font-weight: bold; font-size:18px">You have scored {{$result}} marks out of {{count($questions)}}</p>
                </div>
                    <div class="card-body">
                        <p id="dop" value="dop"></p>
                        @foreach($questions as $question)
                            @php   
                                foreach ($question->result as $result) {

                                    $score = $result->obtained_marks;
                                }                          
                            @endphp

                            <p>{{$loop->iteration}}. {{$question->question}}</p>
                            <br>
                            <div class="row justify-content-center">
                                <div class="col-lg-6">
                                    <input type="radio" disabled/>
                                    <label for="option1"><button class="options">a. {{$question->a}}</button></label>
                                </div>
                                <div class="col-lg-6">
                                    <input type="radio" disabled/>
                                    <label for="option2"><button class="options">b. {{$question->b}}</button></label>
                                </div>
                                <br>
                                <br>
                                <div class="col-lg-6">
                                    <input type="radio" disabled/>
                                    <label for="option3"><button class="options">c. {{$question->c}}</button></label>
                                </div>
                                <div class="col-lg-6">
                                    <input type="radio" disabled/>
                                    <label for="option4"><button class="options">d. {{$question->d}}</button></label>
                                </div>
                            </div>
                            <br>
                            <p id="correct_answer">
                                &nbsp;&nbsp;

                                 @if($score == 1) <span>Right!</span>

                                 @else <span >Wrong!</span>

                                 @endif
                                 &nbsp;&nbsp; Correct Answer: {{$question->right_answer}}</p>
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
