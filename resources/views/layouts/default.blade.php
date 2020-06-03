
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>{{ $title ?? 'Default title' }}</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">

    <!-- Style -->
    <style>
        .nav-link {
            color: white;
        }

        .nav-link:hover {
            color: grey;
        }
    </style>
</head>

<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="/">Favs'</a>
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link active" href="/">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="{{ route('links.index') }}">My favs</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="{{route('links.create')}}">Add a fav</a>
        </li>
    </ul>
</nav>

<main role="main" class="container">

    <div class="starter-template" style="padding-top: 100px">
        @include('includes.message')
        @yield('content')
    </div>

</main>

</body>
</html>
