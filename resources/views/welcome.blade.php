@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="container">
            <h1 class="title">LARAVEL CHAT APPLICATION</h1>
            <h2 class="subtitle">
                Learn How to build a Real Time Chat Application using Laravel 5.5
            </h2>
            <a href="{{ Auth::check() ? route('chat.index') : route('login') }}" class="button is-primary is-outlined">Get Started</a>
        </div>
    </section>
@endsection
