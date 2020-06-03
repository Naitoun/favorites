@extends('layouts.default')
@section('content')
    <h1>This is a favorite</h1>
    <em>{{ $link->title }}</em>
    <a href="{{$link->url}}">{{$link->url}}</a>


@endsection
