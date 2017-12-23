@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="column is-8 is-offset-2">
            <div class="panel">
                <div class="panel-heading">
                    List of all Friends
                </div>
                @forelse ($friends as $friend)
                    <a href="{{ route('chat.show', $friend->id) }}" class="panel-block">
                        {{ $friend->name }}
                    </a>
                @empty
                    <div class="panel-block">
                        You don't have any friends
                    </div>
                @endforelse
            </div>
        </div>
    </div>
@endsection
