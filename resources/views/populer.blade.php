<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @extends('layouts.app')

    @section('content')

        <h1 class="text-center my-5">Populer</h1>
        
        <form method="GET" action="{{ url('/terbaru') }}" class="mb-4">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Search articles by title" value="{{ request()->input('search') }}">
                <button class="btn btn-primary" type="submit">Search</button>
            </div>
        </form>

        <div class="row">
            @foreach ($articles as $article)
                <div class="col-12 h-50 mb-4">
                    <div class="card h-100 border border-danger shadow-lg rounded-lg">
                        <div class="row g-0">
                            <div class="col-md-3">
                                <img src="{{ $article['image'] }}" class="img-fluid" alt="{{ $article['title'] }}" style="width: 300px; height: 200px;">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h4 class="card-title">{{ $article['title'] }}</h4>
                                    <p class="card-text">{{ $article['date'] }}</p>
                                    <p class="card-text">{{ $article['likes'] }} likes</p>
                                    <a href="{{ url($article['link']) }}" class="btn btn-primary">Read More</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    @endsection
</body>
</html>