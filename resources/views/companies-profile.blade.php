@extends('layouts.master-layouts')
@section('title')
@lang('Company Profile')
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
    @slot('title') Organization Profile @endslot
    @endcomponent

<div class="row mb-4">
    <div class="col-xl-3">
        <div class="card h-100">
            <div class="card-body">
                <div class="text-center">
                    <div class="dropdown float-end">
                        <a class="text-body dropdown-toggle font-size-18" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                            <i class="uil uil-ellipsis-v"></i>
                        </a>

                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="{{url('company/'.$data->id.'/edit')}}">Edit</a>
                            <a class="dropdown-item" href="{{url('company')}}">Back</a>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div>
                        <img src="{{$data->logo}}" alt="" class="avatar-lg rounded-circle img-thumbnail">
                    </div>
                    <h5 class="mt-3 mb-1">{{$data->name}}</h5>
                    <p class="text-muted">{{$data->user->email}}</p>

                    <div class="mt-4">
                        <button type="button" class="btn btn-light btn-sm"><i class="uil uil-envelope-alt me-2"></i>
                            Message</button>
                    </div>
                </div>

                <hr class="my-4">

                <div class="text-muted">
                    <h5 class="font-size-16">address</h5>
                    <p>{{$data->user->address}}</p>
                    <div class="table-responsive mt-4">
                        <div>
                            <p class="mb-1">Name :</p>
                            <h5 class="font-size-16">{{$data->name}}</h5>
                        </div>
                        <div class="mt-4">
                            <p class="mb-1">Mobile :</p>
                            <h5 class="font-size-16">{{$data->user->phone}}</h5>
                        </div>
                        <div class="mt-4">
                            <p class="mb-1">E-mail :</p>
                            <h5 class="font-size-16">{{$data->user->email}}</h5>
                        </div>
                        <div class="mt-4">
                            <p class="mb-1">Location :</p>
                            <h5 class="font-size-16">{{$data->user->location}}</h5>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-9">
        <div class="card mb-0">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-bs-toggle="tab" href="#about" role="tab">
                        <i class="uil uil-user-circle font-size-20"></i>
                        <span class="d-none d-sm-block">Employees</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#tasks" role="tab">
                        <i class="uil uil-clipboard-notes font-size-20"></i>
                        <span class="d-none d-sm-block">Surveys</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#messages" role="tab">
                        <i class="uil uil-clipboard-notes font-size-20"></i>
                        <span class="d-none d-sm-block">Valus</span>
                    </a>
                </li>
                
            </ul>
            <!-- Tab content -->
            <div class="tab-content p-5">
                <div class="tab-pane active" id="about" role="tabpanel">
                    <div>
                        <div>
                            <div class="mb-3">
                                <a href="{{url('employee/create/'.$data->id)}}" class="btn btn-success waves-effect waves-light"><i class="mdi mdi-plus me-2"></i> Add New</a>
                            </div>
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
                                    <th scope="col">Employee Name:</th>
                                    <!-- <th scope="col">Employee ID:</th> -->
                                    <th scope="col">Employee Email:</th>
                                    <th scope="col">Phone Number:</th>
                                    <th scope="col">Gender:</th>
                                   <!-- <th scope="col">Nationality:</th> -->
                                    <th scope="col" style="width: 200px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($data->employees as $employee)
                                <tr>
                                    <th scope="row">
                                        <div class="form-check font-size-16">
                                            <input type="checkbox" class="form-check-input" id="contacusercheck1">
                                            <label class="form-check-label" for="contacusercheck1"></label>
                                        </div>
                                    </th>
                                    <td>
                                        <img src="{{$employee->logo}}" alt=""
                                            class="avatar-xs rounded-circle me-2">
                                        <a href="#" class="text-body">{{$employee->f_name}} {{$employee->l_name}}</a>
                                    </td>
                                   <!-- <td >{{$employee->employee_id}}</td> -->
                                    <td>{{$employee->email}}</td>
                                    <td>{{$employee->phone}}</td>

                                    <td>{{($employee->gender==1)?'Male':(($employee->gender==2)?'Female':"")}} </td>
                                   <!-- <td>{{($employee->country_id == 184 ) ? 'Local' : (($employee->country_id != null)? 'Expat' : '-')}}</td> -->
                                    <td>
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item">
                                                <a class="px-2 text-danger"
                                                    onclick=" event.preventDefault(); var r = confirm('are you sure Send invitation?'); if (r==true){document.getElementById('delete-row{{$employee->id}}').submit();}">
                                                    <i  class=" uil-fast-mail-alt  font-size-18"></i>
                                                </a>
                                                    <form method="post" id="delete-row{{$employee->id}}"
                                                        action="{{ url('send_specific_mails') }}"
                                                        style="display: none;">
                                                        <input name="Employees_id[]"  type="hidden" value="{{$employee->id}}]">
                                                        <input type="hidden" name="company_id" value="{{$data->id}}" id="company_id">
                                                        <input type="hidden" name="survey_id" value="1" id="survey_id">
                                                        {{ csrf_field() }}
                                                    </form>
    
                                                </a>
                                                </li>
                                            <li class="list-inline-item">
                                                <a href="{{url('employee/'.$employee->id.'/edit')}}" class="px-2 text-primary"><i
                                                        class="uil uil-pen font-size-18"></i></a>
                                            </li>
                                            <li class="list-inline-item">
                                            <a class="px-2 text-danger"
                                                onclick=" event.preventDefault(); var r = confirm('are you sure?'); if (r==true){document.getElementById('delete-row{{$employee->id}}').submit();}">
                                                <i  class="uil uil-trash-alt font-size-18"></i>
                                            </a>
                                                <form method="post" id="delete-row{{$employee->id}}"
                                                    action="{{ url('employee/'.$employee->id) }}"
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
                        </div>

                    </div>
                </div>

                <div class="tab-pane" id="tasks" role="tabpanel">
                    <div>
                        <h5 class="font-size-16 mb-3">Surveys</h5>
                        <div class="mb-3">
                                <a href="{{url('survey/create')}}" class="btn btn-success waves-effect waves-light"><i class="mdi mdi-plus me-2"></i> Add New</a>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-nowrap table-centered">
                                <tbody>
                                @foreach($data->survey_company as $surveycompany)
                                @if($surveycompany->surveys->type ==0 )
                                    <tr>
                                        <td>
                                            <a href="#" class="fw-bold text-dark">{{$surveycompany->surveys->title}}</a>
                                        </td>

                                        <td>Created {{$surveycompany->created_at}}</td>
                                        <td> {{$surveycompany->date}}</td>
                                        <td>
                                            <div class="form-check font-size-16 text-center">
                                            @if ($surveycompany->surveys->date ===  date('Y-m-d'))
                                            <td style="width: 160px;"><span class="badge bg-soft-primary font-size-12">Active</span></td>
                                            @elseif ($surveycompany->surveys->created_at <  date('Y-m-d'))
                                            <td style="width: 160px;"><span class="badge bg-soft-secondary font-size-12">Waiting</span></td>
                                            @else
                                            <td style="width: 160px;"><span class="badge bg-soft-success font-size-12">Complete</span></td>
                                            @endif

                                            </div>
                                        </td>
                                        <td>
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item dropdown">
                                                <a class="text-muted dropdown-toggle font-size-18 px-2" href="#"
                                                    role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                    <i class="uil uil-ellipsis-v"></i>
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="{{url('company/'.$surveycompany->id.'/report')}}">Report Survey</a>
                                                    <a class="dropdown-item" href="{{url('company/'.$surveycompany->id.'/checkquality')}}">Check quality</a>
                                                    <a class="dropdown-item" href="{{url('company/'.$surveycompany->id.'/live_duration')}}">Live Durations</a>
                                                </div>
                                            </li>
                                        </ul>
                                        </td>
                                    </tr>
                                 @endif
                                 @endforeach
                               
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
                
                <div class="tab-pane" id="messages" role="tabpanel">
                    <div>
                        <h5 class="font-size-16 mb-3">Valus</h5>
                        <div class="mb-3">
                                <a href="#" class="btn btn-success waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="mdi mdi-plus me-2"></i> Add New</a>
                            </div>
                        <div class="table-responsive">
                            <table class="table table-nowrap table-centered">
                                <tbody>
                                @foreach($data->survey_company as $surveycompany)
                                @if($surveycompany->surveys->type ==1 )
                                    <tr>
                                        <td>
                                            <a href="#" class="fw-bold text-dark">{{$surveycompany->surveys->title}}</a>
                                        </td>

                                        <td>Created {{$surveycompany->created_at}}</td>
                                        <td> {{$surveycompany->date}}</td>
                                        <td>
                                            <div class="form-check font-size-16 text-center">
                                            @if ($surveycompany->surveys->date ===  date('Y-m-d'))
                                            <td style="width: 160px;"><span class="badge bg-soft-primary font-size-12">Active</span></td>
                                            @elseif ($surveycompany->surveys->created_at <  date('Y-m-d'))
                                            <td style="width: 160px;"><span class="badge bg-soft-secondary font-size-12">Waiting</span></td>
                                            @else
                                            <td style="width: 160px;"><span class="badge bg-soft-success font-size-12">Complete</span></td>
                                            @endif

                                            </div>
                                        </td>
                                        <td>
                                          <ul class="list-inline mb-0">
                                            <li class="list-inline-item dropdown">
                                                <a class="text-muted dropdown-toggle font-size-18 px-2" href="#"
                                                    role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                    <i class="uil uil-ellipsis-v"></i>
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="{{url('company/'.$surveycompany->id.'/exportValue')}}">Export Data</a>
                                                </div>
                                            </li>
                                          </ul>
                                        </td>
                                    </tr>
                                 @endif
                                    @endforeach

                                </tbody>
                            </table>
                        </div>

                        </div>
                    </div>
                </div>

            </div>


             <!-- staticBackdrop Modal example -->
             <div class="modal fade"  id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                       <form  action="{{url('send_specific_mails')}}" method="post" id="submitNotification">
                        @csrf
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Send Value</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                 <label>Select consultant</label>
                                    <select  class="form-control"  data-placeholder="Choose ..." name="Employees_id[]"required>
                                        @foreach($Employee as $Emp)
                                            <option value="{{$Emp->id}}">{{$Emp->f_name}} {{$Emp->l_name}}</option>
                                        @endforeach
                                    </select> 
                                    <input type="hidden" name="company_id" value="{{$data->id}}" id="company_id">
                                    <input type="hidden" name="survey_id" value="4" id="survey_id">


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
<!-- end row -->
@endsection
