
@extends('layouts.master-layouts')
@section('title')
@lang('dashboard-report')
@endsection
@section('body')
@section('css')
<link rel="stylesheet" href="{{asset('assets')}}/custom.css" />
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
    @slot('title') Report @endslot
    @endcomponent

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <span class="logo-lg">
                 <img src="{{ URL::asset('/assets/imgs/benchmark/1.png') }}" width="" >
                 <img src="{{ URL::asset('/assets/imgs/benchmark/2.png') }}" >
                 <img src="{{ URL::asset('/assets/imgs/benchmark/3.png') }}" >
                 <img src="{{ URL::asset('/assets/imgs/benchmark/4.png') }}" >
                 <img src="{{ URL::asset('/assets/imgs/benchmark/5.png') }}" >
                </span>
  <!-- Start of Custom -->
 <article class="custom">
        <!-- Start of Response -->
        <div class="response">
            <h1 class="custom-title">
                TOTAL EMPLOYEES RESPONDENTS
                <span class="percent">{{ $focus_result[0]['count'] }}</span>
            </h1>
            <div class="box-container">
                <section class="box">
                    <h2 class="custom-title">
                        Gender
                        <!-- <span class="percent">{{ $focus_result[0]['count'] }}</span> -->
                    </h2>
                    <ul>
                        <li>
                            Male
                            <span class="percent">{{ $focus_result_male[0]['count'] }}</span>
                        </li>
                        <li>
                            Female
                            <span class="percent">{{ $focus_result_female[0]['count'] }}</span>
                        </li>
                        <li>
                            Others
                            <span
                                class="percent">{{ $focus_result[0]['count'] - ($focus_result_male[0]['count'] + $focus_result_female[0]['count']) }}</span>
                        </li>
                    </ul>
                </section>
                <section class="box">
                    <h2 class="custom-title">
                        Level
                        <!-- <span class="percent">{{ $focus_result[0]['count'] }}</span> -->
                    </h2>
                    <ul>
                        <li>
                            Top Management
                            <span class="percent">{{ $focus_result_top[0]['count'] }}</span>
                        </li>
                        <li>
                            Middle Management
                            <span class="percent">{{ $focus_result_middle[0]['count'] }}</span>
                        </li>
                        <li>
                            Employees
                            <span class="percent">{{ $focus_result_employee[0]['count'] }}</span>
                        </li>
                        <li>
                            Others
                            <span
                                class="percent">{{ $focus_result[0]['count'] - ($focus_result_top[0]['count'] + $focus_result_middle[0]['count'] + $focus_result_employee[0]['count']) }}</span>
                        </li>
                    </ul>
                </section>
                <section class="box">
                    <h2 class="custom-title">
                        Age Range
                        <!-- <span class="percent">XX</span> -->
                    </h2>
                    <ul>
                        <li>
                            &lt;= 25
                            <span class="percent">{{ $focus_result_25[0]['count'] }}</span>
                        </li>
                        <li>
                            26 - 34
                            <span class="percent">{{ $focus_result_26_34[0]['count'] }}</span>
                        </li>
                        <li>
                            35 - 44
                            <span class="percent">{{ $focus_result_35_44[0]['count'] }}</span>
                        </li>
                        <li>
                            &gt;= 45
                            <span class="percent">{{ $focus_result_45[0]['count'] }}</span>
                        </li>
                        <li>
                            Others
                            <span
                                class="percent">{{ $focus_result[0]['count'] - ($focus_result_25[0]['count'] + $focus_result_26_34[0]['count'] + $focus_result_35_44[0]['count']+ $focus_result_45[0]['count'] ) }}</span>
                        </li>
                    </ul>
                </section>
                <section class="box">
                    <h2 class="custom-title">
                        Nationality
                        <!-- <span class="percent">XX</span> -->
                    </h2>
                    <ul>
                        <li>
                            Local
                            <span class="percent">{{ $focus_result_local[0]['count'] }}</span>
                        </li>
                        <li>
                            Expat
                            <span class="percent">{{ $focus_result_expat[0]['count'] }}</span>
                        </li>
                        <li>
                            Others
                            <span
                                class="percent">{{ $focus_result[0]['count']  - ($focus_result_local[0]['count'] + $focus_result_expat[0]['count'])}}</span>
                        </li>
                    </ul>
                </section>
            </div>
        </div>
        <!-- Start of Results -->
        <div class="results">
            <div class="main">
                <!-- <img src="../assets/imgs/organiztion.svg" alt="Org" /> -->

                <h1 class="custom-title">
                    <i class="fa fa-sitemap"></i> Organiztion Results dd
                    <span class="percent">{{($focus_result[0]['value'] + $focus_result[1]['value']) /2 ) }}%</span>
                </h1>
            </div>
            <!-- Start of External -->

            
            @php($x = 0)
            @foreach($focus_result as $focus)
            <div class="row">
                <div class="col-md-2"  style="background: green;">
                    <div class="well">
                        <br><br><br><br><br>
                        {{$focus['key']}}
                        <span class="percent">{{$focus['value']}}%</span>
                        <br><br>
                    </div>
                </div>
                <div class="col-md-2" >
                    
                    <div class="row" style="background: rgb(247, 227, 13);">
                        <br><br>
                        <br><br>
                        <div class="col-md-12" >
                            <div class="well">{{$focus['dimensional_results'][0]['key']}}</div>
                            <span class="percent">{{$focus['dimensional_results'][0]['value']}}%</span>
                            <br>
                        </div>
                    </div>
                    <br><br>
                    <div class="row" style="background: rgb(247, 227, 13);">
                        <br><br>
                        <br><br>
                        <div class="col-md-12">
                            <div class="well">{{$focus['dimensional_results'][1]['key']}}</div>
                            <span class="percent">{{$focus['dimensional_results'][1]['value']}}%</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    @foreach($focus['dimensional_results'][0]['dimensional_results'] as $val)
                    <div class="row">
                        <div class="col-md-12">
                            {{$val['key']}}
                            <span class="percent">{{$val['value']}}%</span>
                        </div>
                    </div>
                    @endforeach
                    @foreach($focus['dimensional_results'][1]['dimensional_results'] as $val)
                    <div class="row">
                        <div class="col-md-12">
                            {{$val['key']}}
                            <span class="percent">{{$val['value']}}%</span>
                        </div>
                    </div>
                    @endforeach
                </div>
                
                <div class="col-md-2">
                    <br><br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="well">{{$focus['dimensional_results'][2]['key']}}</div>
                            <span class="percent">{{$focus['dimensional_results'][2]['value']}}%</span>
                            <br>
                        </div>
                    </div>
                    <br><br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="well">{{$focus['dimensional_results'][3]['key']}}</div>
                            <span class="percent">{{$focus['dimensional_results'][3]['value']}}%</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    @foreach($focus['dimensional_results'][2]['dimensional_results'] as $val)
                    <div class="row">
                        <div class="col-md-12">
                            {{$val['key']}}
                            <span class="percent">{{$val['value']}}%</span>
                        </div>
                    </div>
                    @endforeach
                    @foreach($focus['dimensional_results'][3]['dimensional_results'] as $val)
                    <div class="row">
                        <div class="col-md-12">
                            {{$val['key']}}
                            <span class="percent">{{$val['value']}}%</span>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="col-md-2">
                </div>
            </div>

            <div class="division">
                <h2 class="custom-title">
                    {{$focus['key']}}
                    <span class="percent">{{$focus['value']}}%</span>
                </h2>
                <div class="box-container">
                    <!-- Start of Direction -->

                  
                    @foreach($focus['dimensional_results'] as $dimensional)
                    <h3 class="custom-title">
                        {{$dimensional['key']}}
                        <span class="percent">{{$dimensional['value']}}%</span>
                    </h3>
                    <section class="box">
                       
                        <div class="wrapper">
                            <!-- Start of Vision -->
                            <div class="inner-box">
                            @foreach($dimensional['dimensional_results'] as $val)
                            
                                <h4 class="custom-title">
                                    {{$val['key']}}
                                    <span class="percent">{{$val['value']}}%</span>
                                </h4>
                                
                            
                            @php($x +=2)
                            @endforeach
                        </div>
                        </div>
                    </section>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
        <div class="final">
            <h1 class="custom-title">HIGHEST AND LOWEST 5 PRACTICES</h1>
            <div class="final-row">
                <h3 class="heading">Organiztional Level</h3>

            </div>
            <div class="final-row">
                <ul class="final-col">
                    @for($i = 0; $i < 5;$i++) <li
                        class="final-item @if($i==0 || $sort_results[$i]['value'] == $sort_results[0]['value']) active @endif">
                        {{$sort_results[$i]['key']}}
                        <span class="grade">{{$sort_results[$i]['value']}}%</span>
                        </li>
                        @endfor
                </ul>
            </div>
            <div class="final-row">
                <ul class="final-col">
                    @for($i = 23; $i>18;$i--)
                    <li class="final-item ">
                        {{$sort_results[$i]['key']}}
                        <span class="grade">{{$sort_results[$i]['value']}}%</span>
                    </li>
                    @endfor
                </ul>
            </div>
            <div class="highest">highest 5</div>
            <div class="lowest">lowest 5</div>
        </div>


        <div class="results">
            <div class="main">
                <!-- <img src="../assets/imgs/organiztion.svg" alt="Org" /> -->

                <h1 class="custom-title">
                    <i class="fa fa-male"></i> Male HEALTH
                    <span
                        class="percent">{{round(($focus_result_male[0]['value'] + $focus_result_male[1]['value']) /2  )}}%</span>
                </h1>
            </div>
            @php($x = 0)
            @foreach($focus_result_male as $focus)
            <div class="division">
                <h2 class="custom-title">
                    {{$focus['key']}}
                    <span class="percent">{{$focus['value']}}%</span>
                </h2>
                <div class="box-container">
                    <!-- Start of Direction -->
                    @foreach($focus['dimensional_results'] as $dimensional)
                    <section class="box">
                        <h3 class="custom-title">
                            {{$dimensional['key']}}
                            <span class="percent">{{$dimensional['value']}}%</span>
                        </h3>
                        <div class="wrapper">
                            <!-- Start of Vision -->
                            @foreach($dimensional['dimensional_results'] as $val)
                            <div class="inner-box">
                                <h4 class="custom-title">
                                    {{$val['key']}}
                                    <span class="percent">{{$val['value']}}%</span>
                                </h4>
                                <ul class="question">
                                    <li>
                                        Q{{$x+1}}
                                        <span class="percent">{{$val['questions']['q1']}}%</span>
                                    </li>
                                    <li>
                                        Q{{$x+2}}
                                        <span class="percent">{{$val['questions']['q2']}}%</span>
                                    </li>
                                </ul>
                            </div>
                            @php($x +=2)
                            @endforeach
                        </div>
                    </section>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
        <div class="results">
            <div class="main">
                <!-- <img src="../assets/imgs/organiztion.svg" alt="Org" /> -->

                <h1 class="custom-title">
                    <i class="fa fa-female"></i> Female HEALTH
                    <span
                        class="percent">{{round(($focus_result_female[0]['value'] + $focus_result_female[1]['value']) /2 ) }}%</span>
                </h1>
            </div>
            @php($x = 0)
            @foreach($focus_result_female as $focus)
            <div class="division">
                <h2 class="custom-title">
                    {{$focus['key']}}
                    <span class="percent">{{$focus['value']}}%</span>
                </h2>
                <div class="box-container">
                    <!-- Start of Direction -->
                    @foreach($focus['dimensional_results'] as $dimensional)
                    <section class="box">
                        <h3 class="custom-title">
                            {{$dimensional['key']}}
                            <span class="percent">{{$dimensional['value']}}%</span>
                        </h3>
                        <div class="wrapper">
                            <!-- Start of Vision -->
                            @foreach($dimensional['dimensional_results'] as $val)
                            <div class="inner-box">
                                <h4 class="custom-title">
                                    {{$val['key']}}
                                    <span class="percent">{{$val['value']}}%</span>
                                </h4>
                                <ul class="question">
                                    <li>
                                        Q{{$x+1}}
                                        <span class="percent">{{$val['questions']['q1']}}%</span>
                                    </li>
                                    <li>
                                        Q{{$x+2}}
                                        <span class="percent">{{$val['questions']['q2']}}%</span>
                                    </li>
                                </ul>
                            </div>
                            @php($x +=2)
                            @endforeach
                        </div>
                    </section>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
        <!-- Start of Table -->
        <table class="ui celled table">
            <caption>
                INDICATORS BY GENDER
            </caption>
            <thead>
                <tr>
                    <th></th>
                    <th>OHX<br />Score</th>
                    @foreach($focus_result as $focus)
                    @foreach($focus['dimensional_results'] as $dimensional)
                    <th>{{$dimensional['key']}}</th>
                    @endforeach
                    @endforeach
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        Organiztion
                        <span class="percent">count= {{$focus_result[0]['count'] }}</span>
                    </td>
                    <td>{{round(($focus_result[0]['value'] + $focus_result[1]['value']) /2 ) }}%</td>
                    @foreach($focus_result as $focus)
                    @foreach($focus['dimensional_results'] as $dimensional)
                    <td>{{$dimensional['value']}}%</td>
                    @endforeach
                    @endforeach
                </tr>
                <tr>
                    <td>
                        Male
                        <span class="percent">count= {{$focus_result_male[0]['count'] }}</span>
                    </td>
                    <td>{{round(($focus_result_male[0]['value'] + $focus_result_male[1]['value']) /2 ) }}%</td>
                    @foreach($focus_result_male as $focus)
                    @foreach($focus['dimensional_results'] as $dimensional)
                    <td>{{$dimensional['value']}}%</td>
                    @endforeach
                    @endforeach
                </tr>
                <tr>
                    <td>
                        Female
                        <span class="percent">count= {{$focus_result_female[0]['count'] }}</span>
                    </td>
                    <td>{{round(($focus_result_female[0]['value'] + $focus_result_female[1]['value']) /2 ) }}%</td>
                    @foreach($focus_result_female as $focus)
                    @foreach($focus['dimensional_results'] as $dimensional)
                    <td>{{$dimensional['value']}}%</td>
                    @endforeach
                    @endforeach
                </tr>
            </tbody>
        </table>
        <!-- Start of Final -->
        <div class="final">
            <h1 class="custom-title">HIGHEST AND LOWEST 5 PRACTICES</h1>
            <div class="final-row">
                <h3 class="heading">Organiztional Level</h3>
                <h3 class="heading">Male Level</h3>
                <h3 class="heading">Female Level</h3>
            </div>
            <div class="final-row">
                <ul class="final-col">
                    @for($i = 0; $i < 5;$i++) <li
                        class="final-item @if($i==0 || $sort_results[$i]['value'] == $sort_results[0]['value']) active @endif">
                        {{$sort_results[$i]['key']}}
                        <span class="grade">{{$sort_results[$i]['value']}}%</span>
                        </li>
                        @endfor
                </ul>
                <ul class="final-col">
                    @for($i = 0; $i < 5;$i++) <li
                        class="final-item @if($i==0 || $sort_results_male[$i]['value'] == $sort_results_male[0]['value']) active @endif">
                        {{$sort_results_male[$i]['key']}}
                        <span class="grade">{{$sort_results_male[$i]['value']}}%</span>
                        </li>
                        @endfor
                </ul>
                <ul class="final-col">
                    @for($i = 0; $i < 5;$i++) <li
                        class="final-item @if($i==0 || $sort_results_female[$i]['value'] == $sort_results_female[0]['value']) active @endif">
                        {{$sort_results_female[$i]['key']}}
                        <span class="grade">{{$sort_results_female[$i]['value']}}%</span>
                        </li>
                        @endfor
                </ul>
            </div>
            <div class="final-row">
                <ul class="final-col">
                    @for($i = 23; $i>18;$i--)
                    <li class="final-item ">
                        {{$sort_results[$i]['key']}}
                        <span class="grade">{{$sort_results[$i]['value']}}%</span>
                    </li>
                    @endfor
                </ul>
                <ul class="final-col">
                    @for($i = 23; $i>18;$i--)
                    <li class="final-item ">
                        {{$sort_results_male[$i]['key']}}
                        <span class="grade">{{$sort_results_male[$i]['value']}}%</span>
                    </li>
                    @endfor
                </ul>
                <ul class="final-col">
                    @for($i = 23; $i>18;$i--)
                    <li class="final-item ">
                        {{$sort_results_female[$i]['key']}}
                        <span class="grade">{{$sort_results_female[$i]['value']}}%</span>
                    </li>
                    @endfor
                </ul>
            </div>
            <div class="highest">highest 5</div>
            <div class="lowest">lowest 5</div>
        </div>


        <div class="results">
            <div class="main">
                <!-- <img src="../assets/imgs/organiztion.svg" alt="Org" /> -->

                <h1 class="custom-title">
                    <i class="fa fa-arrow-alt-circle-up"></i> TOP MANAGMEMENT HEALTH
                    <span
                        class="percent">{{round(($focus_result_top[0]['value'] + $focus_result_top[1]['value']) /2 )  }}%</span>
                </h1>
            </div>
            @php($x = 0)
            @foreach($focus_result_top as $focus)
            <div class="division">
                <h2 class="custom-title">
                    {{$focus['key']}}
                    <span class="percent">{{$focus['value']}}%</span>
                </h2>
                <div class="box-container">
                    <!-- Start of Direction -->
                    @foreach($focus['dimensional_results'] as $dimensional)
                    <section class="box">
                        <h3 class="custom-title">
                            {{$dimensional['key']}}
                            <span class="percent">{{$dimensional['value']}}%</span>
                        </h3>
                        <div class="wrapper">
                            <!-- Start of Vision -->
                            @foreach($dimensional['dimensional_results'] as $val)
                            <div class="inner-box">
                                <h4 class="custom-title">
                                    {{$val['key']}}
                                    <span class="percent">{{$val['value']}}%</span>
                                </h4>
                                <ul class="question">
                                    <li>
                                        Q{{$x+1}}
                                        <span class="percent">{{$val['questions']['q1']}}%</span>
                                    </li>
                                    <li>
                                        Q{{$x+2}}
                                        <span class="percent">{{$val['questions']['q2']}}%</span>
                                    </li>
                                </ul>
                            </div>
                            @php($x +=2)
                            @endforeach
                        </div>
                    </section>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
        <div class="results">
            <div class="main">
                <!-- <img src="../assets/imgs/organiztion.svg" alt="Org" /> -->

                <h1 class="custom-title">
                    <i class="fa fa-arrow-alt-circle-right"></i> MIDDLE MANAGMEMENT HEALTH
                    <span
                        class="percent">{{round(($focus_result_middle[0]['value'] + $focus_result_middle[1]['value']) /2 ) }}%</span>
                </h1>
            </div>
            @php($x = 0)
            @foreach($focus_result_middle as $focus)
            <div class="division">
                <h2 class="custom-title">
                    {{$focus['key']}}
                    <span class="percent">{{$focus['value']}}%</span>
                </h2>
                <div class="box-container">
                    <!-- Start of Direction -->
                    @foreach($focus['dimensional_results'] as $dimensional)
                    <section class="box">
                        <h3 class="custom-title">
                            {{$dimensional['key']}}
                            <span class="percent">{{$dimensional['value']}}%</span>
                        </h3>
                        <div class="wrapper">
                            <!-- Start of Vision -->
                            @foreach($dimensional['dimensional_results'] as $val)
                            <div class="inner-box">
                                <h4 class="custom-title">
                                    {{$val['key']}}
                                    <span class="percent">{{$val['value']}}%</span>
                                </h4>
                                <ul class="question">
                                    <li>
                                        Q{{$x+1}}
                                        <span class="percent">{{$val['questions']['q1']}}%</span>
                                    </li>
                                    <li>
                                        Q{{$x+2}}
                                        <span class="percent">{{$val['questions']['q2']}}%</span>
                                    </li>
                                </ul>
                            </div>
                            @php($x +=2)
                            @endforeach
                        </div>
                    </section>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
        <div class="results">
            <div class="main">
                <!-- <img src="../assets/imgs/organiztion.svg" alt="Org" /> -->

                <h1 class="custom-title">
                    <i class="fa fa-user"></i> EMPLOYEES HEALTH
                    <span
                        class="percent">{{round(($focus_result_employee[0]['value'] + $focus_result_employee[1]['value']) /2 ) }}%</span>
                </h1>
            </div>
            @php($x = 0)
            @foreach($focus_result_employee as $focus)
            <div class="division">
                <h2 class="custom-title">
                    {{$focus['key']}}
                    <span class="percent">{{$focus['value']}}%</span>
                </h2>
                <div class="box-container">
                    <!-- Start of Direction -->
                    @foreach($focus['dimensional_results'] as $dimensional)
                    <section class="box">
                        <h3 class="custom-title">
                            {{$dimensional['key']}}
                            <span class="percent">{{$dimensional['value']}}%</span>
                        </h3>
                        <div class="wrapper">
                            <!-- Start of Vision -->
                            @foreach($dimensional['dimensional_results'] as $val)
                            <div class="inner-box">
                                <h4 class="custom-title">
                                    {{$val['key']}}
                                    <span class="percent">{{$val['value']}}%</span>
                                </h4>
                                <ul class="question">
                                    <li>
                                        Q{{$x+1}}
                                        <span class="percent">{{$val['questions']['q1']}}%</span>
                                    </li>
                                    <li>
                                        Q{{$x+2}}
                                        <span class="percent">{{$val['questions']['q2']}}%</span>
                                    </li>
                                </ul>
                            </div>
                            @php($x +=2)
                            @endforeach
                        </div>
                    </section>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
        <table class="ui celled table">
            <caption>
                INDICATORS BY LEVEL
            </caption>
            <thead>
                <tr>
                    <th></th>
                    <th>OHX<br />Score</th>
                    @foreach($focus_result as $focus)
                    @foreach($focus['dimensional_results'] as $dimensional)
                    <th>{{$dimensional['key']}}</th>
                    @endforeach
                    @endforeach
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        Organiztion
                        <span class="percent">count= {{$focus_result[0]['count'] }}</span>
                    </td>
                    <td>{{round(($focus_result[0]['value'] + $focus_result[1]['value']) /2 ) }}%</td>
                    @foreach($focus_result as $focus)
                    @foreach($focus['dimensional_results'] as $dimensional)
                    <td>{{$dimensional['value']}}%</td>
                    @endforeach
                    @endforeach
                </tr>
                <tr>
                    <td>
                        Top Management
                        <span class="percent">count= {{$focus_result_top[0]['count'] }}</span>
                    </td>
                    <td>{{round(($focus_result_top[0]['value'] + $focus_result_top[1]['value']) /2 ) }}%</td>
                    @foreach($focus_result_top as $focus)
                    @foreach($focus['dimensional_results'] as $dimensional)
                    <td>{{$dimensional['value']}}%</td>
                    @endforeach
                    @endforeach
                </tr>
                <tr>
                    <td>
                        MIDDLE MANAGEMENT
                        <span class="percent">count= {{$focus_result_middle[0]['count'] }}</span>
                    </td>
                    <td>{{round(($focus_result_middle[0]['value'] + $focus_result_middle[1]['value']) /2 ) }}%</td>
                    @foreach($focus_result_middle as $focus)
                    @foreach($focus['dimensional_results'] as $dimensional)
                    <td>{{$dimensional['value']}}%</td>
                    @endforeach
                    @endforeach
                </tr>
                <tr>
                    <td>
                        EMPLOYEES
                        <span class="percent">count= {{$focus_result_employee[0]['count'] }}</span>
                    </td>
                    <td>{{round(($focus_result_employee[0]['value'] + $focus_result_employee[1]['value']) /2 ) }}%</td>
                    @foreach($focus_result_employee as $focus)
                    @foreach($focus['dimensional_results'] as $dimensional)
                    <td>{{$dimensional['value']}}%</td>
                    @endforeach
                    @endforeach
                </tr>
            </tbody>
        </table>
        <!-- Start of Final -->
        <div class="final">
            <h1 class="custom-title">HIGHEST AND LOWEST 5 PRACTICES</h1>
            <div class="final-row">
                <h3 class="heading">Organiztional Level</h3>
                <h3 class="heading">TOP MANAGEMENT LEVEL</h3>
                <h3 class="heading">MIDDLE MANAGEMENT Level</h3>
                <h3 class="heading">EMPLOYEES Level</h3>
            </div>
            <div class="final-row">
                <ul class="final-col">
                    @for($i = 0; $i < 5;$i++) <li
                        class="final-item @if($i==0 || $sort_results[$i]['value'] == $sort_results[0]['value']) active @endif">
                        {{$sort_results[$i]['key']}}
                        <span class="grade">{{$sort_results[$i]['value']}}%</span>
                        </li>
                        @endfor
                </ul>
                <ul class="final-col">
                    @for($i = 0; $i < 5;$i++) <li
                        class="final-item @if($i==0 || $sort_results_top[$i]['value'] == $sort_results_top[0]['value']) active @endif">
                        {{$sort_results_top[$i]['key']}}
                        <span class="grade">{{$sort_results_top[$i]['value']}}%</span>
                        </li>
                        @endfor
                </ul>
                <ul class="final-col">
                    @for($i = 0; $i < 5;$i++) <li
                        class="final-item @if($i==0 || $sort_results_middle[$i]['value'] == $sort_results_middle[0]['value']) active @endif">
                        {{$sort_results_middle[$i]['key']}}
                        <span class="grade">{{$sort_results_middle[$i]['value']}}%</span>
                        </li>
                        @endfor
                </ul>
                <ul class="final-col">
                    @for($i = 0; $i < 5;$i++) <li
                        class="final-item @if($i==0 || $sort_results_employee[$i]['value'] == $sort_results_employee[0]['value']) active @endif">
                        {{$sort_results_employee[$i]['key']}}
                        <span class="grade">{{$sort_results_employee[$i]['value']}}%</span>
                        </li>
                        @endfor
                </ul>
            </div>
            <div class="final-row">
                <ul class="final-col">
                    @for($i = 23; $i>18;$i--)
                    <li class="final-item ">
                        {{$sort_results[$i]['key']}}
                        <span class="grade">{{$sort_results[$i]['value']}}%</span>
                    </li>
                    @endfor
                </ul>
                <ul class="final-col">
                    @for($i = 23; $i>18;$i--)
                    <li class="final-item ">
                        {{$sort_results_top[$i]['key']}}
                        <span class="grade">{{$sort_results_top[$i]['value']}}%</span>
                    </li>
                    @endfor
                </ul>
                <ul class="final-col">
                    @for($i = 23; $i>18;$i--)
                    <li class="final-item ">
                        {{$sort_results_middle[$i]['key']}}
                        <span class="grade">{{$sort_results_middle[$i]['value']}}%</span>
                    </li>
                    @endfor
                </ul>
                <ul class="final-col">
                    @for($i = 23; $i>18;$i--)
                    <li class="final-item ">
                        {{$sort_results_employee[$i]['key']}}
                        <span class="grade">{{$sort_results_employee[$i]['value']}}%</span>
                    </li>
                    @endfor
                </ul>
            </div>
            <div class="highest">highest 5</div>
            <div class="lowest">lowest 5</div>
        </div>


        <div class="results">
            <div class="main">
                <!-- <img src="../assets/imgs/organiztion.svg" alt="Org" /> -->

                <h1 class="custom-title">
                    <i class="fa fa-calendar-alt"></i> AGE<= 25 YEARS HEALTH <span class="percent">
                        {{round(($focus_result_25[0]['value'] + $focus_result_25[1]['value']) /2 ) }}%</span>
                </h1>
            </div>
            @php($x = 0)
            @foreach($focus_result_25 as $focus)
            <div class="division">
                <h2 class="custom-title">
                    {{$focus['key']}}
                    <span class="percent">{{$focus['value']}}%</span>
                </h2>
                <div class="box-container">
                    <!-- Start of Direction -->
                    @foreach($focus['dimensional_results'] as $dimensional)
                    <section class="box">
                        <h3 class="custom-title">
                            {{$dimensional['key']}}
                            <span class="percent">{{$dimensional['value']}}%</span>
                        </h3>
                        <div class="wrapper">
                            <!-- Start of Vision -->
                            @foreach($dimensional['dimensional_results'] as $val)
                            <div class="inner-box">
                                <h4 class="custom-title">
                                    {{$val['key']}}
                                    <span class="percent">{{$val['value']}}%</span>
                                </h4>
                                <ul class="question">
                                    <li>
                                        Q{{$x+1}}
                                        <span class="percent">{{$val['questions']['q1']}}%</span>
                                    </li>
                                    <li>
                                        Q{{$x+2}}
                                        <span class="percent">{{$val['questions']['q2']}}%</span>
                                    </li>
                                </ul>
                            </div>
                            @php($x +=2)
                            @endforeach
                        </div>
                    </section>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
        <div class="results">
            <div class="main">
                <!-- <img src="../assets/imgs/organiztion.svg" alt="Org" /> -->

                <h1 class="custom-title">
                    <i class="fa fa-calendar-alt"></i> 26-34 AGE HEALTH
                    <span
                        class="percent">{{round(($focus_result_26_34[0]['value'] + $focus_result_26_34[1]['value']) /2 ) }}%</span>
                </h1>
            </div>
            @php($x = 0)
            @foreach($focus_result_26_34 as $focus)
            <div class="division">
                <h2 class="custom-title">
                    {{$focus['key']}}
                    <span class="percent">{{$focus['value']}}%</span>
                </h2>
                <div class="box-container">
                    <!-- Start of Direction -->
                    @foreach($focus['dimensional_results'] as $dimensional)
                    <section class="box">
                        <h3 class="custom-title">
                            {{$dimensional['key']}}
                            <span class="percent">{{$dimensional['value']}}%</span>
                        </h3>
                        <div class="wrapper">
                            <!-- Start of Vision -->
                            @foreach($dimensional['dimensional_results'] as $val)
                            <div class="inner-box">
                                <h4 class="custom-title">
                                    {{$val['key']}}
                                    <span class="percent">{{$val['value']}}%</span>
                                </h4>
                                <ul class="question">
                                    <li>
                                        Q{{$x+1}}
                                        <span class="percent">{{$val['questions']['q1']}}%</span>
                                    </li>
                                    <li>
                                        Q{{$x+2}}
                                        <span class="percent">{{$val['questions']['q2']}}%</span>
                                    </li>
                                </ul>
                            </div>
                            @php($x +=2)
                            @endforeach
                        </div>
                    </section>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
        <div class="results">
            <div class="main">
                <!-- <img src="../assets/imgs/organiztion.svg" alt="Org" /> -->

                <h1 class="custom-title">
                    <i class="fa fa-calendar-alt"></i> 35-44 AGE HEALTH
                    <span
                        class="percent">{{round(($focus_result_35_44[0]['value'] + $focus_result_35_44[1]['value']) /2 ) }}%</span>
                </h1>
            </div>
            @php($x = 0)
            @foreach($focus_result_35_44 as $focus)
            <div class="division">
                <h2 class="custom-title">
                    {{$focus['key']}}
                    <span class="percent">{{$focus['value']}}%</span>
                </h2>
                <div class="box-container">
                    <!-- Start of Direction -->
                    @foreach($focus['dimensional_results'] as $dimensional)
                    <section class="box">
                        <h3 class="custom-title">
                            {{$dimensional['key']}}
                            <span class="percent">{{$dimensional['value']}}%</span>
                        </h3>
                        <div class="wrapper">
                            <!-- Start of Vision -->
                            @foreach($dimensional['dimensional_results'] as $val)
                            <div class="inner-box">
                                <h4 class="custom-title">
                                    {{$val['key']}}
                                    <span class="percent">{{$val['value']}}%</span>
                                </h4>
                                <ul class="question">
                                    <li>
                                        Q{{$x+1}}
                                        <span class="percent">{{$val['questions']['q1']}}%</span>
                                    </li>
                                    <li>
                                        Q{{$x+2}}
                                        <span class="percent">{{$val['questions']['q2']}}%</span>
                                    </li>
                                </ul>
                            </div>
                            @php($x +=2)
                            @endforeach
                        </div>
                    </section>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
        <div class="results">
            <div class="main">
                <!-- <img src="../assets/imgs/organiztion.svg" alt="Org" /> -->

                <h1 class="custom-title">
                    <i class="fa fa-calendar-alt"></i> AGE >= 45 YEARS HEALTH
                    <span
                        class="percent">{{round(($focus_result_45[0]['value'] + $focus_result_45[1]['value']) /2 ) }}%</span>
                </h1>
            </div>
            @php($x = 0)
            @foreach($focus_result_45 as $focus)
            <div class="division">
                <h2 class="custom-title">
                    {{$focus['key']}}
                    <span class="percent">{{$focus['value']}}%</span>
                </h2>
                <div class="box-container">
                    <!-- Start of Direction -->
                    @foreach($focus['dimensional_results'] as $dimensional)
                    <section class="box">
                        <h3 class="custom-title">
                            {{$dimensional['key']}}
                            <span class="percent">{{$dimensional['value']}}%</span>
                        </h3>
                        <div class="wrapper">
                            <!-- Start of Vision -->
                            @foreach($dimensional['dimensional_results'] as $val)
                            <div class="inner-box">
                                <h4 class="custom-title">
                                    {{$val['key']}}
                                    <span class="percent">{{$val['value']}}%</span>
                                </h4>
                                <ul class="question">
                                    <li>
                                        Q{{$x+1}}
                                        <span class="percent">{{$val['questions']['q1']}}%</span>
                                    </li>
                                    <li>
                                        Q{{$x+2}}
                                        <span class="percent">{{$val['questions']['q2']}}%</span>
                                    </li>
                                </ul>
                            </div>
                            @php($x +=2)
                            @endforeach
                        </div>
                    </section>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
        <table class="ui celled table">
            <caption>
                INDICATORS BY AGE
            </caption>
            <thead>
                <tr>
                    <th></th>
                    <th>OHX<br />Score</th>
                    @foreach($focus_result as $focus)
                    @foreach($focus['dimensional_results'] as $dimensional)
                    <th>{{$dimensional['key']}}</th>
                    @endforeach
                    @endforeach
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        Organiztion
                        <span class="percent">count= {{$focus_result[0]['count'] }}</span>
                    </td>
                    <td>{{round(($focus_result[0]['value'] + $focus_result[1]['value']) /2 )  }}%</td>
                    @foreach($focus_result as $focus)
                    @foreach($focus['dimensional_results'] as $dimensional)
                    <td>{{$dimensional['value']}}%</td>
                    @endforeach
                    @endforeach
                </tr>
                <tr>
                    <td>
                        <= 25 <span class="percent">count= {{$focus_result_25[0]['count'] }}</span>
                    </td>
                    <td>{{round(($focus_result_25[0]['value'] + $focus_result_25[1]['value']) /2 ) }}%</td>
                    @foreach($focus_result_25 as $focus)
                    @foreach($focus['dimensional_results'] as $dimensional)
                    <td>{{$dimensional['value']}}%</td>
                    @endforeach
                    @endforeach
                </tr>
                <tr>
                    <td>
                        26 - 34
                        <span class="percent">count= {{$focus_result_26_34[0]['count'] }}</span>
                    </td>
                    <td>{{round(($focus_result_26_34[0]['value'] + $focus_result_26_34[1]['value']) /2 ) }}%</td>
                    @foreach($focus_result_26_34 as $focus)
                    @foreach($focus['dimensional_results'] as $dimensional)
                    <td>{{$dimensional['value']}}%</td>
                    @endforeach
                    @endforeach
                </tr>
                <tr>
                    <td>
                        35 - 44
                        <span class="percent">count= {{$focus_result_35_44[0]['count'] }}</span>
                    </td>
                    <td>{{round(($focus_result_35_44[0]['value'] + $focus_result_35_44[1]['value']) /2 ) }}%</td>
                    @foreach($focus_result_35_44 as $focus)
                    @foreach($focus['dimensional_results'] as $dimensional)
                    <td>{{$dimensional['value']}}%</td>
                    @endforeach
                    @endforeach
                </tr>
                <tr>
                    <td>
                        > = 45
                        <span class="percent">count= {{$focus_result_45[0]['count'] }}</span>
                    </td>
                    <td>{{round(($focus_result_45[0]['value'] + $focus_result_45[1]['value']) /2 ) }}%</td>
                    @foreach($focus_result_45 as $focus)
                    @foreach($focus['dimensional_results'] as $dimensional)
                    <td>{{$dimensional['value']}}%</td>
                    @endforeach
                    @endforeach
                </tr>
            </tbody>
        </table>
        <!-- Start of Final -->
        <div class="final">
            <h1 class="custom-title">HIGHEST AND LOWEST 5 PRACTICES</h1>
            <div class="final-row">
                <h3 class="heading">Organiztional Level</h3>
                <h3 class="heading">AGE <= 25 LEVEL</h3>
                        <h3 class="heading">26 < AGE < 34 Level</h3>
                                <h3 class="heading">35 < AGE < 44 Level</h3>
                                        <h3 class="heading">AGE >= 45 Level</h3>
            </div>
            <div class="final-row">
                <ul class="final-col">
                    @for($i = 0; $i < 5;$i++) <li
                        class="final-item @if($i==0 || $sort_results[$i]['value'] == $sort_results[0]['value']) active @endif">
                        {{$sort_results[$i]['key']}}
                        <span class="grade">{{$sort_results[$i]['value']}}%</span>
                        </li>
                        @endfor
                </ul>
                <ul class="final-col">
                    @for($i = 0; $i < 5;$i++) <li
                        class="final-item @if($i==0 || $sort_results_25[$i]['value'] == $sort_results_25[0]['value']) active @endif">
                        {{$sort_results_25[$i]['key']}}
                        <span class="grade">{{$sort_results_25[$i]['value']}}%</span>
                        </li>
                        @endfor
                </ul>
                <ul class="final-col">
                    @for($i = 0; $i < 5;$i++) <li
                        class="final-item @if($i==0 || $sort_results_26_34[$i]['value'] == $sort_results_26_34[0]['value']) active @endif">
                        {{$sort_results_26_34[$i]['key']}}
                        <span class="grade">{{$sort_results_26_34[$i]['value']}}%</span>
                        </li>
                        @endfor
                </ul>
                <ul class="final-col">
                    @for($i = 0; $i < 5;$i++) <li
                        class="final-item @if($i==0 || $sort_results_35_44[$i]['value'] == $sort_results_35_44[0]['value']) active @endif">
                        {{$sort_results_35_44[$i]['key']}}
                        <span class="grade">{{$sort_results_35_44[$i]['value']}}%</span>
                        </li>
                        @endfor
                </ul>
                <ul class="final-col">
                    @for($i = 0; $i < 5;$i++) <li
                        class="final-item @if($i==0 || $sort_results_45[$i]['value'] == $sort_results_45[0]['value']) active @endif">
                        {{$sort_results_45[$i]['key']}}
                        <span class="grade">{{$sort_results_45[$i]['value']}}%</span>
                        </li>
                        @endfor
                </ul>
            </div>
            <div class="final-row">
                <ul class="final-col">
                    @for($i = 23; $i>18;$i--)
                    <li class="final-item ">
                        {{$sort_results[$i]['key']}}
                        <span class="grade">{{$sort_results[$i]['value']}}%</span>
                    </li>
                    @endfor
                </ul>
                <ul class="final-col">
                    @for($i = 23; $i>18;$i--)
                    <li class="final-item ">
                        {{$sort_results_25[$i]['key']}}
                        <span class="grade">{{$sort_results_25[$i]['value']}}%</span>
                    </li>
                    @endfor
                </ul>
                <ul class="final-col">
                    @for($i = 23; $i>18;$i--)
                    <li class="final-item ">
                        {{$sort_results_26_34[$i]['key']}}
                        <span class="grade">{{$sort_results_26_34[$i]['value']}}%</span>
                    </li>
                    @endfor
                </ul>
                <ul class="final-col">
                    @for($i = 23; $i>18;$i--)
                    <li class="final-item ">
                        {{$sort_results_35_44[$i]['key']}}
                        <span class="grade">{{$sort_results_35_44[$i]['value']}}%</span>
                    </li>
                    @endfor
                </ul>
                <ul class="final-col">
                    @for($i = 23; $i>18;$i--)
                    <li class="final-item ">
                        {{$sort_results_45[$i]['key']}}
                        <span class="grade">{{$sort_results_45[$i]['value']}}%</span>
                    </li>
                    @endfor
                </ul>
            </div>
            <div class="highest">highest 5</div>
            <div class="lowest">lowest 5</div>
        </div>



        <div class="results">
            <div class="main">
                <!-- <img src="../assets/imgs/organiztion.svg" alt="Org" /> -->

                <h1 class="custom-title">
                    <i class="fa fa-flag"></i> LOCAL HEALTH
                    <span
                        class="percent">{{round(($focus_result_local[0]['value'] + $focus_result_local[1]['value']) /2 ) }}%</span>
                </h1>
            </div>
            @php($x = 0)
            @foreach($focus_result_local as $focus)
            <div class="division">
                <h2 class="custom-title">
                    {{$focus['key']}}
                    <span class="percent">{{$focus['value']}}%</span>
                </h2>
                <div class="box-container">
                    <!-- Start of Direction -->
                    @foreach($focus['dimensional_results'] as $dimensional)
                    <section class="box">
                        <h3 class="custom-title">
                            {{$dimensional['key']}}
                            <span class="percent">{{$dimensional['value']}}%</span>
                        </h3>
                        <div class="wrapper">
                            <!-- Start of Vision -->
                            @foreach($dimensional['dimensional_results'] as $val)
                            <div class="inner-box">
                                <h4 class="custom-title">
                                    {{$val['key']}}
                                    <span class="percent">{{$val['value']}}%</span>
                                </h4>
                                <ul class="question">
                                    <li>
                                        Q{{$x+1}}
                                        <span class="percent">{{$val['questions']['q1']}}%</span>
                                    </li>
                                    <li>
                                        Q{{$x+2}}
                                        <span class="percent">{{$val['questions']['q2']}}%</span>
                                    </li>
                                </ul>
                            </div>
                            @php($x +=2)
                            @endforeach
                        </div>
                    </section>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
        <div class="results">
            <div class="main">
                <!-- <img src="../assets/imgs/organiztion.svg" alt="Org" /> -->

                <h1 class="custom-title">
                    <i class="fa fa-flag"></i> EXPAT HEALTH
                    <span
                        class="percent">{{round(($focus_result_expat[0]['value'] + $focus_result_expat[1]['value']) /2 ) }}%</span>
                </h1>
            </div>
            @php($x = 0)
            @foreach($focus_result_expat as $focus)
            <div class="division">
                <h2 class="custom-title">
                    {{$focus['key']}}
                    <span class="percent">{{$focus['value']}}%</span>
                </h2>
                <div class="box-container">
                    <!-- Start of Direction -->
                    @foreach($focus['dimensional_results'] as $dimensional)
                    <section class="box">
                        <h3 class="custom-title">
                            {{$dimensional['key']}}
                            <span class="percent">{{$dimensional['value']}}%</span>
                        </h3>
                        <div class="wrapper">
                            <!-- Start of Vision -->
                            @foreach($dimensional['dimensional_results'] as $val)
                            <div class="inner-box">
                                <h4 class="custom-title">
                                    {{$val['key']}}
                                    <span class="percent">{{$val['value']}}%</span>
                                </h4>
                                <ul class="question">
                                    <li>
                                        Q{{$x+1}}
                                        <span class="percent">{{$val['questions']['q1']}}%</span>
                                    </li>
                                    <li>
                                        Q{{$x+2}}
                                        <span class="percent">{{$val['questions']['q2']}}%</span>
                                    </li>
                                </ul>
                            </div>
                            @php($x +=2)
                            @endforeach
                        </div>
                    </section>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>

        <table class="ui celled table">
            <caption>
                INDICATORS BY NATIONALITY
            </caption>
            <thead>
                <tr>
                    <th></th>
                    <th>OHX<br />Score</th>
                    @foreach($focus_result as $focus)
                    @foreach($focus['dimensional_results'] as $dimensional)
                    <th>{{$dimensional['key']}}</th>
                    @endforeach
                    @endforeach
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        Organiztion
                        <span class="percent">count= {{$focus_result[0]['count'] }}</span>
                    </td>
                    <td>{{round(($focus_result[0]['value'] + $focus_result[1]['value']) /2 ) }}%</td>
                    @foreach($focus_result as $focus)
                    @foreach($focus['dimensional_results'] as $dimensional)
                    <td>{{$dimensional['value']}}%</td>
                    @endforeach
                    @endforeach
                </tr>
                <tr>
                    <td>
                        Local
                        <span class="percent">count= {{$focus_result_local[0]['count'] }}</span>
                    </td>
                    <td>{{round(($focus_result_local[0]['value'] + $focus_result_local[1]['value']) /2 ) }}%</td>
                    @foreach($focus_result_local as $focus)
                    @foreach($focus['dimensional_results'] as $dimensional)
                    <td>{{$dimensional['value']}}%</td>
                    @endforeach
                    @endforeach
                </tr>
                <tr>
                    <td>
                        Expat
                        <span class="percent">count= {{$focus_result_expat[0]['count'] }}</span>
                    </td>
                    <td>{{round(($focus_result_expat[0]['value'] + $focus_result_expat[1]['value']) /2 ) }}%</td>
                    @foreach($focus_result_expat as $focus)
                    @foreach($focus['dimensional_results'] as $dimensional)
                    <td>{{$dimensional['value']}}%</td>
                    @endforeach
                    @endforeach
                </tr>
            </tbody>
        </table>
        <!-- Start of Final -->
        <div class="final">
            <h1 class="custom-title">HIGHEST AND LOWEST 5 PRACTICES</h1>
            <div class="final-row">
                <h3 class="heading">Organiztional Level</h3>
                <h3 class="heading">LOCAL LEVEL</h3>
                <h3 class="heading">EXPAT Level</h3>
            </div>
            <div class="final-row">
                <ul class="final-col">
                    @for($i = 0; $i < 5;$i++) <li
                        class="final-item @if($i==0 || $sort_results[$i]['value'] == $sort_results[0]['value']) active @endif">
                        {{$sort_results[$i]['key']}}
                        <span class="grade">{{$sort_results[$i]['value']}}%</span>
                        </li>
                        @endfor
                </ul>
                <ul class="final-col">
                    @for($i = 0; $i < 5;$i++) <li
                        class="final-item @if($i==0 || $sort_results_local[$i]['value'] == $sort_results_local[0]['value']) active @endif">
                        {{$sort_results_local[$i]['key']}}
                        <span class="grade">{{$sort_results_local[$i]['value']}}%</span>
                        </li>
                        @endfor
                </ul>
                <ul class="final-col">
                    @for($i = 0; $i < 5;$i++) <li
                        class="final-item @if($i==0 || $sort_results_expat[$i]['value'] == $sort_results_expat[0]['value']) active @endif">
                        {{$sort_results_expat[$i]['key']}}
                        <span class="grade">{{$sort_results_expat[$i]['value']}}%</span>
                        </li>
                        @endfor
                </ul>
            </div>
            <div class="final-row">
                <ul class="final-col">
                    @for($i = 23; $i>18;$i--)
                    <li class="final-item ">
                        {{$sort_results[$i]['key']}}
                        <span class="grade">{{$sort_results[$i]['value']}}%</span>
                    </li>
                    @endfor
                </ul>
                <ul class="final-col">
                    @for($i = 23; $i>18;$i--)
                    <li class="final-item ">
                        {{$sort_results_local[$i]['key']}}
                        <span class="grade">{{$sort_results_local[$i]['value']}}%</span>
                    </li>
                    @endfor
                </ul>
                <ul class="final-col">
                    @for($i = 23; $i>18;$i--)
                    <li class="final-item ">
                        {{$sort_results_expat[$i]['key']}}
                        <span class="grade">{{$sort_results_expat[$i]['value']}}%</span>
                    </li>
                    @endfor
                </ul>
            </div>
            <div class="highest">highest 5</div>
            <div class="lowest">lowest 5</div>
        </div>
    </article>
    <!-- End of Custom -->

                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

@endsection
