@extends('layouts.layout')
@section('css')
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
            margin-right: 10px !important;
        }

        /*h5.ui.header {*/
        /*font-size: smaller;*/
        /*}*/

        .customized-width .column {
            padding-left: 1.5rem !important;
            padding-right: 1.5rem !important;
        }

        .level-4 h6.ui.header {
            padding-left: 5px !important;
            padding-right: 5px !important;
        }

        .level-4.column {
            padding-left: 0px !important;
            padding-right: 0px !important;
            padding-top: 20px;
        }
    </style>
@endsection
@section('content')
    <div class="content">
        {{--<div class="ui breadcrumb">--}}
        {{--<a class="section" href="./reports.html">Home</a>--}}
        {{--</div>--}}
        <h2>Reports</h2>

        <form class="ui form" style="max-width: 99%;">
            <div class="field">
                <label>Companies</label>
                <select required multiple="" class="ui dropdown full-width" name="company_id[]">
                    <option value="0"  @if(@$_GET['company_id']&&count($_GET['company_id'])>0 && $_GET['company_id'][0] == 0) selected @endif>All Companies</option>

                @foreach($companies as $company)
                        <option value="{{$company->id}}"
                                @if(@$_GET['company_id']&&count($_GET['company_id'])>0 && $_GET['company_id'][0] != 0)
                                @foreach($_GET['company_id'] as $val)
                                        @if($val == $company->id)selected @endif
                                @endforeach
                                @endif>{{$company->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="two fields">
                <div class="field">
                    <label>Gender</label>
                    <select class="ui fluid dropdown" name="gender">
                        <option value="0">All Gender</option>
                        <option value="1" @if(@$_GET['gender']&&$_GET['gender'] == 1) selected @endif>Male</option>
                        <option value="2" @if(@$_GET['gender']&&$_GET['gender'] == 2) selected @endif>Female</option>
                        <option value="-1" @if(@$_GET['gender']&&$_GET['gender'] == -1) selected @endif>Others</option>
                    </select>
                </div>
                <div class="field">
                    <label>Nationality</label>
                    <select class="ui fluid dropdown" name="nationality">
                        <option value="0">All Nationality</option>
                        <option value="1" @if(@$_GET['nationality']&&$_GET['nationality'] == 1) selected @endif>Local
                        </option>
                        <option value="2" @if(@$_GET['nationality']&&$_GET['nationality'] == 2) selected @endif>Expat
                        </option>
                        <option value="-1" @if(@$_GET['nationality']&&$_GET['nationality'] == -1) selected @endif>Others
                        </option>
                    </select>
                </div>
            </div>
            <div class="two fields">
                <div class="field">
                    <label>Level</label>
                    <select class="ui fluid dropdown" name="level">
                        <option value="0">All Level</option>
                        @foreach($levels as $level)
                            <option value="{{$level->id}}" @if (@$_GET['level']&&$_GET['level']  == $level->id)
                            selected="selected" @endif>{{$level->level}}</option>
                        @endforeach
                        <option value="-1" @if (@$_GET['level']&&$_GET['level']  == -1)
                            selected="selected" @endif>Others</option>
                    </select>
                </div>
                <div class="field">
                    <label>Age Range</label>
                    <select class="ui fluid dropdown" name="age_range">
                        <option value="0">All Age Range</option>
                        <option value="1" @if(@$_GET['age_range']&&$_GET['age_range'] == 1) selected @endif> <= 25
                        </option>
                        <option value="2" @if(@$_GET['age_range']&&$_GET['age_range'] == 2) selected @endif>26 - 34
                        </option>
                        <option value="3" @if(@$_GET['age_range']&&$_GET['age_range'] == 3) selected @endif>35 - 44
                        </option>
                        <option value="4" @if(@$_GET['age_range']&&$_GET['age_range'] == 4) selected @endif> >= 45
                        </option>
                        <option value="-1" @if(@$_GET['age_range']&&$_GET['age_range'] == -1) selected @endif> Others
                        </option>
                    </select>
                </div>

            </div>

            <button type="submit" class="ui button" tabindex="0">Submit Order</button>
            <br><br>
        </form>
        <div class="ui center aligned relaxed grid customized-width">
            <div class="one column row">
                <h1 class="ui header" style="height: 80px;    color: #df2020;">
                Responses
                    <div class="sub header">{{ $focus_result[0]['count'] }}</div>
                </h1>
            </div>
        </div>
        <hr>
        <!-- <a class="ui primary button" href="./focus.html">Focus Charts</a> -->
        <div class="ui center aligned relaxed grid customized-width">
            <div class="one column row">
                <h1 class="ui header">
                    Main Result
                    <div class="sub header">{{(int)($focus_result[0]['value'] + $focus_result[1]['value']) /2  }}%</div>
                </h1>
            </div>
        </div>
        <div class="ui center aligned relaxed grid customized-width">
            @php($x = 0)
            @foreach($focus_result as $focus)
                <div class="one column row">
                    <div class="one column row">
                        <h1 class="ui header">
                            {{$focus['key']}}
                            <div class="sub header">{{$focus['value']}}%</div>
                        </h1>
                    </div>
                    <div class="ui relaxed grid width-100" style="">
                        @foreach($focus['dimensional_results'] as $dimensional)
                            <div class="sixteen wide column">
                                <div class="one column row">
                                    <h3 class="ui header">
                                        {{$dimensional['key']}}
                                        <div class="sub header">{{$dimensional['value']}}%</div>
                                    </h3>
                                </div>
                                <div class="ui relaxed grid">
                                    <div class="three column row">
                                        @foreach($dimensional['dimensional_results'] as $val)
                                            
                                            <div class="column level-4">
                                                <h4 class="ui header" style="margin-bottom: 30px;">
                                                    {{$val['key']}}
                                                    <div class="sub header">{{$val['value']}}%</div>
                                                </h4>
                                                <div class="two column row" style="display:flex">
                                                    <div class="column level-4" style="width:50%">
                                                        <h5 class="ui header">
                                                            Q{{$x+1}}
                                                            <div class="sub header">{{$val['questions']['q1']}}%</div>
                                                        </h5>
                                                    </div>
                                                    <div class="column level-4" style="width:50%">
                                                        <h5 class="ui header">
                                                            Q{{$x+2}}
                                                            <div class="sub header">{{$val['questions']['q2']}}%</div>
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                            @php($x +=2)
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

@endsection
