@extends('layouts.app')

@section('header', 'Все статьи')

@section('content')

    @foreach ($articles as $article)
        <a href="{{route('article.show', ['id' => $article->id])}}"><h2>{{$article->name}}</h2></a>
        <div>
            {{Str::limit($article->body, 200)}}
        </div>
    @endforeach

@endsection
