
@extends('layouts.master-layouts')
@section('title')
@lang('Comparisons')
@endsection
@section('body')
@section('css')
<link href="{{ URL::asset('/assets/libs/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('/assets/libs/dropzone/dropzone.min.css') }}" rel="stylesheet" type="text/css" />
<style>
        .width-100 {
            width: 100%;
        }

        .ui.fluid.dropdown.selection {
            width: 100% !important;
        }

        .column {
            background: #ffffff;
            min-height: 80px;
            border: 1px solid #e9e8ea;
            padding: 10px 0px;
        }

        .customized-width {
            /* margin-right: 10px !important; */
            width: 100%;
            margin: 0px !important;
            padding: 0px !important;
        }

        h1.ui.header {
            font-size: 1rem;
        }

        h3.ui.header {
            font-size: 0.8rem;
            margin-left: -15px;
        }

        .customized-width .column {
            padding-left: 1.5rem !important;
            padding-right: 1.5rem !important;
        }

        .col-md-4 h6.ui.header {
            padding-left: 5px !important;
            padding-right: 5px !important;
        }

        .col-md-4.column {
            padding-left: 0px !important;
            padding-right: 0px !important;
            padding-top: 20px;
        }
        .main-div {
            width: 100%;
            display: inline-block;
        }

        .main-result {
            width: 49%;
            display: inline-block;
        }
    </style>
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
    @slot('title') Comparisons @endslot
    @endcomponent

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body" style="text-align: center;" >
                    <!-- Strat -->
                    
                    <form class="ui form" style="max-width: 99%;text-align: center;">
                            <h2 >
                            </h2>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Companies</label>
                                <select id="companySelect" class="select2 form-control select2-multiple" multiple="multiple" data-placeholder="Choose ..." name="from[]">
                                    <option value="0"  @if(@$_GET['from']&&count($_GET['from'])>0 && $_GET['from'][0] == 0) selected @endif>All Companies</option>

                                    @foreach($companies as $company)
                                        <option value="{{$company->id}}"
                                                @if(@$_GET['from']&&count($_GET['from'])>0 && $_GET['from'][0] != 0)
                                                @foreach($_GET['from'] as $val)
                                                @if($val == $company->id)selected @endif
                                                @endforeach
                                                @endif>{{$company->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label>Companies</label>
                                <select id="companySelect-2" class="select2 form-control select2-multiple" multiple="multiple" data-placeholder="Choose ..." name="to[]" >
                                    <option value="0"  @if(@$_GET['to']&&count($_GET['to'])>0 && $_GET['to'][0] == 0) selected @endif>All Companies</option>

                                    @foreach($companies as $company)
                                        <option value="{{$company->id}}"
                                                @if(@$_GET['to']&&count($_GET['to'])>0 && $_GET['to'][0] != 0)
                                                @foreach($_GET['to'] as $val)
                                                @if($val == $company->id)selected @endif
                                                @endforeach
                                                @endif>{{$company->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Company Types</label>
                                <select  class="select2 form-control select2-multiple" multiple="multiple" data-placeholder="Choose ..." name="company_types_1[]" >
                                    <option value="0"  @if(@$_GET['company_types_1']&&count($_GET['company_types_1'])>0 && $_GET['company_types_1'][0] == 0) selected @endif>All Company Types</option>

                                    @foreach($company_types as $company_type)
                                        <option value="{{$company_type->id}}"
                                                @if(@$_GET['company_types_1']&&count($_GET['company_types_1'])>0 && $_GET['company_types_1'][0] != 0)
                                                @foreach($_GET['company_types_1'] as $val)
                                                @if($val == $company_type->id)selected @endif
                                                @endforeach
                                                @endif>{{$company_type->company_type}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label>Company Types</label>
                                <select  class="select2 form-control select2-multiple" multiple="multiple" data-placeholder="Choose ..." name="company_types_2[]" >
                                    <option value="0"  @if(@$_GET['company_types_2']&&count($_GET['company_types_2'])>0 && $_GET['company_types_2'][0] == 0) selected @endif>All Company Types</option>
                                    @foreach($company_types as $company_type)
                                        <option value="{{$company_type->id}}"
                                                @if(@$_GET['company_types_2']&&count($_GET['company_types_2'])>0 && $_GET['company_types_2'][0] != 0)
                                                @foreach($_GET['company_types_2'] as $val)
                                                @if($val == $company_type->id)selected @endif
                                                @endforeach
                                                @endif>{{$company_type->company_type}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row" >
                            <div class="col-md-6">
                                <label>Industries</label>
                                <select  class="select2 form-control select2-multiple" multiple="multiple" data-placeholder="Choose ..." name="industry_1[]" >
                                    <option value="0"  @if(@$_GET['industry_1']&&count($_GET['industry_1'])>0 && $_GET['industry_1'][0] == 0) selected @endif>All industries</option>

                                    @foreach($industries as $industry)
                                        <option value="{{$industry->id}}"
                                                @if(@$_GET['industry_1']&&count($_GET['industry_1'])>0 && $_GET['industry_1'][0] != 0)
                                                @foreach($_GET['industry_1'] as $val)
                                                @if($val == $industry->id)selected @endif
                                                @endforeach
                                                @endif>{{$industry->industry}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label>Industries</label>
                                <select  class="select2 form-control select2-multiple" multiple="multiple" data-placeholder="Choose ..." name="industry_2[]" >
                                    <option value="0"  @if(@$_GET['industry_2']&&count($_GET['industry_2'])>0 && $_GET['industry_2'][0] == 0) selected @endif>All industries</option>

                                    @foreach($industries as $industry)
                                        <option value="{{$industry->id}}"
                                                @if(@$_GET['industry_2']&&count($_GET['industry_2'])>0 && $_GET['industry_2'][0] != 0)
                                                @foreach($_GET['industry_2'] as $val)
                                                @if($val == $industry->id)selected @endif
                                                @endforeach
                                                @endif>{{$industry->industry}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row" >
                            <!-- <div class="col-md-6">
                                <label>Phase</label>
                                <select  class="select2 form-control select2-multiple" multiple="multiple" data-placeholder="Choose ..." name="phase_1[]" >
                                  <option value="0"  @if(@$_GET['phase_1']&&count($_GET['phase_1'])>0 && $_GET['phase_1'][0] == 0) selected @endif>All phases</option>
                                    @foreach($survey_phases as $phase)
                                        <option value="{{$phase->id}}"
                                                @if(@$_GET['phase_1']&&count($_GET['phase_1'])>0 && $_GET['phase_1'][0] != 0)
                                                @foreach($_GET['phase_1'] as $val)
                                                @if($val == $phase->id)selected @endif
                                                @endforeach
                                                @endif>{{$phase->phase}}</option>
                                    @endforeach
                                </select>
                            </div> -->

                            <div class="col-md-6">
                                <label>Phase</label>
                                <select id="phaseSelect" class="select2 form-control" name="phase_1[]" multiple="multiple" data-placeholder="Choose ...">
                                    <option value=""></option>
                                </select>
                            </div>

                            <!-- <div class="col-md-6">
                                <label>Phase</label>
                                <select  class="select2 form-control select2-multiple" multiple="multiple" data-placeholder="Choose ..." name="phase_2[]" >
                                <option value="0"  @if(@$_GET['phase_2']&&count($_GET['phase_2'])>0 && $_GET['phase_2'][0] == 0) selected @endif>All phases</option>
                                    @foreach($survey_phases as $phase)
                                        <option value="{{$phase->id}}"
                                                @if(@$_GET['phase_2']&&count($_GET['phase_2'])>0 && $_GET['phase_2'][0] != 0)
                                                @foreach($_GET['phase_2'] as $val)
                                                @if($val == $phase->id)selected @endif
                                                @endforeach
                                                @endif>{{$phase->phase}}</option>
                                    @endforeach
                                </select>
                                </select>
                            </div> -->

                            <div class="col-md-6">
                                <label>Phase</label>
                                <select id="phaseSelect-2" class="select2 form-control" name="phase_2[]" multiple="multiple" data-placeholder="Choose ...">
                                    <option value=""></option>
                                </select>
                            </div>

                        </div>
                        <div class="row" >
                            <div class="col-md-6">
                                <br>
                              <button type="submit"  class="btn btn-primary btn-lg waves-effect waves-left" tabindex="0" formaction="exportComparison1" >Download</button>
                              <br><br>
                            </div>
                            <div class="col-md-6">
                                <br>
                                <button type="submit"  class="btn btn-primary btn-lg waves-effect waves-left" tabindex="0" formaction="exportComparison2" >Download</button>
                                <br><br>
                            </div>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary btn-lg waves-effect waves-light" tabindex="0">Compare</button>
                        <br><br>
                    </form>
                    <div class="row">
                        <div class="col-md-6">
                            <!-- <a class="ui primary button" href="./focus.html">Focus Charts</a> -->
                            <div class="ui center aligned relaxed grid customized-width">
                                <div class="row column mb-3">
                                    <h1 class="ui header">
                                        Main Result
                                        <div class="sub header">{{round((int)($focus_result_1[0]['value'] + $focus_result_1[1]['value']) /2 ) }}
                                            %
                                        </div>
                                    </h1>
                                </div>
                            </div>
                            <div class="ui center aligned relaxed grid customized-width">
                                @foreach($focus_result_1 as $focus)
                                    <div class="one column row">
                                        <div class="one column row">
                                            <h1 class="ui header">
                                                {{$focus['key']}}
                                                <div class="sub header">{{$focus['value']}}%</div>
                                            </h1>
                                        </div>
                                        <div class="ui relaxed grid width-100">
                                            @foreach($focus['dimensional_results'] as $dimensional)
                                                <div class="eight wide column">
                                                    <div class="one column row">
                                                        <h3 class="ui header">
                                                            {{$dimensional['key']}}
                                                            <div class="sub header">{{$dimensional['value']}}%</div>
                                                        </h3>
                                                    </div>
                                                    <div class="ui relaxed grid">
                                                        <div class=" column row">
                                                            @foreach($dimensional['dimensional_results'] as $val)
                                                                <div class="column col-md-4">
                                                                    <h6 class="ui header">
                                                                        {{$val['key']}}
                                                                        <div class="sub header">{{$val['value']}}%</div>
                                                                    </h6>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- <a class="ui primary button" href="./focus.html">Focus Charts</a> -->
                            <div class="ui center aligned relaxed grid customized-width">
                                <div class="one column row">
                                    <h1 class="ui header">
                                        Main Result
                                        <div class="sub header">{{round((int)($focus_result_2[0]['value'] + $focus_result_2[1]['value']) /2 ) }}
                                            %
                                        </div>
                                    </h1>
                                </div>
                            </div>
                            <div class="ui center aligned relaxed grid customized-width">
                                @foreach($focus_result_2 as $focus)
                                    <div class="one column row">
                                        <div class="one column row">
                                            <h1 class="ui header">
                                                {{$focus['key']}}
                                                <div class="sub header">{{$focus['value']}}%</div>
                                            </h1>
                                        </div>
                                        <div class="ui relaxed grid width-100">
                                            @foreach($focus['dimensional_results'] as $dimensional)
                                                <div class="eight wide column">
                                                    <div class="one column row">
                                                        <h3 class="ui header">
                                                            {{$dimensional['key']}}
                                                            <div class="sub header">{{$dimensional['value']}}%</div>
                                                        </h3>
                                                    </div>
                                                    <div class="ui relaxed grid">
                                                        <div class=" column row">
                                                            @foreach($dimensional['dimensional_results'] as $val)
                                                                <div class="column col-md-4">
                                                                    <h6 class="ui header">
                                                                        {{$val['key']}}
                                                                        <div class="sub header">{{$val['value']}}%</div>
                                                                    </h6>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <!-- End Card -->
                </div>
            </div>
        </div>
    </div>

    @endsection

@section('script')
<script>
    $(document).ready(function() {
        // Initialize select2
        $('.select2').select2();

        // Fetch phases when a company is selected
        $('#companySelect').on('change', function() {
            const companyId = $(this).val();
            const phaseSelect = $('#phaseSelect');

            // Clear existing phases
            phaseSelect.empty().append('<option value="0">All Phases</option>');

            if (companyId && companyId.length > 0 && !companyId.includes('0')) {
                // Fetch phases for the selected company
                $.ajax({
                    url: `/companies/${companyId}/phases`,
                    method: 'GET',
                    success: function(response) {
                        response.forEach(phase => {
                                phaseSelect.append(new Option(phase.text, phase.id, false, false));  
                        });

                        // Re-initialize select2
                        phaseSelect.trigger('change');
                    },
                    error: function(xhr) {
                        console.error('Error fetching phases:', xhr.responseText);
                    }
                });
            }
        });


        // phase 2
        $('#companySelect-2').on('change', function() {
            const companyId = $(this).val();
            const phaseSelect = $('#phaseSelect-2');

            // Clear existing phases
            phaseSelect.empty().append('<option value="0">All Phases</option>');

            if (companyId && companyId.length > 0 && !companyId.includes('0')) {
                // Fetch phases for the selected company
                $.ajax({
                    url: `/companies/${companyId}/phases`,
                    method: 'GET',
                    success: function(response) {
                        response.forEach(phase => {
                                phaseSelect.append(new Option(phase.text, phase.id, false, false));
                        });

                        // Re-initialize select2
                        phaseSelect.trigger('change');
                    },
                    error: function(xhr) {
                        console.error('Error fetching phases:', xhr.responseText);
                    }
                });
            }
        });
    });


</script>
<script src="{{ URL::asset('/assets/libs/select2/select2.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/dropzone/dropzone.min.js') }}"></script>
<script src="{{ URL::asset('/assets/js/pages/ecommerce-add-product.init.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/parsleyjs/parsleyjs.min.js') }}"></script>
<script src="{{ URL::asset('/assets/js/pages/form-validation.init.js') }}"></script>
@endsection
