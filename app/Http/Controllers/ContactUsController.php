<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Model\ContactUs;
use Illuminate\Http\Request;


class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware(['admin'], ['except' => ['create','store']]);
        $this->middleware(['company'], ['except' => ['index']]);
    }

    public function index()
    {
        $query['data'] = ContactUs::orderBy('id','desc')->paginate(10);
        return view('support',$query);
    }

    public function create()
    {
        return view('support2');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ContactUs::create($request->all());
        return redirect('support/create')->with('success','Sent successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\ContactUs  $contactUs
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContactUs $support)
    {
//        $support->delete();
//        return response()->json([
//            'success' => 1,
//            'msg' => 'Deleted successfully'
//        ], 200);
    }
}
