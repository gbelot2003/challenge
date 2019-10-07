@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-8">
                        <h4>{{ $item->title }}</h4>
                        <div class="card">
                            <div class="card-body">
                                <span style="font-size: 11px">{{ $item->created_at->format("d/m/Y") }}</span>
                                <p style="text-align: justify">{{ $item->body }}</p>
                                <p class="author">{{ $item->user->name }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-body">
                            <twitter-app username="{{ Auth::user()->name }}"
                                         propietary="{{ Auth::user()->twitter }}"
                                         twitts="{{ Auth::user()->twitter }}"></twitter-app>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
