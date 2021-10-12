@extends('layouts.app')

@section('header','Изменить статью')

@section('content')

    {{Form::model($article, ['url' => route('article.update', $article), 'method' => "PATCH"])}}
        @include('article.form')
        {{Form::submit('Обновить')}}
    {{Form::close()}}

@endsection
