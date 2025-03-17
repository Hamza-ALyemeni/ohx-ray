@extends('layouts.layout')
@section('content')
    <div class="content">
        <div class="sub-content">
            <div class="survey-actionBtns">
                <p>Support ({{$data->total()}})</p>
                {{--<form class="ui form">--}}
                    {{--<div class="field">--}}
                        {{--<div class="ui selection dropdown filter-by-dropdown w-50">--}}
                            {{--<input type="hidden" name="Filter-By"/>--}}
                            {{--<i class="dropdown icon"></i>--}}
                            {{--<div class="default text">Filter By</div>--}}
                            {{--<div class="menu">--}}
                                {{--<div class="item" data-value="1">Important</div>--}}
                                {{--<div class="item" data-value="2">Announcement</div>--}}
                                {{--<div class="item" data-value="3">Discussion</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</form>--}}
            </div>
            <div class="emplyee-table">
                <table class="ui celled padded table">
                    <thead>
                    <tr>
                        <th>ID:</th>
                        <th>Name:</th>
                        <th>Email:</th>
                        <th>Message:</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $key=>$contact)
                        <tr>
                            <td class="center aligned" style="font-weight: bold">#{{$key+1}}</td>
                            <td class="center aligned">
                                <p>{{$contact->f_name}} {{$contact->l_name}}</p>
                            </td>
                            <td class="center aligned">{{$contact->email}}</td>
                            <td class="center aligned">{{$contact->message}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                    {{ $data->links('pagination') }}

                </table>
            </div>
        </div>
    </div>
@endsection
