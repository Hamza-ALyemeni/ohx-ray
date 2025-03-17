
@extends('layouts.master-layouts')
@section('title')
@lang('FAQ')
@endsection
@section('body')

@section('css')
<!-- DataTables -->
<link href="{{ URL::asset('/assets/libs/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('/assets/libs/dropzone/dropzone.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

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
    @slot('title') Create FAQ @endslot
    @endcomponent

<div class="row">
    <div class="col-lg-12">
        <div id="addproduct-accordion" class="custom-accordion">
            <div class="card">
                <form class="ui form repeater2" id="survey-form" method="post" action="{{url('faq')}}">
                    @csrf
                    <div
                        style="
                        display: flex;
                        flex-direction: row;
                        justify-content: space-between;
                        margin: 8px;
                        align-items: center;
                        "
                        >
                        <h3>FAQ</h3>
                        <div class="filter-by-dropdown w-50">
                            {{--<button type="reset" class="button ui" style="margin: 8px">Reset Edits</button>--}}
                            <button type="submit" class="btn btn-success waves-effect waves-light" >
                            Save All Changes
                            </button>
                        </div>
                    </div>
                    <div
                        class="landing-container"
                        style="margin-left: 5px; margin-right: 5px"
                        >
                        <div class="surveys-form-container">
                            <div class="ui stackable grid">
                            <div class="row">
                                <div class=" column">
                                    <div class="form-header">
                                        <p>Create FAQ question</p>
                                        <div class="hr-style-form"></div>
                                    </div>
                                    <div class="form-card">
                                        <!-- outer repeater -->
                                        <div
                                        class="field"
                                        style="display: flex; justify-content: flex-end"
                                        >
                                        <button
                                            type="button"
                                            class="btn btn-primary btn-lg waves-effect waves-light"
                                            id="add-question"
                                            >
                                        Add another FAQ question
                                        </button>
                                        </div>
                                        <div
                                        style="margin-bottom: 20px"
                                        id="question-location"
                                        >
                                        @if(count($data) == 0)
                                        <div
                                            style="
                                            border: 2px solid #eee;
                                            border-radius: 10px;
                                            padding: 10px;
                                            margin: 10px;
                                            "
                                            >
                                            <div class="field">
                                                <label class="form-label">Question</label>
                                                <input  class="form-control"
                                                    placeholder="Type Question here"
                                                    type="text"
                                                    name="question[]"
                                                    />
                                            </div>
                                            <div class="field">
                                                <label class="form-label">Answer</label>
                                                <input  class="form-control"
                                                    placeholder="Type the answer here"
                                                    type="text"
                                                    name="answer[]"
                                                    />
                                            </div>
                                        </div>
                                        @endif
                                        @foreach($data as $faq)
                                        <div
                                            style="
                                            border: 2px solid #eee;
                                            border-radius: 10px;
                                            padding: 10px;
                                            margin: 10px;
                                            "
                                            >
                                            <div class="field">
                                                <label class="form-label">Question</label>
                                                <input  class="form-control"
                                                    placeholder="Type Question here"
                                                    type="text"
                                                    name="question[]"
                                                    value="{{$faq->question}}"
                                                    />
                                            </div>
                                            <div class="field">
                                                <label class="form-label">Answer</label>
                                                <input  class="form-control"
                                                    placeholder="Type the answer here"
                                                    type="text"
                                                    name="answer[]"
                                                    value="{{$faq->answer}}"
                                                    />
                                            </div>
                                        </div>
                                        @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end row -->





@endsection
@section('script')
<script>
   $(document).delegate('#add-question', 'click', function () {
       var html = `<div
                     style="
                       border: 2px solid #eee;
                       border-radius: 10px;
                       padding: 10px;
                       margin: 10px;
                     "
                   >
                     <div class="field">
                       <label class="form-label">Question</label>
                       <input  class="form-control"
                         placeholder="Type Question here"
                         type="text"
                         name="question[]"
                       />
                     </div>
                     <div class="field">
                       <label class="form-label">Answer</label>
                       <input  class="form-control"
                         placeholder="Type the answer here"
                         type="text"
                         name="answer[]"
                       />
                     </div>
                   </div>`;
       $('#question-location').append(html);

   });
   $(".js-example-placeholder-single").select2({
       placeholder: "Select a Country",
       allowClear: true
   });
   $("#img-input").change(function () {
       if (this.files && this.files[0]) {
           var reader = new FileReader();

           reader.onload = function (e) {
               $('#blah').attr('src', e.target.result);
           }

           reader.readAsDataURL(this.files[0]); // convert to base64 string
       }
   });
</script>
@endsection
