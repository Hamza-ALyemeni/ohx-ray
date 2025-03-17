@extends('layouts.master-layouts')
@section('title')
@lang('translation.Preloader')
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
    @slot('title') Preloader @endslot
    @endcomponent

    <div class="row">
        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="float-end mt-2">
                        <div id="total-revenue-chart" data-colors='["--bs-primary"]'></div>
                    </div>
                    <div>
                        <h4 class="mb-1 mt-1"><span data-plugin="counterup">{{$survey->send_to}}</span></h4>
                        <p class="text-muted mb-0">Total Survey sent</p>
                    </div>
                    <p class="text-muted mt-3 mb-0"><span class="text-success me-1"></span>
                    </p>
                </div>
            </div>
        </div> <!-- end col-->

        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="float-end mt-2">
                        <div id="orders-chart" data-colors='["--bs-success"]'> </div>
                    </div>
                    <div>
                        <h4 class="mb-1 mt-1"><span data-plugin="counterup">{{count($companies)}}</span></h4>
                        <p class="text-muted mb-0">Total Companies</p>
                    </div>
                    <p class="text-muted mt-3 mb-0"><span class="text-danger me-1"></span>
                    </p>
                </div>
            </div>
        </div> <!-- end col-->

        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="float-end mt-2">
                        <div id="customers-chart" data-colors='["--bs-primary"]'> </div>
                    </div>
                    <div>
                        <h4 class="mb-1 mt-1"><span data-plugin="counterup">{{$total_finished_survey}}</span></h4>
                        <p class="text-muted mb-0">Total Survey Completed</p>
                    </div>
                    <p class="text-muted mt-3 mb-0"><span class="text-danger me-1"></span>
                    </p>
                </div>
            </div>
        </div> <!-- end col-->

        <div class="col-md-6 col-xl-3">

            <div class="card">
                <div class="card-body">
                    <div class="float-end mt-2">
                        <div id="growth-chart" data-colors='["--bs-warning"]'></div>
                    </div>
                    <div>
                        <h4 class="mb-1 mt-1"> <span data-plugin="counterup">{{$survey->send_to - $total_finished_survey}}</span></h4>
                        <p class="text-muted mb-0">Total Survey Not Completed</p>
                    </div>
                    <p class="text-muted mt-3 mb-0"><span class="text-success me-1"></span>
                    </p>
                </div>
            </div>
        </div> <!-- end col-->
    </div> <!-- end row-->

    <div class="row">
    <div class="col-xl-6">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title mb-4">Survey Analysis</h4>

                    <div id="pie_chart" data-colors='["--bs-success", "--bs-primary", "--bs-warning" ,"--bs-info", "--bs-danger"]' class="apex-charts" dir="ltr"></div>
                </div>
            </div>
        </div> <!-- end col -->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="float-end">
                        <div class="dropdown">
                            <a class=" dropdown-toggle" href="#" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="text-muted">All Members<i class="mdi mdi-chevron-down ms-1"></i></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton2">
                                <a class="dropdown-item" href="#">Locations</a>
                                <a class="dropdown-item" href="#">Revenue</a>
                                <a class="dropdown-item" href="#">Join Date</a>
                            </div>
                        </div>
                    </div>
                    <h4 class="card-title mb-4">Top Users</h4>

                    <div data-simplebar style="max-height: 339px;">
                        <div class="table-responsive">
                            <table class="table table-borderless table-centered table-nowrap">
                                <tbody>
                                @foreach($companies as $company)
                                    <tr>
                                        <td style="width: 20px;"><img src="{{$company->user->logo}}" class="avatar-xs rounded-circle " alt="..."></td>
                                        <td>
                                            <h6 class="font-size-15 mb-1 fw-normal">{{$company->name}}</h6>
                                        </td>
                                        <td class="text-muted fw-semibold text-end"><i class="icon-xs icon me-2 text-success" data-feather="trending-up"></i>{{$company->no_surveys_done}}</td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div> <!-- enbd table-responsive-->
                    </div> <!-- data-sidebar-->
                </div><!-- end card-body-->
            </div> <!-- end card-->
        </div><!-- end col -->
        </div> <!-- end Col -->
    </div> <!-- end row-->



    @endsection
    @section('script')
    <!-- apexcharts -->
    <script src="{{ URL::asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/pages/dashboard.init.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/pages/apexcharts.init.js') }}"></script>
    @endsection


