
@extends('layouts.master-layouts')
@section('title')
@lang('translation.Edit-company')
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
    @slot('title') Edit company @endslot
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
                                <h5 class="font-size-16 mb-1">Organization Profile</h5>
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
                        <form method="post" action="{{url('company/'.$single->id)}}" enctype="multipart/form-data" class="needs-validation" novalidate>
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="text-center">
                                <div >
                                    <img src="{{$single->logo}}" id="blah" alt="Account Photo" class="avatar-lg rounded-circle img-thumbnail"/>
                                    <div class="upload-imgInput">
                                        <input type="file" id="img-input" name="logo" accept="image/*"  hidden />
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
                                    <label class="form-label" for="productname">Organization Name</label>
                                    <input id="name" name="name" type="text" class="form-control" placeholder="Enter your Company Name" value="{{old('name',$single->name)}}" required>
                                    <div class="invalid-feedback">Please Enter your Organization Name! </div>
                                </div>
                               </div>
                               <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="productname">Organization Name (Arabic)</label>
                                    <input id="name_ar" name="name_ar" type="text" class="form-control" placeholder="Enter your Company Name (Arabic)" value="{{old('name',$single->name_ar)}}" required>
                                    <div class="invalid-feedback">Please Enter your Organization Name (Arabic)! </div>
                                </div>
                               </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label" class="control-label">Select Nationality</label>
                                        <select name="country_id" class="form-control select2" required>
                                        @foreach($countries as $country)
                                        <option
                                            value="{{$country->id}}"
                                            @if ($country->id == old('country_id',$single->user->country_id))
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
                                        @foreach($company_types as $type)
                                            <option
                                                value="{{$type->id}}"
                                                @if ($type->id == old('company_type_id',$single->company_type_id))
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
                                                @if ($industry->id == old('industry_id',$single->industry_id))
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
                                        <input id="location" name="location" type="text" class="form-control" placeholder="Enter your location" value="{{old('location',$single->user->location)}}" required>
                                        <div class="invalid-feedback">Please Enter your location! </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">

                                    <div class="mb-3">
                                        <label class="form-label" for="address">address</label>
                                        <input id="address" name="address" type="text" class="form-control" placeholder="Enter your address" value="{{old('address',$single->user->address)}}" required>
                                        <div class="invalid-feedback">Please Enter your address! </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="phone">phone number</label>
                                        <input id="phone" name="phone" type="text" class="form-control" placeholder="Enter your phone" value="{{old('phone',$single->user->phone)}}" required>
                                        <div class="invalid-feedback">Please Enter your phone! </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">

                                    <div class="mb-3">
                                        <label class="form-label" for="location">email address</label>
                                        <input id="email" name="email" type="email" class="form-control" placeholder="...@gmail.com" value="{{old('email',$single->user->email)}}" required parsley-type="email">
                                        <div class="invalid-feedback">Please Enter your email! </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">

                                    <div class="mb-3">
                                        <label class="form-label" for="address">Add new password</label>
                                        <input id="password" name="password" type="password" class="form-control" placeholder="Enter your new password" >
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="phone">confirm new password</label>
                                        <input  type="password" class="form-control" placeholder="Enter your password confirmation" >
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
        debugger;
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
