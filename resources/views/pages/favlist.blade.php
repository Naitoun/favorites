@extends('layouts.default')
@section('content')
    <h1>My fav' list</h1>
    <p>Find all your favorites websites!</p>
{{--    TODO : Get the list of link --}}

    <ul>
        @forelse($links as $link)
            <li style="padding-bottom: 1rem">
                <div>
                    <p style="margin-bottom: 0">{{ $link->title }}</p>
                    <em>{{ $link->category->name }}</em><br>
                    <a href="{{ $link->url }}">{{ $link->url }}</a>
                </div>
            </li>
        @empty
            <li>Pas de lien pour l'instant</li>
        @endforelse
    </ul>

@endsection
