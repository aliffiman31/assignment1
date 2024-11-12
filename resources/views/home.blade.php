@extends('layouts.master')

<!-- Link to CSS file -->
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">

@section('content')
<div class="fullscreen-container text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 text-start">
                <section>
                    <h1 class="display-4">Hazel Montromery</h1>
                    <h3 class="typing-animation">Software Developer</h3>
                    <p class="mt-3">
                        Hi! I am a passionate Software Developer focused on creating efficient and user-friendly web and mobile applications.
                        Currently, I am a final-year student pursuing a Bachelor's in Computer Science (Software Engineering),
                        with skills in Laravel, Flutter, and Android Studio. I’m dedicated to making impactful software solutions.
                    </p>
                </section>
            </div>
            <div class="col-lg-4 text-center">
                <img src="{{ asset('Assets/avatar.png') }}" alt="Your Picture" class="img-fluid rounded-circle" style="max-width: 300px;">
            </div>
        </div>
    </div>
</div>
@endsection