<?php

namespace App\Http\Controllers\api;

use App\Http\Requests\FaqRequest;
use App\Model\Faq;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Faq::all();
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
    public function store(FaqRequest $request)
    {
        $faq =Faq::create($request->all());
        return response()->json([
            'success' => 1,
            'data' => $faq,
            'msg' => 'The Faq has been added successfully'
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function update(FaqRequest $request, Faq $faq)
    {
        $faq->update($request->all());
        return response()->json([
            'success' => 1,
            'data' => $faq,
            'msg' => 'The Employee has been Updated successfully'
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faq $faq)
    {
        $faq->delete();
        return response()->json([
            'success' => 1,
            'msg' => 'The Faq has been deleted successfully'
        ], 200);
    }
}
