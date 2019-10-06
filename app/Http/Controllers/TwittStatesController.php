<?php

namespace App\Http\Controllers;

use App\TwittStates;
use Illuminate\Http\Request;

class TwittStatesController extends Controller
{
    /**
     * TwittStatesController constructor.
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('show');
    }

    /**
     * @param $tid
     * @return mixed
     */
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
        return $tw->tid;
    }

    /**
     * @param $tid
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Request $request, $tid)
    {
        $tw = TwittStates::where('tid', $tid)->first();
        $tw->delete();
        return response()->json('done', 200);
    }





}
