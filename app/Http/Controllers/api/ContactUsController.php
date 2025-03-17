<?php

namespace App\Http\Controllers\api;

use App\Http\Requests\ContactRequest;
use App\Model\ContactUs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ContactUs::all();
        return response()->json([
            'success' => 1,
            'data' => $data,
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactRequest $request)
    {
        $contact =ContactUs::create($request->all());
        return response()->json([
            'success' => 1,
            'data' => $contact,
            'msg' => 'Sent successfully'
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\ContactUs  $contactUs
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContactUs $contact_u)
    {
        $contact_u->delete();
        return response()->json([
            'success' => 1,
            'msg' => 'Deleted successfully'
        ], 200);
    }
}
