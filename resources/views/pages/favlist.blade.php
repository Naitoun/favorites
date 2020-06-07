@extends('layouts.app')
@section('content')
    <h1>My fav' list</h1>
    <p>Find all your favorites websites!</p>
{{--    TODO : Get the list of link --}}

    <ul>
        @forelse($links as $link)
            <li style="padding-bottom: 1rem;">
                <div>
                    <p style="margin-bottom: 0">{{ $link->title }}</p>
                    <em>{{ $link->category->name }}</em><br>
                    <a href="{{ $link->url }}">{{ $link->url }}</a>
                </div>
                <div style="padding-top: 1rem; display: flex;">
                    <a href="/links/{{$link->id}}/edit" class="btn btn-secondary" style="margin-right: 0.5rem">Edit</a>
                    <form action="{{ route('links.destroy', $link->id) }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>

            </li>
        @empty
            <li>Pas de lien pour l'instant</li>
        @endforelse
    </ul>

@endsection
