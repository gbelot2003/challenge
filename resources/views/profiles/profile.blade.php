@extends('layouts.app')

@section('breadcrumb')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Inicio</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $user->name }}</li>
        </ol>
    </nav>
@stop

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-8">
                        <h4>{{ $user->name }}</h4>
                        <div class="list-group">
                            @foreach($items as $item)
                                <div  class="list-group-item">
                                    <a href="{{ route('entries.show', $item->slug) }}"><h5 class="list-group-item-heading">{{ $item->title }}</h5></a>
                                    <span style="font-size: 11px">{{ $item->created_at->format("d/m/Y") }}</span>
                                    <p class="list-group-item-text">
                                        {{ str_limit($item->body, 150, '...') }}
                                    </p>

                                    @if(Auth::user())
                                        @if(Auth::user()->id == $item->user_id)
                                            <div>
                                                <a href="{{ route('entries.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                                            </div>
                                        @endif
                                    @endif

                                </div>
                            @endforeach
                        </div>
                        {{ $items->links() }}
                    </div>
                    <div class="col-md-4">
                        <div class="card-body">
                            @if(isset(Auth::user()->name))
                                {{ $propietaruy =   Auth::user()->twitter}}
                            @else
                                {{ $propietaruy = null}}
                            @endif
                            <twitter-app username="{{ $user->name }}"
                                         propietary="{{ $propietaruy }}"
                                         twitts="{{ $user->twitter }}"></twitter-app>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
