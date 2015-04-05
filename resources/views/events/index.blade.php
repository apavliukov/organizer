@extends('app')

@section('content')
    <div class="container">
        <h2>Мероприятия</h2>

        <a href="{{ route('events.create') }}">Добавить мероприятие</a>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Название</th>
                    <th>Дата и время</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($events as $event)
                    <tr>
                        <td><a href="{{ route('events.show', $event->slug) }}">{{ $event->name }}</a></td>
                        <td>{{ $event->dateTime }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection