<?php

namespace App\Http\Controllers;

use App\Model\Company;
use App\Model\Notification;
use Illuminate\Http\Request;
use Auth;
class NotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = Auth::user();
        $query['companies'] = Company::all();
        if($user->role == 0)
            $query['data'] = Notification::filter($request)->orderBy('id','desc')->paginate(10);
        else if($user->role == 1){
            $query['data'] = Notification::filter($request)->orderBy('id','desc')->where('company_id',$user->company->id)->paginate(10);
            Notification::where('company_id',$user->company->id)->update(['is_read'=>1]);
        }
        return view('notifications',$query);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        foreach ($request->company_id as $company_id){
            Notification::create([
                'company_id'=>$company_id,
                'notification'=>$request->notification,
            ]);
        }
        return redirect('notification');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Notification  $notification
     * @return \Illuminate\Http\Response
     */
    public function destroy(Notification $notification)
    {
        $notification->delete();
        return redirect('notification');

    }
}
