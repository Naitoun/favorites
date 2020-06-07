@extends('layouts.app')
@section('content')

    <?php
        $link = $data['link'];
        $categories = $data['categories'];
    ?>


    <h1>Edit a favorite</h1>
    <p>Edit your favorites, modify the title, the url or the category</p>

    <div style="padding: 2rem 0">
        <h4>{{ $link->title }}</h4>
        <em>{{ $link->category->name }}</em><br>
        <a href="{{ $link->url }}">{{ $link->url }}</a>
    </div>

{{--    Not sure for the second parameter in the route --}}
    <form action="{{ route('links.update', $link->id) }}" method="post">
        <div class="form-group">
            @method('PUT')
            @csrf
            <label for="inputTitle">Title of your fav</label>
            <input type="text" class="form-control" for="inputTitle" name="title"
                   value="{{ $link->title }}">
        </div>
        <div class="form-group">
            <label for="inputUrl">URL</label>
            <input type="text" class="form-control" for="inputUrl" name="url" value="{{ $link->url }}">
        </div>
        <div class="form-group">
            <label for="inputCategory">Choose a category</label>
            <select name="category" id="" class="form-control">
                <option value="{{ $link->category_id }}">{{ $link->category->name }}</option>
                @forelse($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @empty
                    <li>No category for the moment</li>
                @endforelse
            </select>
        </div>
        <button type="submit" class="btn btn-success">Modify</button>
    </form>
@endsection
