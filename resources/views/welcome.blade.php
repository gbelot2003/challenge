@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @foreach($items as $user)
                    <div class="card">
                        <ul class="list-group list-group-flush">
                            @foreach($user->entries as $entry)
                                <li class="list-group-item">
                                    <div>
                                       <h4><a href="/entries/{{ $entry->slug }}">{{ $entry->title }}</a></h4>
                                        <span style="font-size: 11px">{{ $entry->created_at->format('d/m/Y h:m:s') }}</span>
                                        <p class="list-group-item-text">
                                            {{ str_limit($entry->body, 200, '...') }}
                                        </p>
                                        <hr />
                                    </div>
                                    <div>
                                        <a href="/profile/{{ $user->slug }}">{{ $user->name }}</a>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                        @endforeach
                    </div>
            </div>
        </div>
    </div>
@endsection
