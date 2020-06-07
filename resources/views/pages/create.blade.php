@extends('layouts.app')
{{-- TODO : If no user is authentified -> redirect to the root page --}}

@section('content')
    <h1>Add a favorite</h1>
    <p>Add your favorites, give them a title, an url, a category</p>
    <form action="{{ route('links.store') }}" method="post">
        <div class="form-group">
            @csrf
            <label for="inputTitle">Title of your fav</label>
            <input type="text" class="form-control" for="inputTitle" name="title"
                   placeholder="Best website for Laravel">
        </div>
        <div class="form-group">
            <label for="inputUrl">URL</label>
            <input type="text" class="form-control" for="inputUrl" name="url" placeholder="http://...">
        </div>
        <div class="form-group">
            <label for="inputCategory">Choose a category</label>
            <select name="category" id="" class="form-control">
                <option value="">Category</option>
                @forelse($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @empty
                    <li>No category for the moment</li>
                @endforelse
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
