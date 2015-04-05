@extends('app')

@section('content')
    <div class="container">
        <h2>Добавить мероприятие</h2>
        <hr />

        {!! Form::open(['url' => 'events']) !!}
            <div class="form-group">
                {!! Form::label('name', 'Название') !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!}
            </div>
            <div class="form-group form-inline">

                <?php

                // Массив месяцев
                $months = [
                        '01' => 'Январь',
                        '02' => 'Февраль',
                        '03' => 'Март',
                        '04' => 'Апрель',
                        '05' => 'Май',
                        '06' => 'Июнь',
                        '07' => 'Июль',
                        '08' => 'Август',
                        '09' => 'Сентябрь',
                        '10' => 'Октябрь',
                        '11' => 'Ноябрь',
                        '12' => 'Декабрь'
                ];

                ?>

                {!! Form::label('day', 'Выберите дату') !!}
                {!! Form::input('number', 'day', $data['day'], ['min' => '1', 'max' => '31', 'class' => 'form-control']) !!}
                {!! Form::select('month', $months, $data['month'], ['class' => 'form-control']) !!}
                {!! Form::input('number', 'year', $data['year'], ['min' => '1970', 'max' => '2020', 'class' => 'form-control']) !!}
            </div>
            <div class="form-group form-inline form-group-lg">
                {!! Form::label('hour', 'Выберите время') !!}
                {!! Form::input('number', 'hour', $data['hour']+1, ['min' => '0', 'max' => '23', 'class' => 'form-control']) !!}
                {!! Form::input('number', 'minute', '00', ['min' => '0', 'max' => '59', 'class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('description', 'Описание') !!}
                {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Добавить', ['class' => 'btn btn-success']) !!}
                {!! Form::reset('Очистить', ['class' => 'btn btn-default']) !!}
            </div>
        {!! Form::close() !!}
    </div>
@endsection