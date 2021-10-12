@extends('layouts.app')

@section('header', 'Все статьи')

@section('content')
    <a href="{{route('article.create')}}">Добавить статью</a>
    <h2>{{$flash}}</h2>
    {{ Form::open(['url' => route('article.index'), 'method' => 'GET']) }}
    {{ Form::search('q', $q) }}
    {{ Form::submit('Поиск') }}
    {{ Form::close() }}
    @foreach ($articles as $article)
        <a href="{{route('article.show', ['id' => $article->id])}}"><h2>{{$article->name}}</h2></a>
        <div>
            {{Str::limit($article->body, 200)}}
        </div>
    @endforeach

@endsection
