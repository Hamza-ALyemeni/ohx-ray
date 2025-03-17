@extends('layouts.master-without-nav')
@section('title')
    @lang('Take Survey')
@endsection
@section('content')
    <div class="account-pages my-5  pt-sm-5">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div>
                        <a href="{{ url('index') }}" class="mb-5 d-block auth-logo">
                            <img src="{{ URL::asset('/assets/images/logo-dark.png') }}" alt="" height="80"
                                class="logo logo-dark">
                            <img src="{{ URL::asset('/assets/images/logo-light.png') }}" alt="" height="80"
                                class="logo logo-light">
                        </a>
                        <div class="card">

                            <div class="card-body p-4">

                                <div class="text-center mt-2">
                                    <h5 class="text-primary">Enter Email</h5>
                                </div>
                                <div class="p-2 mt-4">
                                    <div class="alert alert-success text-center mb-4" role="alert">
                                        Enter your email and you will be Redirected To The Survey
                                    </div>
                                    <div class="alert alert-success text-center mb-4" role="alert">
                                    أدخل بريدك الإلكتروني وسيتم إعادة توجيهك إلى الاستبيان
                                    </div>
                                    <form method="post" action="{{url('take_survey2')}}" enctype="multipart/form-data" class="needs-validation" novalidate>
                                        @csrf
                                        <div class="mb-3">
                                            <label class="form-label" for="useremail">Email</label>
                                            <input type="email" class="form-control" id="useremail" name="email" placeholder="Enter email">
                                        </div>

                                        <div class="mt-3 text-end">
                                            <button class="btn btn-primary w-sm waves-effect waves-light"
                                                type="submit">Submit</button>
                                        </div>


                                        <div class="mt-4 text-center">
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                        <div class="mt-5 text-center">
                            <p>© <script>
                                    2023

                                </script> OHXRay. Crafted with Passion  by CCS</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
@endsection
