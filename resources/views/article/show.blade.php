@extends('layouts.app')

@section('content')
    <h1>{{$article->name}}</h1>
    <div>{{$article->body}}</div>
    <small><a href="{{route('article.edit', $article)}}">Изменить</a></small>
@endsection
