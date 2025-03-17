@extends('layouts.layout')
@section('content')
    <div class="content">
        <div class="sub-content">
            <div class="reports-header">
                <h4>Report Status</h4>
                <p>Export <i class="fas fa-sign-out-alt"></i></p>
            </div>
            <div class="reports-hyperlink">
                <p>
                    Hyperlink <br class="displayed"/>
                    <br class="displayed"/>
                    <span>{{$data->link}}</span>
                </p>
                <div class="reports-hyperlink-title">
                    <p>{{$data->title}}</p>
                    <p>Created {{$data->created_at}}</p>
                </div>
            </div>
            <div class="ui stackable grid">
                <div class="three column row">
                    <div class="column">
                        <div class="card">
                            <p>Send To</p>
                            <p>{{$data->send_to}}</p>
                        </div>
                    </div>
                    <div class="column">
                        <div class="card">
                            <p>Started responses</p>
                            <p>{{$data->total_click}}</p>
                        </div>
                    </div>
                    <div class="column">
                        <div class="card">
                            <p>Completed Responses</p>
                            <p>{{$data->total_click}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="res-questions">
                <h4>Survey Responses Rate</h4>
            </div>
            <div class="survey-rate">
                @foreach($data->questions as $question)
                    @if($question->type !=2)
                        <div class="card mb-2">
                            <div class="question-responses">
                                <h4 style="width: 40%;">{{$question->question}}<br>{{$question->question_ar}}</h4>
                                @foreach($question->answers as $answer)
                                    <div class="responses" style="width: 10%;">
                                        <p>{{$answer->answer}}<br>{{$answer->answer_ar}}</p>
                                        <p>{{$answer->total_answer}}</p>
                                    </div>
                                @endforeach
                                {{--<h4>33.69%</h4>--}}
                            </div>
                        </div>
                    @endif

                @endforeach
            </div>
        </div>
    </div>
@endsection
