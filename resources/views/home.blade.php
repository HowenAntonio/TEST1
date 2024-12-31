<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>

@extends('layouts.app')

@section('content')
   

    <div class="jumbotron position-relative" style="background-image: url('/images/home.jpg'); background-position: center; background-size: cover; height: 50vh;">
            <div class="overlay position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(0, 0, 0, 0.5);"></div>
            <div class="container position-relative mt-5">
                <h1 class="pt-5 text-light fw-bold text-center display-4">Welcome to MentalHelp</h1>
                <p class="d-block mx-auto text-light text-center mt-5 fs-3" style="max-width: 800px;">
                    Your go-to source for information, insights, and resources about mental health and well-being.
                </p>
            </div>
        </div>

        <h3 class="pt-5 pb-2 fw-bold text-center display-6" style="color: #953D55;">Featured Event</h3>
        <div class="col-12 h-50 mb-4">
                    <div class="card h-100 shadow-lg rounded-lg" >
                        <div class="row g-0">
                            <div class="col-md-3">
                                <img src="/images/event3.jpg" class="img-fluid" alt="Featured 1" style="width: 300px; height: 200px;">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h4 class="card-title">Event 3</h4>
                                    <p class="card-text">2025-1-20</p>
                                    <a href="/events/event3" class="btn btn-primary">See Details</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

        <h3 class="pt-5 pb-2 fw-bold text-center display-6" style="color: #953D55;">Featured Article</h3>
        <div class="col-12 h-50 mb-4">
                    <div class="card h-100 shadow-lg rounded-lg" >
                        <div class="row g-0">
                            <div class="col-md-3">
                                <img src="/images/article1.png" class="img-fluid" alt="Featured 2" style="width: 300px; height: 200px;">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h4 class="card-title">Article 1</h4>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pulvinar hendrerit ante ut dapibus. Duis finibus nulla at hendrerit mollis...</p>
                                    <a href="/articles/article1" class="btn btn-primary">Read More</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>




        
        <div class="jumbotron position-relative mt-5">
            <div class="overlay position-absolute top-0 start-0 w-100 h-100 py-5" style="background-color: rgba(0, 0, 0, 0.5);"></div>
            <div class="container position-relative my-5 py-3">
                <a href="/events" class="btn btn-danger d-block mx-auto mt-3">Check out our events here!</a>
                <a href="/terbaru" class="btn btn-danger d-block mx-auto mt-3 mb-3">Check out our latest articles here!</a>
            </div>
        </div>
@endsection

</body>