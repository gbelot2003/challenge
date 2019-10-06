@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Dashboard</div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            You are logged in!
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
@endsection
