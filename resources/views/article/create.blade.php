@extends('layouts.app')

@section('header', 'Новая статья')

@section('content')
    {{ Form::model($article, ['url' => route('article.store')]) }}
        @include('article.form')
        {{Form::submit('Добавить')}}
    {{ Form::close() }}
@endsection
