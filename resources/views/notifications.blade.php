
@extends('layouts.master-layouts')
@section('title')
@lang('Notification')
@endsection
@section('body')
@section('css')
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
    @slot('title') Notification @endslot
    @endcomponent

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label class="form-label" for="Date-of-birth">Date</label>
                            <input type="date" class="form-control" name="date_of_birth" max="{{date('Y-m-d')}}" value="@If(@$_GET['date'] && $_GET['date']){{$_GET['date']}}@endif"  required/>
                        </div>
                    </div>
                    <div class="col-lg-4"></div>
                    <div class="col-lg-4">
                    <label class="form-label" for="Date-of-birth"></label>
                    <button class="btn btn-success button sendNotifications" data-bs-toggle="modal" data-bs-target="#staticBackdrop"  style="margin: 5px"> Send Notification </button>
                    </div>
                </div>
                <div class="row mb-2">
                        <div class="col-md-6">
                            <div class="mb-3">
                            </div>
                        </div>

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
                                    <th scope="col">company</th>
                                    <th scope="col">Notification</th>


                                    <th scope="col" style="width: 200px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $notification)
                                <tr>
                                    <th scope="row">
                                        <div class="form-check font-size-16">
                                            <input type="checkbox" class="form-check-input" id="contacusercheck1">
                                            <label class="form-check-label" for="contacusercheck1"></label>
                                        </div>
                                    </th>
                                    <td >@if(Auth::user()->role == 0)
                                    To {{$notification->company->name}} @else From Admin @endif</td>
                                    <td>
                                        {{$notification->notification}}
                                    </td>
                                    <td>
                                        <ul class="list-inline mb-0">

                                        <li class="list-inline-item">
                                            <a class="px-2 text-danger" onclick=" event.preventDefault(); var r = confirm('are you sure?'); if (r==true){document.getElementById('delete-row{{$notification->id}}').submit();}">  <i  class="uil uil-trash-alt font-size-18"></i></a>

                                            <a>
                                              <form method="post" id="delete-row{{$notification->id}}"
                                              action="{{ url('notification/'.$notification->id) }}"
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


                            <!-- staticBackdrop Modal example -->
                            <div class="modal fade"  id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                    <form action="{{url('notification')}}" method="post" id="submitNotification">
                                        @csrf
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                 <label>Select Companies</label>
                                                    <select  class="form-control"  data-placeholder="Choose ..." name="company_id[]"required>
                                                        @foreach($companies as $company)
                                                            <option value="{{$company->id}}">{{$company->name}}</option>
                                                        @endforeach
                                                    </select>

                                                    <label>Notification Content</label>
                                                    <textarea required rows="2" name="notification" class="form-control"></textarea>

                                                    <input type="hidden" name="survey_id" value="" id="survey_id">

                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-light"   data-bs-dismiss="modal">Close</button>
                                            <button  class="btn btn-primary" id="submitNotificationButton">Send</button>
                                        </div>
                                       </form>
                                    </div>
                                </div>
                            </div>
                            <!-- -->


                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
<script src="{{ URL::asset('/assets/libs/select2/select2.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/dropzone/dropzone.min.js') }}"></script>
<script src="{{ URL::asset('/assets/js/pages/ecommerce-add-product.init.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/parsleyjs/parsleyjs.min.js') }}"></script>
<script src="{{ URL::asset('/assets/js/pages/form-validation.init.js') }}"></script>
@section('js')
    <script>
        $('form input').change(function () {
            $(this).closest('form').submit();
        });
    </script>
@endsection
