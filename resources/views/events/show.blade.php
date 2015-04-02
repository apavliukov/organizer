@extends('app')

@section('content')
    <div class="container">
        <h2>Мероприятие &laquo;{{ $event->name }}&raquo;</h2>

        <div class="meta">
            <p>Дата создания : {{ $event->created_at }}</p>
            <p>Дата и время мероприятия : {{ $event->dateTime }}</p>
        </div>

        <h3>Описание</h3>
        <p>{{ $event->description }}</p>
    </div>
@endsection