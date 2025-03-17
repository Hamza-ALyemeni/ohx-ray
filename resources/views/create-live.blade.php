
@extends('layouts.master-layouts')
@section('title')
@lang('Create Live')
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
    @slot('title') Create Live @endslot
    @endcomponent

<div class="row">
    <div class="col-lg-12">
        <div id="addproduct-accordion" class="custom-accordion">
            <div class="card">
                <a href="#addproduct-billinginfo-collapse" class="text-dark" data-bs-toggle="collapse" aria-expanded="true" aria-controls="addproduct-billinginfo-collapse">
                    <div class="p-4">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 me-3">
                                <div class="avatar-xs">
                                    <div class="avatar-title rounded-circle bg-soft-primary text-primary">
                                        01
                                    </div>
                                </div>
                            </div>
                            <div class="flex-grow-1 overflow-hidden">
                                <h5 class="font-size-16 mb-1">@if(isset($single)) Edit Live Duration @else New Live Duration @endif</h5>
                                <p class="text-muted text-truncate mb-0">Fill all information below</p>
                            </div>
                            <div class="flex-shrink-0">
                                <i class="mdi mdi-chevron-up accor-down-icon font-size-24"></i>
                            </div>

                        </div>

                    </div>
                </a>

                <div id="addproduct-billinginfo-collapse" class="collapse show" data-bs-parent="#addproduct-accordion">
                    <div class="p-4 border-top">
                    <form method="post" action="@if(isset($single)){{url('company/'.$data->id.'/live_duration/'.$single->id)}}@else{{url('company/'.$data->id.'/live_duration')}}@endif" enctype="multipart/form-data">
                    @csrf
                    @if(isset($single))
                    @method('put')
                    @endif

                         <div class="row">
                              <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="firstname">Start Date</label>
                                    <input type="date" class="form-control"name="start_date" value="@if(isset($single)){{old('start_date',$single->start_date)}}@else{{old('start_date')}}@endif" required/>
                                    <div class="invalid-feedback">Please Enter your Start Date! </div>
                                </div>
                               </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="lastname">End Date</label>
                                        <input type="date" class="form-control" name="end_date" value="@if(isset($single)){{old('end_date',$single->end_date)}}@else{{old('end_date')}}@endif" required/>
                                        <div class="invalid-feedback">Please Enter your End Date! </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col ms-auto">
                                    <div class="d-flex flex-reverse flex-wrap gap-2">
                                        <button type="submit" class="btn btn-success">Save</button>
                                        <button type="reset" class="btn btn-danger">Cancel</button>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row-->

                        </form>


                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- end row -->





@endsection
@section('script')
<script src="{{ URL::asset('/assets/libs/select2/select2.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/dropzone/dropzone.min.js') }}"></script>
<script src="{{ URL::asset('/assets/js/pages/ecommerce-add-product.init.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/parsleyjs/parsleyjs.min.js') }}"></script>
<script src="{{ URL::asset('/assets/js/pages/form-validation.init.js') }}"></script>
    <script>
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
