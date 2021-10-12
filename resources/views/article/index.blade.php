@extends('layouts.app')

@section('header', 'Все статьи')

@section('content')
    {{ Form::open(['url' => route('article.index'), 'method' => 'GET']) }}
    {{ Form::search('article', $searchString) }}
    {{ Form::submit('Submit') }}
    {{ Form::close() }}
    @foreach ($articles as $article)
        <a href="{{route('article.show', ['id' => $article->id])}}"><h2>{{$article->name}}</h2></a>
        <div>
            {{Str::limit($article->body, 200)}}
        </div>
    @endforeach

@endsection
