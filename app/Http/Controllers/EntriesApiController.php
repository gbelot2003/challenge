<?php

namespace App\Http\Controllers;

use App\Entry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EntriesApiController extends Controller
{

    /**
     * EntriesApiController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $items = Entry::where('user_id', $id)->orderBy('created_at', 'DESC')->paginate(10);
        return response()->json($items, 200);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
        ]);

        $request['user_id'] = Auth::user()->id;
        $item = Entry::create($request->all());
        return response()->json($item, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
        ]);

        $item = Entry::findOrFail($id);
        $item->update($validated);
        return response()->json($item, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
