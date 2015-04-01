@extends('app')

@section('custom_styles')
    <link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css' />

    <style>
        body {
            margin: 0;
            padding: 0;
            color: #B0BEC5;
        }

        .container {
            text-align: center;
            vertical-align: middle;
        }

        .content {
            text-align: center;
            display: inline-block;
            font-size: 24px;
        }

        .title {
            font-size: 96px;
            margin-bottom: 40px;
            font-family: 'Lato', Arial, sans-serif;
        }

        .content img {
            width: 20%;
        }
    </style>
@endsection

@section('content')
    <div class="container">
        <div class="content">
            <img src="{{ URL::to('/') }}/img/laravel-logo.png" alt="logo" />
            <p class="title">Laravel 5</p>
            <p>{{ $project['name'] }}</p>

            <p><a href="{{ $project['github'] }}">Github</a></p>
        </div>
    </div>
@endsection
