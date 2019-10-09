@extends('layouts.app')

@section('breadcrumb')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Inicio</a></li>
            <li class="breadcrumb-item"><a href="/home">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Create Entrie</li>
        </ol>
    </nav>
@stop
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-8">
                        <h4>Create</h4>
                        {!! Form::open(['route' => 'entries.store']) !!}
                        @include('entries._form')
                        {!! Form::close() !!}
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
