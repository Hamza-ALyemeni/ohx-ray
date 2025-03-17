
@extends('layouts.master-layouts')
@section('title')
@lang('Create Demographic')
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
    @slot('title') Create Demographic @endslot
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
                                <h5 class="font-size-16 mb-1">@if(isset($single)) Edit Demographic  @else New Demographic @endif</h5>
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
                        <form method="post" action="{{url('demographic')}}" enctype="multipart/form-data">
                           @csrf
                           <div class="row">
                               <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="productname">Demographic Name</label>
                                    <input id="demographic" name="demographic" type="text" class="form-control" placeholder="Enter your Demographic Name" value="{{old('name')}}" required>
                                    <div class="invalid-feedback">Please Enter your Demographic Name! </div>
                                </div>
                               </div>
                               <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="productname">Demographic Arbic Name</label>
                                    <input id="demographic_ar" name="demographic_ar" type="text" class="form-control" placeholder="Enter your Demographic Arabic Name" value="{{old('name_ar')}}" required>
                                    <div class="invalid-feedback">Please Enter your Demographic Arbic Name! </div>
                                </div>
                               </div>
                               <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" class="control-label">Select Company</label>
                                    <select name="company_id" class="form-control select2" required>
                                    @foreach($company as $company)
                                        <option
                                            value="{{$company->id}}"
                                            @if ($company->id == old('company_id'))
                                            selected="selected"
                                            @endif>{{$company->name}}
                                        </option>
                                    @endforeach
                                    </select>
                                    <div class="invalid-feedback">Please Select Company! </div>
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
                                <h5 class="font-size-16 mb-1">demographic detail</h5>
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
                        <form method="post" action="{{url('demographic_detail')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                 <div class="mb-3">
                                     <label class="form-label" for="productname">Demographic detail Name</label>
                                     <input id="name_detail" name="name_detail" type="text" class="form-control" placeholder="Enter your Demographic detail Name" value="{{old('name_detail')}}" required>
                                     <div class="invalid-feedback">Please Enter your Demographic Name! </div>
                                 </div>
                                </div>
                                <div class="col-md-6">
                                 <div class="mb-3">
                                     <label class="form-label" for="productname">Demographic detail Arbic Name</label>
                                     <input id="name_detail_ar" name="name_detail_ar" type="text" class="form-control" placeholder="Enter your Demographic detail Arabic Name" value="{{old('name_detail_ar')}}" required>
                                     <div class="invalid-feedback">Please Enter your Demographic Arbic Name! </div>
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
                                        03
                                    </div>
                                </div>
                            </div>
                            <div class="flex-grow-1 overflow-hidden">
                                <h5 class="font-size-16 mb-1">Demographic File Import</h5>
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
                        <form method="post" action="{{url('demographic/importDemographic')}}" enctype="multipart/form-data" class="dropzone" >
                        @csrf
                       
                            <div class="row mb-4">
                                <div class="col ms-auto">
                                    <div class="d-flex flex-reverse flex-wrap gap-2">
                                <label class="form-label" class="control-label">Select Company</label>
                                <select name="company_id2" class="form-control " required>
                                @foreach($company2 as $com)
                                    <option value="{{$com->id}}" >  {{$com->name}}</option>
                                @endforeach
                                </select>
                                <div class="invalid-feedback">Please Select Company! </div>
                            </div> <!-- end col -->
                        </div> <!-- end row-->
                            </div>
                           
                        <div class=""><!-- fallback -->
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
