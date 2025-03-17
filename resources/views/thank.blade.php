@extends('layouts.master-without-nav')
@section('title')
    @lang('thanks')
@endsection
@section('content')
    <div class="my-5 pt-sm-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center" >
                        <a href="#" class="d-block auth-logo" >
                            <img src="{{ URL::asset('/assets/images/logo-light.png') }}" alt="" height="100"
                                class="logo logo-dark">
                            <img src="{{ URL::asset('/assets/images/logo-light.png') }}" alt="" height="100"
                                class="logo logo-light">
                        </a>

                        <div class="row justify-content-center mt-2" >
                            <div class="col-lg-4 col-sm-5">
                                <div class="maintenance-img">
                                    <h1 style="color: #0a8c0a;">Thank You</h1>

                                   <!-- <img src="{{ URL::asset('/assets/images/success.png') }}" alt="" class="img-fluid mx-auto d-block" > -->
                                </div>
                            </div>
                        </div>

                        <h4 class="mt-5" >Thank you for filling the survey</h4>
                        <h4 class="mt-5">شكرا لك على ملء الاستبيان</h4>
                        <!--<p class="text-muted">شكرا ... لقد قمت بتعبئة الاستبيان سابقا</p> -->

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{ URL::asset('/assets/libs/jquery-countdown/jquery-countdown.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/pages/coming-soon.init.js') }}"></script>
@endsection

