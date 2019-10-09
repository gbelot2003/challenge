@extends('layouts.app')

@section('breadcrumb')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Inicio</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $item->title }}</li>
        </ol>
    </nav>
@stop

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-8">
                        <h4>{{ $item->title }}</h4>
                        <h6 class="card-subtitle mb-2 text-muted"><span style="font-size: 11px">{{ $item->created_at->format("d/m/Y") }}</span></h6>
                        <div class="card">
                            <div class="card-body">
                                <p style="text-align: justify">{{ $item->body }}</p>
                                <p class="author">{{ $item->user->name }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-body">
                            <twitter-app username="{{ $item->user->name }}"
                                         @if(isset(Auth::user()->name))
                                         propietary="{{ Auth::user()->twitter }}"
                                         @else
                                         propietary="null"
                                         @endif
                                         twitts="{{ $item->user->twitter }}"></twitter-app>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
