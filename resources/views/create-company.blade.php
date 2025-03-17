
@extends('layouts.master-layouts')
@section('title')
@lang('Create-company')
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
    @slot('title') Create company @endslot
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
                                <h5 class="font-size-16 mb-1">Company Profile</h5>
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
                        <form method="post" action="{{url('company')}}" enctype="multipart/form-data" class="needs-validation" novalidate>
                        @csrf
                        <div class="row">
                            <div class="text-center">
                                <div >
                                    <img src="{{asset('assets')}}/imgs/image.png" id="blah" alt="Account Photo" class="avatar-lg rounded-circle img-thumbnail"/>
                                    <div class="upload-imgInput">
                                        <input type="file" id="img-input" name="logo" accept="image/*" hidden required/>
                                        <div class="invalid-feedback">Please Select logo img! </div>
                                        <label for="img-input" class="img-input">
                                            <i class="fas fa-camera"></i>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                         <div class="row">
                              <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="productname">Company Name (English)</label>
                                    <input id="name" name="name" type="text" class="form-control" placeholder="Enter your Company Name" value="{{old('name')}}" required>
                                    <div class="invalid-feedback">Please Enter your Company Name! </div>
                                </div>
                               </div>
                               <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="productname">Company Name (Arabic)</label>
                                    <input id="name_ar" name="name_ar" type="text" class="form-control" placeholder="Enter your Company Name (Arabic)" value="{{old('name_ar')}}" required>
                                    <div class="invalid-feedback">Please Enter your Company Name (Arabic)! </div>
                                </div>
                               </div>
                               <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" class="control-label">Select Nationality</label>
                                    <select name="country_id" class="form-control select2" required>
                                    @foreach($countries as $country)
                                        <option
                                            value="{{$country->id}}"
                                            @if ($country->id == old('country_id'))
                                            selected="selected"
                                            @endif>{{$country->country_name}}
                                        </option>
                                    @endforeach
                                    </select>
                                    <div class="invalid-feedback">Please Select Nationality! </div>
                                </div>
                            </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" class="control-label">Select Company Type</label>
                                        <select name="company_type_id" class="form-control select2" required>
                                        @foreach($company_type as $type)
                                            <option
                                                value="{{$type->id}}"
                                                @if ($type->id == old('company_type_id'))
                                                selected="selected"
                                                @endif>{{$type->company_type}}
                                            </option>
                                        @endforeach
                                        </select>
                                        <div class="invalid-feedback">Please Select Company Type! </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" class="control-label">Select Industry</label>
                                        <select name="industry_id" class="form-control select2" required>
                                        @foreach($industries as $industry)
                                            <option
                                                value="{{$industry->id}}"
                                                @if ($industry->id == old('industry_id'))
                                                selected="selected"
                                                @endif>{{$industry->industry}}
                                            </option>
                                        @endforeach
                                        </select>
                                        <div class="invalid-feedback">Please Select Industry! </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">

                                    <div class="mb-3">
                                        <label class="form-label" for="location">location</label>
                                        <input id="location" name="location" type="text" class="form-control" placeholder="Enter your location" value="{{old('location')}}" required>
                                        <div class="invalid-feedback">Please Enter your location! </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">

                                    <div class="mb-3">
                                        <label class="form-label" for="address">address</label>
                                        <input id="address" name="address" type="text" class="form-control" placeholder="Enter your address" value="{{old('address')}}" required>
                                        <div class="invalid-feedback">Please Enter your address! </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="phone">phone number</label>
                                        <input id="phone" name="phone" type="text" class="form-control" placeholder="Enter your phone" value="{{old('phone')}}" required>
                                        <div class="invalid-feedback">Please Enter your phone! </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">

                                    <div class="mb-3">
                                        <label class="form-label" for="location">email address</label>
                                        <input id="email" name="email" type="email" class="form-control" placeholder="...@gmail.com" value="{{old('email')}}" required parsley-type="email">
                                        <div class="invalid-feedback">Please Enter your email! </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">

                                    <div class="mb-3">
                                        <label class="form-label" for="address">Add new password</label>
                                        <input id="password" name="password" type="password" class="form-control" placeholder="Enter your new password" required>
                                        <div class="invalid-feedback">Please Enter your password! </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="phone">confirm new password</label>
                                        <input  type="password" name="password_confirmation" class="form-control" placeholder="Enter your password confirmation" required data-parsley-equalto="#password">
                                        <div class="invalid-feedback">Not Matched ! </div>
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

            <div class="card">
                <a href="#addproduct-img-collapse" class="text-dark collapsed" data-bs-toggle="collapse" aria-haspopup="true" aria-expanded="false" aria-haspopup="true" aria-controls="addproduct-img-collapse">
                    <div class="p-4">

                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 me-3">
                                <div class="avatar-xs">
                                    <div class="avatar-title rounded-circle bg-soft-primary text-primary">
                                        02
                                    </div>
                                </div>
                            </div>
                            <div class="flex-grow-1 overflow-hidden">
                                <h5 class="font-size-16 mb-1">Company File Import</h5>
                                <p class="text-muted text-truncate mb-0">Fill all information below</p>
                            </div>
                            <div class="flex-shrink-0">
                                <i class="mdi mdi-chevron-up accor-down-icon font-size-24"></i>
                            </div>

                        </div>

                    </div>
                </a>

                <div id="addproduct-img-collapse" class="collapse" data-bs-parent="#addproduct-accordion">
                    <div class="p-4 border-top">
                        <form method="post" action="{{url('company/importCompany')}}" class="dropzone" enctype="multipart/form-data">

                            <div class="fallback">
                                <input style="display: block;" name="file" type="file" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" data-max-file-size="5M">
                            </div>
                            <div class="dz-message needsclick">
                                <div class="mb-3">
                                    <i class="display-4 text-muted uil uil-cloud-upload"></i>
                                </div>

                                <h4>Drop files here or click to upload.</h4>
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
