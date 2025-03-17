@extends('layouts.master-layouts')
@section('title')
@lang('check quality')
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
    @slot('title') Check Quality @endslot
    @endcomponent

    <div class="row">
        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="float-end mt-2">
                        <div id="total-revenue-chart" data-colors='["--bs-primary"]'></div>
                    </div>
                    <div>
                        <h4 class="mb-1 mt-1"><span data-plugin="counterup">{{$obj->total_employee}}</span></h4>
                        <p class="text-muted mb-0">Total Employees</p>
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
                        <h4 class="mb-1 mt-1"><span data-plugin="counterup">{{$obj->out_survey}}</span></h4>
                        <p class="text-muted mb-0">Total Out of Survey</p>
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
                        <h4 class="mb-1 mt-1"><span data-plugin="counterup">{{$obj->total_employee - $obj->out_survey}}</span></h4>
                        <p class="text-muted mb-0">Total In  Survey</p>
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
                        <h4 class="mb-1 mt-1"> <span data-plugin="counterup">{{$obj->quality_check_percent}}</span></h4>
                        <p class="text-muted mb-0">Quality Check</p>
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

                    <h4 class="card-title mb-4">Company Employees </h4>

                    <div id="pie_chart" data-colors='["--bs-success", "--bs-primary", "--bs-warning" ,"--bs-info", "--bs-danger"]' class="apex-charts" dir="ltr"></div>
                </div>
            </div>
        </div> <!-- end col -->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Quality Check</h4>

                    <div id="donut_chart" data-colors='["--bs-success", "--bs-primary", "--bs-warning" ,"--bs-info", "--bs-danger"]' class="apex-charts" dir="ltr"></div>
                </div>
            </div>
        </div>
        
    </div> <!-- end row-->

    @endsection
    @section('script')
    <!-- apexcharts -->
    <script src="{{ URL::asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/pages/dashboard.init.js') }}"></script>

    <script>
        var PiechartPieColors = document.getElementById("pie_chart");
        if (PiechartPieColors) {
        var options = {
            chart: {
            height: 320,
            type: 'pie'
            },
            series: [{{$obj->out_survey}} ,  {{$obj->total_employee-$obj->out_survey}}],
            labels: [ "Out of Survey","Total In  Survey" ],
            colors: [ "#e41616", "#00DFA2"],
            legend: {
            show: true,
            position: 'bottom',
            horizontalAlign: 'center',
            verticalAlign: 'middle',
            floating: false,
            fontSize: '14px',
            offsetX: 0
            },
            responsive: [{
            breakpoint: 600,
            options: {
                chart: {
                height: 240
                },
                legend: {
                show: false
                }
            }
            }]
        };
        var chart = new ApexCharts(document.querySelector("#pie_chart"), options);
        chart.render();
        } // Donut chart
    </script>

    <script>
     var DonutchartDonutColors =document.getElementById("donut_chart");

        if (DonutchartDonutColors) {
        var options = {
            chart: {
            height: 320,
            type: 'donut'
            },
            series: [  {{100-$obj->quality_check_percent}},{{$obj->quality_check_percent}}],
            labels: ["Poor", "good"],
            colors: [ "#e41616", "#00DFA2"],
            legend: {
            show: true,
            position: 'bottom',
            horizontalAlign: 'center',
            verticalAlign: 'middle',
            floating: false,
            fontSize: '14px',
            offsetX: 0
            },
            responsive: [{
            breakpoint: 600,
            options: {
                chart: {
                height: 240
                },
                legend: {
                show: false
                }
            }
            }]
        };
        var chart = new ApexCharts(document.querySelector("#donut_chart"), options);
        chart.render();
        }
    </script>
    @endsection


