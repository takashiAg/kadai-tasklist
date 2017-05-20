@extends('layouts.app')

@section('content')

    <h1>新しいタスク</h1>

    {!! Form::model($message, ['route' => 'messages.store']) !!}

        {!! Form::label('content', 'タスク:') !!}
        {!! Form::text('content') !!}
        {!! Form::label('content', '詳細:') !!}
        {!! Form::text('details') !!}

        {!! Form::submit('投稿') !!}

    {!! Form::close() !!}

@endsection