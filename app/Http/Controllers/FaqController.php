<?php

namespace App\Http\Controllers;

use App\Http\Requests\FaqRequest;
use App\Model\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware(['admin'], ['except' => ['index']]);
        $this->middleware(['company'], ['only' => ['index']]);
    }
    public function index()
    {
        $query['data'] = Faq::all();
        return view('faq',$query);
    }

    public function create()
    {
        $query['data'] = Faq::all();
        return view('create_faq',$query);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FaqRequest $request)
    {
        Faq::where('id','!=',1)->delete();
        foreach($request->question as $key=>$value){
            if($request->answer[$key] && $value)
            Faq::create([
                'question'=>$value,
                'answer'=>$request->answer[$key],
            ]);

        }
        return redirect('faq/create')->with('success','updated successfully');
    }

}
