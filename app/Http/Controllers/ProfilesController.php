<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfilesController extends Controller
{
    public function show($slug)
    {
        $user = User::where('slug', trim($slug))->first();

        if ($user == null){
            return abort(404);
        }

        return view('profiles.profile', compact('user'));



    }
}
