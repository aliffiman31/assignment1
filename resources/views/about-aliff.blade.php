@extends('layouts.master')

<!-- Include Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<style>
    /* General body styling */
    body {
        background-color: #121212;
        font-family: 'Poppins', sans-serif;
        color: #ffffff;
    }

    /* Container for the main content with top padding */
    .main-container {
        padding-top: 30px;
    }

    /* Styling for all cards with hover effect */
    .card {
        background-color: #1e1e1e;
        border-radius: 15px;
        box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.6);
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .card:hover {
        transform: scale(1.05);
        box-shadow: 0px 8px 25px rgba(255, 255, 255, 0.2);
    }

    /* Inner cards styling */
    .inner-card {
        background-color: #282828;
        border-radius: 10px;
        padding: 20px;
        margin-bottom: 20px;
        box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.3);
    }

    /* Gradient text for titles */
    .card-title {
        background: linear-gradient(90deg, #ff7e5f, #feb47b);
        -webkit-background-clip: text;
        color: transparent;
        font-weight: 700;
    }

    /* Divider styling */
    hr {
        background-color: #444;
    }

    /* Skills and Tools section icons */
    .skill-icon {
        font-size: 2.5rem;
        transition: transform 0.2s;
    }

    .skill-icon:hover {
        transform: scale(1.2);
    }

    /* Font adjustments for text */
    .card p,
    .card h4,
    .card h5 {
        margin: 0;
        font-weight: 500;
    }

    .inner-card p {
        font-size: 0.95rem;
        color: #b0b0b0;
    }

    /* Responsive settings for smaller devices */
    @media (max-width: 992px) {
        .inner-card {
            padding: 15px;
        }

        .skill-icon {
            font-size: 2rem;
        }

        .main-container {
            padding-top: 15px;
        }
    }

    @media (max-width: 768px) {
        .inner-card p {
            font-size: 0.9rem;
        }

        .card-title {
            font-size: 1.2rem;
        }
    }
</style>

@section('content')
<div class="container main-container">
    <div class="row">
        <!-- Left Section: Personal Details and Education -->
        <div class="col-md-5 mb-4">
            <div class="card shadow-lg border-0">
                <div class="card-body">

                <div class="team-card text-center m-3 p-4 rounded">
                <img src="{{ asset('Assets/iman.png') }}" alt="Member Picture" class="img-fluid rounded-circle mb-3 profile-pic">
            </div>
                    <!-- Details Inner Card -->
                    <div class="inner-card p-3 mb-3">
                        <h5 class="card-title">Details</h5>
                        <p class="card-text">
                            Hi! I'm Aliff I'man, a passionate Software Developer and a final-year student pursuing a Bachelor's in Computer Science (Software Engineering) at Universiti Malaysia Pahang Al Sultan Abdullah (UMPSA). I am dedicated to creating efficient and user-friendly web and mobile applications.
                        </p>
                    </div>
                    <!-- Education Inner Card -->
                    <div class="inner-card p-3">
                        <h5 class="card-title">Education</h5>
                        <p>Bachelor of Computer Science (Software Engineering)</p>
                        <p>Universiti Malaysia Pahang Al Sultan Abdullah (UMPSA)</p>
                        <p>Expected Graduation: 2025</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Section: Skills and Tools -->
        <div class="col-md-7">
            <!-- Skills Section -->
            <div class="card shadow-lg border-0 mb-4">
                <div class="card-body">
                    <div class="inner-card p-3 mb-3">
                        <h4 class="card-title mb-4 text-center">Skills</h4>
                        <div class="row text-center">
                            <!-- Skill icons -->
                            <div class="col-4 col-md-3 mb-4">
                                <i class="fab fa-html5 text-warning skill-icon"></i>
                                <p class="mt-2">HTML</p>
                            </div>
                            <div class="col-4 col-md-3 mb-4">
                                <i class="fab fa-css3-alt text-primary skill-icon"></i>
                                <p class="mt-2">CSS</p>
                            </div>
                            <div class="col-4 col-md-3 mb-4">
                                <i class="fab fa-js-square text-warning skill-icon"></i>
                                <p class="mt-2">JavaScript</p>
                            </div>
                            <div class="col-4 col-md-3 mb-4">
                                <i class="fab fa-laravel text-danger skill-icon"></i>
                                <p class="mt-2">Laravel</p>
                            </div>
                            <div class="col-4 col-md-3 mb-4">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" alt="PHP" width="48" height="48">
                                <p class="mt-2">PHP</p>
                            </div>
                            <div class="col-4 col-md-3 mb-4">
                                <i class="fas fa-database text-success skill-icon"></i>
                                <p class="mt-2">MySQL</p>
                            </div>
                            <div class="col-4 col-md-3 mb-4">
                                <i class="fas fa-fire text-warning skill-icon"></i>
                                <p class="mt-2">Firebase</p>
                            </div>
                            <div class="col-4 col-md-3 mb-4">
                                <i class="fab fa-java text-danger skill-icon"></i>
                                <p class="mt-2">Java</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tools Section -->
            <div class="card shadow-lg border-0">
                <div class="card-body">
                    <div class="inner-card p-3">
                        <h4 class="card-title mb-4 text-center">Tools</h4>
                        <div class="row text-center">
                            <!-- Tool icons -->
                            <div class="col-4 col-md-3 mb-4">
                                <i class="fab fa-github text-light skill-icon"></i>
                                <p class="mt-2">GitHub</p>
                            </div>
                            <div class="col-4 col-md-3 mb-4">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/androidstudio/androidstudio-original.svg" alt="Android Studio" width="48" height="48">
                                <p class="mt-2">Android Studio</p>
                            </div>
                            <div class="col-4 col-md-3 mb-4">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/flutter/flutter-original.svg" alt="FlutterFlow" width="48" height="48">
                                <p class="mt-2">FlutterFlow</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<style>
/* Profile picture animation */
/* Profile picture styling */
.profile-pic {
        width: 190px;
        height: 150px;
        object-fit: cover;
        border-radius: 50%;
        border: 4px solid;
        background: linear-gradient(135deg, #ff7e5f, #feb47b); /* Border gradient */
        padding: 3px; /* Gap around the picture */
        box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.4);
    }
</style>