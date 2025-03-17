@extends('layouts.layout')
@section('content')
<div class="content">
      <div class="sub-content">
        <div class="emp-actionBtns">
          <p>Employees ({{$data->total()}})</p>

          <!-- <a  href="{{url('employee/create')}}" class="ui green button">Add Employee</a> -->
        </div>
        {{--<form class="ui form">--}}
          {{--<div class="field">--}}
            {{--<div class="ui selection dropdown">--}}
              {{--<input type="hidden" name="Filter-By" />--}}
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
        <div class="emplyee-table">
          <table class="ui celled padded table">
            <thead>
              <tr>
                <th>Employee Name</th>
                <th>Employee ID</th>
                <th>Employee Email</th>
                <th>Phone Number</th>
                <th>Level</th>
                <th>Gender</th>
                <th>Nationality:</th>
                <th>Survey No.</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
            @foreach($data as $employee)
              <tr>
                <td class="center aligned">{{$employee->f_name}} {{$employee->l_name}}</td>
                <td class="center aligned">{{$employee->employee_id}}</td>
                <td  class="center aligned">{{$employee->email}}</td>
                <td class="center aligned">{{$employee->phone}}</td>
                <td class="center aligned">{{@$employee->sub_level? $employee->sub_level->sub_level : '-'}}</td>
                <td class="center aligned">{{($employee->gender==1)?'Male':(($employee->gender==2)?'Female':"")}}</td>
                <td class="center aligned">{{($employee->country_id == 184 ) ? 'Local' : (($employee->country_id != null)? 'Expat' : '-')}}</td>
                <td  class="center aligned">{{$employee->surveys_count}}</td>
                <td  class="center aligned">
                  <div class="ui right dropdown item">
                    <button class="ui button">
                      <i class="fas fa-ellipsis-v"></i>
                    </button>
                    <div class="menu">
                      <h4 class="ui header">
                        <i class="fas fa-tags marg"></i>choose an action
                      </h4>
                        <a class="item" href="{{url('employee/'.$employee->id.'/edit')}}">edit</a>
                        <a class="item"
                           onclick=" event.preventDefault(); var r = confirm('are you sure?'); if (r==true){document.getElementById('delete-row{{$employee->id}}').submit();}">Delete</a>
                        <form method="post" id="delete-row{{$employee->id}}"
                              action="{{ url('employee/'.$employee->id) }}"
                              style="display: none;">
                            <input name="_method" type="hidden" value="DELETE">
                            {{ csrf_field() }}
                        </form>
                    </div>
                  </div>
                </td>
              </tr>
              @endforeach
            </tbody>
              {{ $data->links('pagination') }}

          </table>
        </div>
      </div>
    </div>
    @endsection
