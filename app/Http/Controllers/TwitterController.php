<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Thujohn\Twitter\Facades\Twitter;

class TwitterController extends Controller
{
    public function show($user){
       $dataUser = trim($user);
       return Twitter::getUserTimeline(['screen_name' => $dataUser, 'count' => 10, 'format' => 'json']);
    }
}
