@extends('layouts.default')
@section('content')
    <h2>{{ $link->title }}</h2>
    <em>{{ $link->category->name }}</em><br>
    <a href="{{$link->url}}">{{$link->url}}</a>
@endsection
