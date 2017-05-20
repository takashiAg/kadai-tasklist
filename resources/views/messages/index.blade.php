@extends('layouts.app')

@section('content')

    <h1>タスク一覧</h1>

    @if (count($messages) > 0)
        <ul>
            @foreach ($messages as $message)
                <li>{!! link_to_route('messages.show', $message->id, ['id' => $message->id]) !!} : {{ $message->title }} > {{ $message->content }}</li>
                    <br>詳細　: {{ $message->title }} > {{ $message->details }}
            @endforeach
        </ul>
    @endif
    
    {!! link_to_route('messages.create', '新規タスクの投稿') !!}

@endsection