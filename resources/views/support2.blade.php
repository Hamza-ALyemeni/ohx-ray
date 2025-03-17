@extends('layouts.layout')
@section('content')
<div class="content">
      <div class="sub-content">
        <div class="support-container">
          <div class="support-form">
            <h1>Send Us A Message</h1>
            <form class="ui form" action="{{url('support')}}" method="post">
                @csrf
              <div class="two fields">
                <div class="field">
                  <input type="text" placeholder="First name" name="f_name" required />
                </div>
                <div class="field">
                  <input type="text" placeholder="Last name" name="l_name" required/>
                </div>
              </div>
              <div class="field">
                <input type="email" placeholder="Email address" name="email" required />
              </div>
              <div class="field">
                <textarea type="text" placeholder="Write A Message here" name="message" required></textarea>
              </div>
              <div class="support-actionBtn">
                <button type="submit" class="ui positive button">Send A Message</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    @endsection
