<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Base styling */
        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }

        /* Navbar styling with slight left padding */
        .navbar {
            background-color: #343a40;
            padding: 0.8rem 1.5rem 0.8rem 2rem;
            /* Left padding to add slight space */
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        }

        .navbar-brand {
            color: #ffffff !important;
            font-weight: 700;
            letter-spacing: 1px;
        }

        .nav-link {
            color: #ffffff !important;
            font-weight: 500;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            transition: background 0.3s, color 0.3s;
        }

        .nav-link:hover {
            color: #ffc107 !important;
            background-color: rgba(255, 255, 255, 0.1);
        }

        /* Dropdown menu styling */
        .dropdown-menu {
            background-color: #444950;
            border-radius: 8px;
            padding: 0.5rem 0;
            box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.15);
            border: none;
        }

        .dropdown-item {
            color: #ffffff;
            font-weight: 500;
            padding: 0.5rem 1.5rem;
            transition: background 0.3s, color 0.3s;
        }

        .dropdown-item:hover {
            color: #ffc107;
            background-color: #555a60;
        }

        /* Responsive alignment for the navbar */
        @media (max-width: 992px) {
            .navbar-nav {
                margin-left: auto;
            }
        }

        /* Layout for main content */
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
        }

        main {
            flex: 1;
            padding-top: 70px;
            padding-bottom: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #1e1e1e;
            position: relative;
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
                <!-- About Me Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="aboutDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        About Me
                    </a>
                    <div class="dropdown-menu text-center" aria-labelledby="aboutDropdown">
                        <a class="dropdown-item" href="{{ route('afiq-detail') }}">Afiq</a>
                        <a class="dropdown-item" href="{{ route('aliff-detail') }}">Aliff</a>
                        <a class="dropdown-item" href="{{ route('sandhiya-detail') }}">Sandhiya</a>
                        <a class="dropdown-item" href="{{ route('iman-detail') }}">Iman</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Main Content Area -->
    <main>
        @yield('content')
    </main>

    <!-- Optional Bootstrap JS and jQuery for interactive components -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>