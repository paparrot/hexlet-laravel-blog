@extends('layouts.app')

@section('content')
    <h1>{{$article->name}}</h1>
    <div>{{$article->body}}</div>
    <small><a href="{{route('article.edit', $article)}}">Изменить</a></small>
    <br>
    <small><a href="{{route('article.delete', $article)}}" data-confirm="Вы уверены?" data-method="delete" rel="nofollow">Удалить</a></small>
@endsection
