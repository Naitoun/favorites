@extends('default')
@section('content')
    <h1>Add a favorite</h1>
    <p>Add your favorites, give them a title, an url, a category</p>
    <form action="" method="post">
        <div class="form-group">
            <label for="inputTitle">Title of your fav</label>
            <input type="text" class="form-control" for="inputTitle" placeholder="Best website for Laravel">
        </div>
        <div class="form-group">
            <label for="inputUrl">URL</label>
            <input type="text" class="form-control" for="inputUrl" placeholder="http://...">
        </div>
        <div class="form-group">
            <label for="inputCategory">Choose a category</label>
            <select name="" id="" class="form-control">
                <option value="">Category</option>
            </select>
        </div>
    </form>
@endsection
