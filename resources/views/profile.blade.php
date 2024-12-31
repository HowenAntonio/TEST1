@extends('layouts.app')

@section('content')
    

    <div class="jumbotron position-relative">
        <div class="overlay position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(0, 0, 0, 0.6);"></div>
        <div class="container position-relative mt-5">
            <h1 class="pt-5 text-light fw-bold text-center display-4">My Profile</h1>
            <img src="/images/profilepicture.png" class="img-fluid d-block mx-auto mt-5" alt="profile picture" style="width: 240px; height: 200px;">
            <p class="d-block mx-auto text-light text-justify mt-5 fs-5" style="max-width: 400px;">
                Username : {{ Auth::user()->name }}
            </p>
            <p class="d-block mx-auto text-light text-justify mt-5 fs-5" style="max-width: 400px;">
                Email : {{ Auth::user()->email }}
            </p>
            <p class="d-block mx-auto text-light text-justify mt-5 fs-5" style="max-width: 400px;">
                Gender : {{ Auth::user()->gender }}
            </p>
            <p class="d-block mx-auto text-light text-justify mt-5 fs-5 pb-5" style="max-width: 400px;">
                Date of Birth : {{ Auth::user()->date_of_birth }}
            </p>

            <div class="d-flex justify-content-center pb-5">
                <a class="btn btn-danger" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                    Logout
                </a>
            </div>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            </div>
    </div>    
@endsection
