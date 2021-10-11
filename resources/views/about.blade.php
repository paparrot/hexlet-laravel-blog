@extends('layouts.app')
@section('header','О блоге')
@section('content')
<ul>
@foreach($articles as $article)
    <li>
        <h2>{{$article['name']}}</h2>
        <p>{{$article['body']}}</p>
    </li>
@endforeach
</ul>
@endsection
