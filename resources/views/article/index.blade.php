@extends('layouts.app')

@section('header', 'Все статьи')

@section('content')

    @foreach ($articles as $article)
        <h2>{{$article->name}}</h2>
        <div>
            {{Str::limit($article->body, 200)}}
        </div>
    @endforeach

@endsection
