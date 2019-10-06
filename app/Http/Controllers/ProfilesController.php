<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfilesController extends Controller
{
    public function __construct()
    {
    }

    public function show($slug)
    {
        $user = User::where('slug', trim($slug))->first();
        return view('profiles.profile', compact('user'));
    }
}
