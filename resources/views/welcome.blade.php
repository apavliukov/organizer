@extends('app')

@section('content')
    <div class="front-page-container">
        <div class="content">
            <img src="{{ URL::to('/') }}/img/laravel-logo.png" alt="logo" />
            <p class="title">Laravel 5</p>

            <p>Проект &laquo;Органайзер&raquo;</p>
            <p><a href="https://github.com/tanzoor/organizer">Github</a></p>
        </div>
    </div>
@endsection
