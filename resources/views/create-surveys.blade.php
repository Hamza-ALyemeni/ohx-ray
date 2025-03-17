@extends('layouts.master-layouts')
@section('title')
@lang('Creat surveys')
@endsection
@section('body')

<body data-layout="horizontal" data-topbar="colored">

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
    @slot('pagetitle') Horizontal @endslot
    @slot('title') Creat surveys @endslot
    @endcomponent
    <div class="row">
    <div class="col-lg-12">
        <div id="addproduct-accordion" class="custom-accordion">
            <div class="card">
                    <div class="twelve wide column">
                        <div class="form-header">
                            <div class="hr-style-form"></div>
                        </div>
                        <div class="card-body">
                            <!-- outer repeater -->
                            <form class="ui form repeater" id="survey-form" method="post" action="{{url('survey')}}">
                                @csrf
                                <div class="row">
                                <div class="row mb-4">
                                    <div class="col ms-auto">
                                        <label class="form-label">Survey Title</label>
                                        <input  class="form-control" placeholder="Type survey title here..." type="text" name="title" value="{{old('title')}}"/>
                                     </div>
                                </div> <!-- end col -->

                                    <div class="row mb-4">
                                    <div class="col ms-auto">
                                        <div class="d-flex flex-reverse flex-wrap gap-2">
                                          <button type="button" class="btn btn-primary btn-sm waves-effect waves-light" id="add-question">Add another question</button>
                                        </div>
                                    </div> <!-- end col -->
                                </div> <!-- end row-->
                                </div>

                                @if(Auth::user()->role == 0)

                                @else
                                    <input  class="form-control" type="hidden" name="company_id[]" value="{{Auth::user()->company->id}}">
                                @endif




                                <div  id="question-location" data-repeater-list="outer-list">
                                    <div class="question-div" data-question="0" style="border: 2px solid #eee;border-radius: 10px;padding: 10px;">
                                        <div class="field">
                                            <label class="form-label">Question</label>
                                            <input  class="form-control" placeholder="Type Question here" required type="text"
                                                   name="questions[0]" value="{{old('questions.0')}}"/>
                                        </div>
                                        @if($errors->has('questions.*'))
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('questions.*') }}</strong>
                                        </span>
                                        @endif
                                        <div class="field">
                                            <label class="form-label">Question Arabic</label>
                                            <input  class="form-control" placeholder="Type Question here" required type="text"
                                                   name="questions_ar[0]" value="{{old('questions_ar.0')}}"/>
                                        </div>
                                        @if($errors->has('questions_ar.*'))
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('questions_ar.*') }}</strong>
                                        </span>
                                        @endif

                                        <div class="inner-repeater">
                                            <div>
                                                <div id="answer-location-0">
                                                    <p>Answer Type</p>

                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                                <input  class="form-check-input" class="add-survey-options q_item" type="radio"name="type[0]" tabindex="0" checked value="1"/>
                                                                <label class="form-label">Multi Choices</label>

                                                                <input  class="form-check-input q_item"  type="radio" name="type[0]" tabindex="0" value="2"/>
                                                                <label class="form-label">text</label>

                                                                <input  class="form-check-input q_item" type="radio" name="type[0]" tabindex="0" value="3"/>
                                                                <label class="form-label">Checkbox</label>
                                                        </div>
                                                        <div class="col-lg-4">

                                                        </div>
                                                        <div class="col-lg-4">

                                                        </div>

                                                    </div>

                                                    <button class="add-answer btn btn-success waves-effect waves-light"style="margin: 5px 30px;" type="button" id="add-answer-0">Add New Answers</button>

                                                    <div  class="row answer-div" >

                                                        <div class="col-lg-4">
                                                            <label class="form-label">Answer</label>
                                                            <input  class="form-control" placeholder="place the answer" name="answers[0][]" required/>
                                                         </div>

                                                         <div class="col-lg-4">
                                                            <label class="form-label">Answer Arabic</label>
                                                            <input  class="form-control" placeholder="place the answer" name="answers_ar[0][]" required/>
                                                        </div>

                                                        <div class="col-lg-4">
                                                            <div class="action-icon field two wide delete-answer">
                                                                <i class="fas fa-times"></i>
                                                            </div>
                                                        </div>

                                                    </div>


                                                    </div>
                                                    @error('answers')
                                                    <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input  class="form-control" type="hidden" name="status" value="0">
                            </form>
                        </div>
                            <div class="row mb-4">
                                <div class="col ms-auto">
                                    <div class="d-flex flex-reverse flex-wrap gap-2">
                                    <button type="submit" data-status="1" class="btn btn-success waves-effect waves-light submit">Save and Publish</button>
                                    <button type="submit" data-status="0" class="btn btn-primary waves-effect waves-light submit">Save Draft</button>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row-->
                    </div>





                </div>
            </div>
        </div>
    </div>
