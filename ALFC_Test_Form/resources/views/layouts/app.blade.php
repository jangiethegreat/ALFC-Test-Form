<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALFC Design Phase</title>
    <!-- Include Bootstrap CSS from a CDN -->
   <!-- Head Contents (Meta tags, Title, Stylesheets) -->
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- DataTables CSS -->
    <link href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- Other Stylesheets -->
</head>
<body>
    <!-- Body Contents -->

    <!-- Include jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Include Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!-- Include DataTables JS -->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>

    <!-- Custom Scripts -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('assets/ALFC Logo nav.png') }}" alt="Your Image Alt Text">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <!-- Show dropdown items on smaller screens -->
                
                    <div class="dropdown-menu d-block d-lg-none">
                    <a class="dropdown-item" href="#">
                            <img src="{{ asset('assets/nav profile.png') }}" alt="Icon" >
                             Profile
                        </a>
                        <a class="dropdown-item" href="#">
                            <img src="{{ asset('assets/nav dashboard.png') }}" alt="Icon" >
                            Dashboard
                        </a>
                        <a class="dropdown-item" href="#">
                            <img src="{{ asset('assets/nav application.png') }}" alt="Icon" >
                            Application Forms
                        </a>
                        <a class="dropdown-item" href="#">
                            <img src="{{ asset('assets/nav logout.png') }}" alt="Icon" >
                            Logout
                        </a>
                    </div>

                <!-- Show image and dropdown toggle on larger screens -->
                <li class="nav-item dropdown d-none d-lg-block">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{ asset('assets/menu.png') }}" alt="Your Image Alt Text">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">
                            <img src="{{ asset('assets/nav profile.png') }}" alt="Icon" >
                             Profile
                        </a>
                        <a class="dropdown-item" href="#">
                            <img src="{{ asset('assets/nav dashboard.png') }}" alt="Icon" >
                            Dashboard
                        </a>
                        <a class="dropdown-item" href="#">
                            <img src="{{ asset('assets/nav application.png') }}" alt="Icon" >
                            Application Forms
                        </a>
                        <a class="dropdown-item" href="#">
                            <img src="{{ asset('assets/nav logout.png') }}" alt="Icon" >
                            Logout
                        </a>
                    </div>
                </li>
            </ul>
        </div>
        <!-- Show dropdown content on smaller screens -->
        
    </nav>

    <div>
        @yield('content')
    </div>

    
</body>
</html>