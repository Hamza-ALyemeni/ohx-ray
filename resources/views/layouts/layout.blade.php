<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>OHX-Ray</title>
    <link rel="icon" type="image/png" href="{{asset('assets')}}/imgs/1.svg"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css"
          integrity="sha512-8bHTC73gkZ7rZ7vpqUQThUDhqcNFyYi2xgDgPDHc+GXVGHXq+xPjynxIopALmOPqzo9JZj0k6OqqewdGO3EsrQ=="
          crossorigin="anonymous"/>
    @yield('css')
    <link rel="stylesheet" href="{{asset('assets')}}/app.css"/>
    <link rel="stylesheet" href="{{asset('assets')}}/breakPoints.css"/>
</head>

<body>
<div class="container">
    <div class="main-nav navbar-header navbar-content">
        <i class="fas fa-bars fa-2x"></i>
        <div class="ui icon input search-div">
            <i class="search icon"></i>
            <input type="text" placeholder="Search..." class="search-input"/>
        </div>
        @if(Auth::user()->role == 1)
        <a href="{{url('notification')}}" class="notification" style="margin-right: 20px;">
            <i class="fas fa-bell fa-2x"></i>
            @if(count_notification()>0)
                <span class="badge">{{count_notification()}}</span>
            @endif
        </a>
        @endif
        <div class="navbar-account">
            <img src="{{Auth::user()->logo}}" style="float: right"/>
        </div>
        <!--<div class="navbar-settings">-->
        <!--    <i class="fas fa-cogs fa-2x"></i>-->
        <!--</div>-->
    </div>
    <div class="sidebar sidebar-hidden">
        <div class="close-icon">
            <i class="fas fa-times fa-lg"></i>
        </div>
        <div class="sidebar-logo">
            <img src="{{asset('assets')}}/imgs/1.svg"/>
        </div>
        <div class="mobile-view">
            <div class="subItems-collapse">
                <ul class="subItems-ul">
                    <li class="sidebar-link {{ (request()->is('/*')) ? 'active' : '' }}">
                        <a href="{{url('/')}}"><i class="fas fa-th fa-lg"></i>Dashboard</a>
                    </li>
                    @if(Auth::user()->role == 0)
                        <li class="sidebar-link {{ (request()->is('company*')) ? 'active' : '' }}">
                            <a href="{{url('company')}}" class=""><i class="fas fa-users fa-lg"></i>Organizations</a>
                        </li>
                        <li class="sidebar-link {{ (request()->is('survey*')) ? 'active' : '' }}">
                            <a href="{{url('survey')}}" class=""><i class="far fa-list-alt fa-lg"></i>Surveys</a>
                        </li>
                        <li class="sidebar-link {{ (request()->is('comparison*')) ? 'active' : '' }}">
                            <a href="{{url('comparison/1')}}" class=""><i class="fa fa-balance-scale"></i>Comparisons</a>
                        </li>
                        <li class="sidebar-link {{ (request()->is('notification*')) ? 'active' : '' }}">
                            <a href="{{url('notification')}}" class=""><i
                                        class="fas fa-bell fa-lg"></i>Notifications</a>
                        </li>
                        {{--<li class="sidebar-link {{ (request()->is('landing-page*')) ? 'active' : '' }}">--}}
                            {{--<a href="{{url('landing-page')}}" class=""><i class="far fa-envelope fa-lg"></i>Landing Page</a>--}}
                        {{--</li>--}}

                        <li class="sidebar-link {{ (request()->is('faq*')) ? 'active' : '' }}">
                            <a href="{{url('faq/create')}}" class=""><i class="far fa-envelope fa-lg"></i>FAQs</a>
                        </li>
                        <li class="sidebar-link {{ (request()->is('support*')) ? 'active' : '' }}">
                            <a href="{{url('support')}}" class=""><i class="fas fa-headphones fa-lg"></i>Support</a>
                        </li>
                    @else
                        <li class="sidebar-link {{ (request()->is('employee*')) ? 'active' : '' }}">
                            <a href="{{url('employee')}}" class=""><i class="fas fa-users fa-lg"></i>Employees</a>
                        </li>
                        <li class="sidebar-link {{ (request()->is('survey*')) ? 'active' : '' }}">
                            <a href="{{url('survey')}}" class=""><i class="far fa-list-alt fa-lg"></i>Surveys</a>
                        </li>
                        <li class="sidebar-link {{ (request()->is('notification*')) ? 'active' : '' }}">
                            <a href="{{url('notification')}}" class=""><i
                                        class="fas fa-bell fa-lg"></i>Notifications</a>
                        </li>
                        <li class="sidebar-link {{ (request()->is('faq*')) ? 'active' : '' }}">
                            <a href="{{url('faq')}}" class=""><i class="far fa-envelope fa-lg"></i>FAQs</a>
                        </li>
                        <li class="sidebar-link {{ (request()->is('support*')) ? 'active' : '' }}">
                            <a href="{{url('support/create')}}" class=""><i class="fas fa-headphones fa-lg"></i>Support</a>
                        </li>
                    @endif
                    <li class="sidebar-link logout">
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                            <i class="fas fa-sign-out-alt fa-lg"></i>Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    @yield('content')
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
        integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
        crossorigin="anonymous"></script>
<script src="https://code.jquery.com/ui/1.11.2/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.repeater/1.2.1/jquery.repeater.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/min/dropzone.min.js"
        integrity="sha512-9WciDs0XP20sojTJ9E7mChDXy6pcO0qHpwbEJID1YVavz2H6QBz5eLoDD8lseZOb2yGT8xDNIV7HIe1ZbuiDWg=="
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-circle-progress/1.2.2/circle-progress.min.js"
        integrity="sha512-6kvhZ/39gRVLmoM/6JxbbJVTYzL/gnbDVsHACLx/31IREU4l3sI7yeO0d4gw8xU5Mpmm/17LMaDHOCf+TvuC2Q=="
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
<script src="https://kit.fontawesome.com/60942805bb.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
<script src="{{asset('assets')}}//App.js"></script>
<script src="{{asset('assets')}}//app2.js"></script>
@yield('js')
</body>
</html>
