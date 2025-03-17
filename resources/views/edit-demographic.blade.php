
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
                        <form method="post" action="{{url('demographic/'.$single->id)}}" enctype="multipart/form-data">
                           @csrf
                           @method('put')
                           <div class="row">
                               <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="productname">Demographic Name</label>
                                    <input id="demographic" name="demographic" type="text" class="form-control" placeholder="Enter your Demographic Name" value="{{old('demographic',$single->demographic)}}" required>
                                    <div class="invalid-feedback">Please Enter your Demographic Name! </div>
                                </div>
                               </div>
                               <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="productname">Demographic Arbic Name</label>
                                    <input id="demographic_ar" name="demographic_ar" type="text" class="form-control" placeholder="Enter your Demographic Arabic Name" value="{{old('demographic_ar',$single->demographic_ar)}}" required>
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
                                            @if ($company->id == old('company_id',$single->company_id))
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
                                     <input id="demographic_detail" name="demographic_detail" type="text" class="form-control" placeholder="Enter your Demographic detail Name" value="{{old('demographic_detail')}}" required>
                                     <div class="invalid-feedback">Please Enter your Demographic Name! </div>
                                 </div>
                                </div>
                                <div class="col-md-6">
                                 <div class="mb-3">
                                     <label class="form-label" for="productname">Demographic detail Arbic Name</label>
                                     <input id="demographic_detail_ar" name="demographic_detail_ar" type="text" class="form-control" placeholder="Enter your Demographic detail Arabic Name" value="{{old('demographic_detail_ar')}}" required>
                                     <div class="invalid-feedback">Please Enter your Demographic Arbic Name! </div>
                                 </div>
                                </div>
                                <input type="hidden" id="demographic_id" name="demographic_id" value="{{old('id',$single->id)}}">
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

                    <!-- start row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row mb-2">
                                        <div class="col-md-6">
                                            <div class="form-inline float-md-end mb-3">
                                                <div class="search-box ms-2">
                                                    <div class="position-relative">
                                                        <input type="text" class="form-control rounded bg-light border-0"
                                                            placeholder="Search...">
                                                        <i class="mdi mdi-magnify search-icon"></i>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- end row -->
                                    <div class="table-responsive mb-4">
                                        <table class="table table-centered table-nowrap mb-0">
                                            <thead>
                                                <tr>
                                                    <th scope="col" style="width: 50px;">
                                                        <div class="form-check font-size-16">
                                                            <input type="checkbox" class="form-check-input" id="contacusercheck">
                                                            <label class="form-check-label" for="contacusercheck"></label>
                                                        </div>
                                                    </th>
                                                    <th scope="col" >Demographic Detail Name</th>
                                                    <th scope="col">Demographic Detail Name Arabic</th>
                                                    <th scope="col" style="width: 200px;">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($demographic_detail as $demographic_detail)
                                                <tr>
                                                    <th scope="row">
                                                        <div class="form-check font-size-16">
                                                            <input type="checkbox" class="form-check-input" id="contacusercheck1">
                                                            <label class="form-check-label" for="contacusercheck1"></label>
                                                        </div>
                                                    </th>
                                                    <td>{{$demographic_detail->demographic_detail}} </td>
                                                    <td >{{$demographic_detail->demographic_detail_ar}}</td>
                                                    <td>
                                                        <ul class="list-inline mb-0">
                                                           <!-- <li class="list-inline-item">
                                                                <a href="{{url('demographic/'.$demographic_detail->id.'/edit')}}" class="px-2 text-primary"><i
                                                                        class="uil uil-pen font-size-18"></i></a>
                                                            </li> -->
                                                            <li class="list-inline-item">
                                                            <a class="px-2 text-danger"
                                                                onclick=" event.preventDefault(); var r = confirm('are you sure?'); if (r==true){document.getElementById('delete-row{{$demographic_detail->id}}').submit();}">
                                                                <i  class="uil uil-trash-alt font-size-18"></i>
                                                            </a>
                                                                <form method="post" id="delete-row{{$demographic_detail->id}}"
                                                                    action="{{ url('demographic_detail/'.$demographic_detail->id) }}"
                                                                    style="display: none;">
                                                                    <input name="_method" type="hidden" value="DELETE">
                                                                    {{ csrf_field() }}
                                                                </form>

                                                            </a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-sm-6">
                                            <div>
                                                <p class="mb-sm-0">Showing 1 to 10 of 12 entries</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="float-sm-end">
                                                <ul class="pagination mb-sm-0">
                                                    <li class="page-item disabled">
                                                        <a href="#" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a href="#" class="page-link">1</a>
                                                    </li>
                                                    <li class="page-item active">
                                                        <a href="#" class="page-link">2</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a href="#" class="page-link">3</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a href="#" class="page-link"><i class="mdi mdi-chevron-right"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
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
