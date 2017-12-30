@extends('layouts.app')

@section('content')
    <audio id="ChatAudio">
        <source src="{{ asset('sounds/chat.mp3') }}">
    </audio>
    <meta name="friendId" content="{{ $friend->id }}">
    <div class="container">
        <div class="column is-8 is-offset-2">
            <div class="panel">
                <div class="panel-heading">
                    {{ $friend->name }}
                    <div class="contain is-pulled-right">
                        <a href="{{ url('/chat') }}" class="is-link"><i class="fa fa-arrow-left"></i> Go Back</a>
                    </div>
                    <chat v-bind:chats="chats" v-bind:userid="{{ Auth::user()->id }}" v-bind:friendid="{{ $friend->id }}"></chat>
                </div>
            </div>
        </div>
    </div>
@endsection
