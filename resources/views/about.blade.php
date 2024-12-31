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
        <div class="jumbotron position-relative" style="background-image: url('/images/about.png'); background-position: center; background-size: cover; height: 80vh;">
            <div class="overlay position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(0, 0, 0, 0.5);"></div>
            <div class="container position-relative mt-5">
                <h1 class="pt-5 text-light fw-bold text-center display-4">ABOUT US</h1>
                <p class="d-block mx-auto text-light text-center mt-5 fs-5" style="max-width: 800px;">
                    MentalHelp is your go-to source for information, insights, and resources about mental health and well-being. We believe in the power of awareness, education, and compassion in addressing mental health challenges.
                    At MentalHelp, we aim to provide an accessible platform where you can find articles, tips, and expert advice on mental health topics. Whether you're seeking to understand mental health better, looking for ways to cope with stress or anxiety, or simply want to be more mindful of your emotional well-being, we're here to support you.
                    Our mission is to break the stigma surrounding mental health, fostering a community where everyone can learn, grow, and thrive. Together, we can build a future where mental well-being is as prioritized as physical health.
                </p>
            </div>
        </div>
    @endsection
</body>
</html>