<!-- end row -->
@endsection

@section('script')

    <script>

        $(document).delegate('.submit', 'click', function () {
            var status = $(this).attr('data-status');
            $("input[name='status']").val(status);
            $("#survey-form").submit();
        });
        $(document).delegate('.add-answer', 'click', function () {
            var div = $(this).parents('.question-div');
            var question = div.attr('data-question');
            var html =
                `<div  class="row answer-div">
                    <div class="col-lg-4">
                        <label class="form-label">Answer</label>
                        <input  class="form-control" placeholder="place the answer" required name="answers[${question}][]" required/>
                   </div>
                    <div class="col-lg-4">
                        <label class="form-label">Answer Arabic</label>
                        <input  class="form-control" placeholder="place the answer" name="answers_ar[${question}][]" required/>
                    </div>
                    <div class="col-lg-4">
                        <div class="action-icon field two wide delete-answer">
                            <i class="fas fa-times"></i>
                        </div>
                    </div>
                </div>`;
            $('#answer-location-' + question).append(html);
        });
        $(document).delegate('.delete-answer', 'click', function () {
            $(this).parents('.answer-div').remove();
        });
        $(document).delegate('.delete-question', 'click', function () {
            $(this).parents('.question-div').remove();
        });
        $(document).delegate('.q_item', 'change', function () {
            debugger;
            console.log($(this).val())
            var div = $(this).parents('.question-div');
            var question = div.attr('data-question');
            console.log(question);
            if ($(this).val() == 2) {
                div.find(".answer-div").remove();
                div.find("#add-answer-" + question).prop('disabled', true);
            } else {
                div.find("#add-answer-" + question).prop('disabled', false);
            }

            // $(this).parents('.question-div').remove();
        });
        $(document).delegate('#add-question', 'click', function () {
            var length = $('#question-location .question-div').length;
            var html =
                `<div class="question-div" style="border: 2px solid #eee;border-radius: 10px;padding: 10px;" data-question="${length}">
                    <div class="field">
                      <label class="form-label">Question</label>
                      <input  class="form-control" placeholder="Type Question here" required type="text" name="questions[${length}]" />
                    </div>
                    <div class="field">
                        <label class="form-label">Question Arabic</label>
                        <input  class="form-control" placeholder="Type Question here" required type="text" name="questions_ar[${length}]"/>
                    </div>
                    <div class="inner-repeater">
                        <div>
                            <div id="answer-location-${length}">
                                <p>Answer Type</p>
                                <div class="row" >
                                    <div class="col-lg-4">
                                            <input  class="form-check-input" class="add-survey-options q_item" type="radio" name="type[${length}]" tabindex="0" checked value="1" />
                                            <label class="form-label">Multi Choices</label>
                                            <input  class="form-check-input q_item"  type="radio" name="type[${length}]" tabindex="0" value="2" />
                                            <label class="form-label">text</label>
                                            <input  class="form-check-input q_item"  type="radio" name="type[${length}]" tabindex="0" value="3" />
                                            <label class="form-label">Checkbox</label>
                                    </div>
                                    <div class="col-lg-4">

                                    </div>
                                    <div class="col-lg-4">

                                    </div>
                                </div>

                                <button class="add-answer btn btn-success waves-effect waves-light" style="margin: 5px 30px;" type="button" id="add-answer-${length}" >Add New Answers</button>

                                <div  class="row answer-div">
                                     <div class="col-lg-4">
                                        <label class="form-label">Answer</label>
                                        <input  class="form-control" placeholder="place the answer" required name="answers[${length}][]" required/>
                                     </div>
                                     <div class="col-lg-4">
                                        <label class="form-label">Answer Arabic</label>
                                        <input  class="form-control" placeholder="place the answer" name="answers_ar[${length}][]" required/>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="action-icon field two wide">
                                            <i class="fas fa-times"></i>
                                        </div>
                                     </div>
                                </div>
                            </div>
                            <div style="text-align: center; margin-top: 20px">
                                <button type="button" class="btn btn-danger waves-effect waves-light delete-question">Delete Question</button>
                            </div>
                        </div>
                    </div>
                </div>`;
            $('#question-location').append(html);
        });

    </script>
@endsection
