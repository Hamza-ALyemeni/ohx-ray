@extends('layouts.master-layouts')
@section('title')
@lang('dashboard')
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
    @slot('title') dashboard @endslot
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
                        <p class="text-muted mb-0">Total Organizations</p>
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
                            <a class=" dropdown-toggle" href="#" id="dropdownMenuButton2"  aria-haspopup="true" aria-expanded="false">
                                <span class="text-muted">Total Surveys Done<i class="mdi  ms-1"></i></span>
                            </a>
                        </div>
                    </div>
                    <h4 class="card-title mb-4">Organizations</h4>

                    <div data-simplebar style="max-height: 339px;">
                        <div class="table-responsive">
                            <table class="table table-borderless table-centered table-nowrap">
                                <tbody>
                                @foreach($companies as $company)
                                    <tr>
                                        <td style="width: 20px;">
                                            <a href="{{url('company/'.$company->id)}}" ><img src="{{$company->logo}}" alt=""   class="avatar-xs rounded-circle me-2">
                                            {{$company->name}}</a>
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
    </div> <!-- end row-->

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Live</h4>

                    <div id="column_chart" data-colors='["--bs-warning", "--bs-primary", "--bs-success"]' class="apex-charts" dir="ltr"></div>
                </div>
            </div>
            <!--end card-->
        </div>
    </div>



    @endsection
    @section('script')
    <!-- apexcharts -->
    <script src="{{ URL::asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/pages/dashboard.init.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>
    <script>

        var PiechartPieColors = document.getElementById("pie_chart");

        if (PiechartPieColors) {
        var options = {
            chart: {
            height: 320,
            type: 'pie'
            },
            series: [{{$survey->send_to}}, {{$total_survey_employee}}, {{$total_finished_survey}}],
            labels: [ "Sent", "Opended","Finished"],
            colors: [ "#e41616", "#00DFA2","#F6FA70"],
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
        var company_name = [];
        var Total_emplpoyee = [];
        var finished_survey = [];
        var Not_finished_survey = [];

        @foreach($live_durations2 as $live)
        company_name.push("{{$live->company_name}}");
        Total_emplpoyee.push("{{$live->Total_emplpoyee}}");
        finished_survey.push("{{$live->finished_survey}}");
        Not_finished_survey.push("{{$live->Not_finished_survey}}");
        @endforeach

        var BarchartColumnColors = document.getElementById("column_chart");

        if (BarchartColumnColors) {
        var options = {
            chart: {
            height: 350,
            type: 'bar',
            toolbar: {
                show: false
            }
            },
            plotOptions: {
            bar: {
                horizontal: false,
                columnWidth: '45%',
                endingShape: 'rounded'
            }
            },
            dataLabels: {
            enabled: false
            },
            stroke: {
            show: true,
            width: 2,
            colors: ['transparent']
            },
            series: [{
            name: 'Total Emplpoyee',
            data: Total_emplpoyee
            }, {
            name: 'Total Survey  Completed',
            data: finished_survey
            }, {
            name: 'Total Survey Not Completed',
            data: Not_finished_survey
            }],
            colors: [ "#b2b7bb", "#0a9160","#e41616"],
            xaxis: {
            categories: company_name
            },
            yaxis: {
            title: {
                text: ''
            }
            },
            grid: {
            borderColor: '#f1f1f1'
            },
            fill: {
            opacity: 1
            },
            tooltip: {
            y: {
                formatter: function formatter(val) {
                return "" + val + " ";
                }
            }
            }
        };
        var chart = new ApexCharts(document.querySelector("#column_chart"), options);
        chart.render();
        } // column chart with datalabels

    </script>
    @endsection


