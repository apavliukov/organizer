@extends('app')

@section('content')
    <div class="container">
        <p><a href="{{ url('/tasks') }}"><< все задачи</a></p>
        
        <h2>Задача &laquo;{{ $task->name }}&raquo;</h2>

        <div class="meta">
            <p>Дата создания : {{ $task->created_at }}</p>

            @if ($task->completed)
                <p class="completed">Задача выполнена!</p>
            @else
                <p class="meta">Выполнить задачу до : <span class="deadline">{{ $task->expiration }}</span></p>
            @endif

        </div>

        <h3>Описание</h3>
        <p>{{ $task->description }}</p>
    </div>
@endsection