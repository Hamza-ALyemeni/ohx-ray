@extends('layouts.layout')
@section('content')
<div class="content">
      <div class="sub-content">
        <div class="support-container">
          <div class="support-form">
            <h1>Frequently Asked Questions</h1>
            <div class="ui styled accordion" class="w-100 mb-2">
                @foreach($data as $key=>$faq)
              <div class="{{ ($key==0) ? 'active' : '' }} title">
                <i class="dropdown icon"></i>
                <h4>{{$faq->question}}</h4>
              </div>
              <div class="{{ ($key==0) ? 'active' : '' }} content">
                <p>
                    {{$faq->answer}}
                </p>
              </div>
                @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
    @endsection
