<?php

namespace App\Http\Controllers;

use App\TwittStates;
use Illuminate\Http\Request;

class TwittStatesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    //get
    public function show($tid)
    {
        $tw = TwittStates::where('tid', $tid)->first();
        if($tw == null){
            return null;
        }
        return $tw->tid;
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function store(Request $request)
    {
        $tw = TwittStates::create($request->all());
        return $tw;
    }





}
