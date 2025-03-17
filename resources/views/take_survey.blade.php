<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-header">
                <a href="#" class="d-flex">
                    <span class="logo-sm">
                        <img src="{{ URL::asset('/assets/images/logo-light.png') }}" alt="" height="80">
                    </span>
                  
                </a>

                <a href="#" class="d-flex" >
                    <span class="logo-sm">
                       <!-- <img src="{{ URL::asset('/assets/landing-page/imgs/image.png') }}" alt="" height="80"> -->
                    </span>
                </a>
            </div>
           
        </div>
    </div>
</header>
@extends('layouts.master-without-nav2')
@section('title')
@lang('take survey')
@endsection
@section('body')

<body data-layout="horizontal" data-topbar="colored" >

    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner">
                <i class="uil-shutter-alt spin-icon"></i>
            </div>
        </div>
    </div>
    @endsection
    @section('content')
    @component('common-components.breadcrumb')
    @slot('pagetitle')  @endslot
    @slot('title')  @endslot
    @endcomponent

<div class="row" >
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Take Survey</h4>

                <div id="basic-example" style="background: linear-gradient(to bottom, white, rgba(75, 172, 75, 0.329));">
                    <form
                    method="POST"
                    id="signup-form"
                    class="signup-form"
                    enctype="multipart/form-data"
                    style="margin: 10px"
                    action="{{url('take_survey')}}">
                    @foreach($survey->questions->chunk(6) as $key=>$row)
                    <!-- Seller Details -->
                    @if($survey->type==0)
                        @if ($key==0)<h8>Direction</h8>
                        @elseif ($key==1) <h8>Agility</h8>
                        @elseif ($key==2) <h8>External Relation</h8>
                        @elseif ($key==3) <h8>Sustainability</h8>
                        @elseif ($key==4) <h8>Accountability</h8>
                        @elseif ($key==5) <h8>Leadership</h8>
                        @elseif ($key==6) <h8>Working Environment</h8>
                        @elseif ($key==7) <h8>Motivation</h8>
                        @elseif ($key==8) <h8>value</h8>
                        @elseif ($key==9) <h8>Engagement</h8>
                        @elseif ($key==10) <h8>Engagement</h8>
                        @elseif ($key==11) <h8>Suggestions</h8>
                        @else<h8></h8>@endif
                    @else  
                      <h8></h8>
                    @endif
                      <section>
                            @csrf
                            @if(@$survey_employee && $survey_employee)
                            <input type="hidden" name="survey_employee_id" value="{{$survey_employee->id}}">
                            @endif
                            <input type="hidden" name="survey" value="{{$survey->id}}">
                            <input type="hidden" name="language" value="{{$language}}">
                            <input type="hidden" id="questions" name="questions" value="{{count($survey->questions->where('type',1))}}">
                            <input type="hidden" id="question_one" name="question_one" value="{{$survey->questions[0]->id}}">
                            <div class="row">
                              @foreach($row as $key_q=>$question)
                              
                                            <div class="col-lg-12">
                                                <div class="mb-3">
                                                    <label for="basicpill-firstname-input">{{($key_q+1)}}- {{$question->question}}</label>
                                                    @if($question->type==1)
                                                    @foreach($question->answers as $answer)
                                                        <div class="field" style="width: 100%">
                                                            <div class="ui radio checkbox">
                                                                <input
                                                                        id="answer{{$answer->id}}"
                                                                        type="radio"
                                                                        name="question[{{$question->id}}]"
                                                                        tabindex="0"
                                                                        value="{{$answer->id}}"
                                                                />
                                                                <label for="answer{{$answer->id}}">{{$answer->answer}}</label>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                @elseif($question->type==2)
                                                    <textarea rows="2" class="form-control" name="question[{{$question->id}}]"></textarea>
            
                                                @else
                                                    @foreach($question->answers as $answer)
                                                        <div class="field" style="width: 100%">
                                                            <div class="ui checkbox">
                                                                <input
                                                                        id="answer{{$answer->id}}"
                                                                        type="checkbox"
                                                                        name="question[{{$question->id}}][{{$answer->id}}]"
                                                                        tabindex="0"
                                                                        value="1"
                                                                />
                                                                <label for="answer{{$answer->id}}">{{$answer->answer_ar}}</label>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                @endif
                                                </div>
                                            </div>
                                @endforeach
                            </div> 
                                                                         
                        </section>
                    @endforeach
                </form>
                </div>

            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
</div>
<!-- end row -->

@endsection
@section('script')
<!-- jquery-steps js -->
<script src="{{ URL::asset('/assets/libs/jquery-steps/jquery-steps.min.js') }}"></script>
<script src="{{ URL::asset('/assets/js/pages/form-wizard.init.js') }}"></script>
@endsection
