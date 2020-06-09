@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <a href="{{ route('links.create') }}" class="btn btn-primary">Create a new Fav</a>
                        <h3>Your favs</h3>
                        <ul>
                            @forelse($links as $link)
                                <li style="padding-bottom: 1rem;">
                                    <div>
                                        <p style="margin-bottom: 0">{{ $link->title }}</p>
                                        <em>{{ $link->category->name }}</em><br>
                                        <a href="{{ $link->url }}">{{ $link->url }}</a>
                                    </div>
                                    <div style="padding-top: 1rem; display: flex;">
                                        <a href="/links/{{$link->id}}/edit" class="btn btn-secondary"
                                           style="margin-right: 0.5rem">Edit</a>
                                        <form action="{{ route('links.destroy', $link->id) }}" method="post">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </div>

                                </li>
                            @empty
                                <li>No favorites for the moment</li>
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
