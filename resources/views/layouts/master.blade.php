<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        html,
        body {
            height: 100vh;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            /* Prevents horizontal scrolling */
        }

        /* Custom styles for navbar and layout */
        body {
            margin: 0;
            /* Remove default margin */
        }

        .navbar {
            background-color: #343a40;
            /* Dark background for navbar */
        }

        .navbar-brand,
        .nav-link {
            color: #ffffff !important;
            /* White text color for links */
        }

        .nav-link:hover {
            color: #ffc107 !important;
            /* Gold color on hover */
        }

        .navbar-nav {
            margin-left: auto;
            /* Push navbar items to the right */
        }

        /* Padding to ensure no content overlaps */
        main {
            padding: 20px;
            /* Adjust padding as needed */
        }
    </style>
</head>

<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="{{ route('home') }}">My Portfolio</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">About Me</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Main Content Area -->

    <body class="bg-dark">
        <main class="fullscreen-container">
            @yield('content')
        </main>
    </body>


    <!-- Optional Bootstrap JS and jQuery for interactive components -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>