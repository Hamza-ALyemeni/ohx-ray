<?php

function count_notification(){
    return \App\Model\Notification::where('company_id',Auth::user()->company->id)->where('is_read',0)->count();
}
function send_email($data)
{
    \Illuminate\Support\Facades\Mail::send('email', $data, function ($message) use ($data) {
        $message->to($data['to'], 'OHX')->subject('OHX Survey');
    });
}