@extends('app')

@section('content')
    <div class="container">
        <h2>Задачи</h2>
        <ul>
            @foreach ($tasks as $task)
                <li><a href="{{ route('tasks.show', $task->slug) }}">{{ $task->name }}</a></li>
            @endforeach
        </ul>
    </div>
@endsection