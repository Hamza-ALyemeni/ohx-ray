<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>OHX-Ray</title>
    <link rel="icon" type="image/png" href="{{asset('assets/landing-page')}}/imgs/1.svg"/>
    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css"
            integrity="sha512-8bHTC73gkZ7rZ7vpqUQThUDhqcNFyYi2xgDgPDHc+GXVGHXq+xPjynxIopALmOPqzo9JZj0k6OqqewdGO3EsrQ=="
            crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com"/>
    <link
            href="https://fonts.googleapis.com/css2?family=Cairo&display=swap"
            rel="stylesheet"
    />
    <link rel="stylesheet" href="{{asset('assets/landing-page')}}/app.css"/>
</head>
<body>
<div class="main-nav navbar-header navbar-content fixed-top">
    <div class="sidebar-logo">
        <image src="{{asset('assets/landing-page')}}/imgs/1.svg"/>
    </div>
    <div style="display: flex; flex-direction: row; align-items: center">
        <div class="navbar-account">
            <image src="{{asset('assets/landing-page')}}/imgs/image.png" style="float: right"/>
        </div>
    </div>
</div>
<div class="content">
    <div class="ui grid container stackable" >
        <div class="signup-content">
            <div class="signup-form-conent">
                <form
                        method="POST"
                        id="signup-form"
                        class="signup-form"
                        enctype="multipart/form-data"
                        style="margin: 10px"
                        action="{{url('take_survey')}}">
                    @csrf
                    @if(@$survey_employee && $survey_employee)
                    <input type="hidden" name="survey_employee_id" value="{{$survey_employee->id}}">
                    @endif
                    <input type="hidden" name="survey" value="{{$survey->id}}">
                    <input type="hidden" name="language" value="{{$language}}">
                    <div class="progress-container fixed-top">
                        <span class="progress-bar"></span>
                    </div>
                    @foreach($survey->questions->chunk(10) as $key=>$row)
                        <h3></h3>
                        <fieldset class="margined ui grid container stackable">
                            <div class="ui form eight wide column centered">
                                <span class="step-current">Step {{$key+1}} / {{(ceil(count($survey->questions)/10))}}</span>
                                <h2 class="margined">Please answer all the questions:</h2>
                                @foreach($row as $key_q=>$question)
                                <div class="margined ui grid container stackable">
                                    <label for="question1" class="margined2">{{($key_q+1)}}- {{$question->question}}</label>
                                    @if($question->type==1)
                                        @foreach($question->answers as $answer)
                                            <div class="field" style="width: 100%">
                                                <div class="ui radio checkbox">
                                                    <input
                                                    required
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
                                        <textarea required rows="2" name="question[{{$question->id}}]"></textarea>

                                    @else
                                        @foreach($question->answers as $answer)
                                            <div class="field" style="width: 100%">
                                                <div class="ui checkbox">
                                                    <input
                                                    required
                                                            id="answer{{$answer->id}}"
                                                            type="checkbox"
                                                            name="question[{{$question->id}}][{{$answer->id}}]"
                                                            tabindex="0"
                                                            value="1"
                                                    />
                                                    <label for="answer{{$answer->id}}">{{$answer->answer}}</label>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                                @endforeach
                            </div>
                        </fieldset>
                    @endforeach
                </form>
            </div>
        </div>
    </div>
</div>
<script
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
        integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
        crossorigin="anonymous"
></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
<script
        src="https://kit.fontawesome.com/60942805bb.js"
        crossorigin="anonymous"
></script>
<script src="{{asset('assets/landing-page')}}/vendor/jquery/jquery.min.js"></script>
<script src="{{asset('assets/landing-page')}}/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
<script src="{{asset('assets/landing-page')}}/vendor/jquery-validation/dist/additional-methods.min.js"></script>
<script src="{{asset('assets/landing-page')}}/vendor/jquery-steps/jquery.steps.min.js"></script>
<script src="{{asset('assets/landing-page')}}/app.js"></script>
</body>
</html>
