@extends('layouts.master')

@section('content')
<div class="fullscreen-container text-white" style="margin-top: 80px;">
    <div class="container-fluid"> <!-- Changed to container-fluid for full-width layout -->
        <div class="team-grid d-flex flex-wrap justify-content-center">
            <!-- Team Member Card 1 -->
            <div class="team-card text-center m-3 p-4 rounded">
                <img src="{{ asset('Assets/avatar2.png') }}" alt="Member Picture" class="img-fluid rounded-circle mb-3 profile-pic">
                <h2 class="member-name">MUHAMMAD AFIQ BIN APANDI</h2>
                <p class="member-position">CB21034</p>
            </div>

            <!-- Team Member Card 2 -->
            <div class="team-card text-center m-3 p-4 rounded">
                <img src="{{ asset('Assets/avatar.png') }}" alt="Member Picture" class="img-fluid rounded-circle mb-3 profile-pic">
                <h2 class="member-name">MUHAMMAD ALIFF I'MAN BIN ZAIRI</h2>
                <p class="member-position">CB21081</p>
            </div>

            <!-- Team Member Card 3 -->
            <div class="team-card text-center m-3 p-4 rounded">
                <img src="{{ asset('Assets/indian-girl.png') }}" alt="Member Picture" class="img-fluid rounded-circle mb-3 profile-pic">
                <h2 class="member-name">SANDHIYA A/P PICHAN</h2>
                <p class="member-position">CB22050</p>
            </div>

            <!-- Team Member Card 4 -->
            <div class="team-card text-center m-3 p-4 rounded ">
                <img src="{{ asset('Assets/Girl.png') }}" alt="Member Picture" class="img-fluid rounded-circle mb-3 profile-pic">
                <h2 class="member-name">IMAN HAJAR MERICAN BINTI MD YUSOFF MERICAN</h2>
                <p class="member-position">CD21092</p>
            </div>
        </div>
    </div>
</div>
@endsection

<style>
    /* Card styling */
    .team-card {
        background: linear-gradient(145deg, #2d2d2d, #1a1a1a);
        border-radius: 15px;
        padding: 20px;
        color: white;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.5);
        position: relative;
        overflow: hidden;
        width: 250px;
        /* Set fixed width for uniform sizing */
    }

    /* Hover animation */
    .team-card:hover {
        transform: translateY(-10px) scale(1.05);
        box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.7);
    }

    /* Gradient overlay */
    .team-card::before {
        content: "";
        position: absolute;
        top: 0;
        left: -75%;
        width: 150%;
        height: 100%;
        background: linear-gradient(120deg, rgba(255, 255, 255, 0.2), rgba(255, 255, 255, 0));
        transition: 0.5s;
        transform: skewX(-30deg);
    }

    .team-card:hover::before {
        left: 100%;
    }

    /* Text styling */
    .member-name {
        font-size: 1.2rem;
        font-weight: 700;
        color: #ff7e5f;
        margin-top: 10px;
        text-shadow: 0px 2px 3px rgba(0, 0, 0, 0.3);
    }


    .member-position {
        font-size: 1rem;
        color: #feb47b;
        margin-top: 5px;
        font-weight: 500;
    }

    /* Profile picture animation */
    .profile-pic {
        width: 120px;
        height: 120px;
        transition: transform 0.3s ease;
        box-shadow: 0px 0px 15px rgba(255, 255, 255, 0.2);
    }

    .team-card:hover .profile-pic {
        transform: scale(1.1) rotate(5deg);
    }

    /* Align cards in a single row on large screens */
    .team-grid {
        gap: 20px;
        max-width: 1200px;
        /* Adjust max-width for full-row display */
    }

    /* Responsive breakpoints */
    @media (max-width: 992px) {
        .team-grid {
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: space-evenly;
        }
    }

    @media (max-width: 768px) {
        .team-card {
            width: 100%;
        }
    }
</style>