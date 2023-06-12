<!DOCTYPE html>
<html>

<head>
    <title>List Toko</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        /* Add some basic styling */
        body {
            margin: 0;
            padding: 0;
            font-family: 'Inter', sans-serif;
        }

        .navbar {
            background-color: #FFFFFF;
            display: flex;
            justify-content: end;
            align-items: center;
            padding: 10px 20px;
            border-bottom: 1px solid #000000;
        }

        .navbar-brand {
            font-weight: bold;
            font-size: 20px;
            text-decoration: none;
            color: #fff;
        }

        .navbar-links {
            list-style: none;
            padding: 0;
            display: flex;
            align-items: center;
        }

        .navbar-links li {
            margin-right: 80px;
        }

        .navbar-links li a {
            color: #000000;
            text-decoration: none;
            transition: color 0.3s ease;
            /* Add transition for smooth effect */
        }

        .navbar-links li a:hover {
            color: #808080;
            /* Set the color on hover */
        }

        .navbar-profile {
            display: flex;
            align-items: center;
            width: 30px;
            height: 30px;
        }

        .searchbar {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 50px;
            margin-bottom: 50px;
        }

        .searchbar input[type="text"] {
            padding: 22px;
            width: 450px;
            border: 1px solid #ccc;
            border-radius: 10px;
            border: 1px solid #000000;
            font-size: 15px;
        }

        .pagination li {
            float: left;
            list-style-type: none;
            margin: 5px;
        }

        .search-results {
            margin-top: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .card {
            background-color: #fff;
            width: 800px;
            height: 180px;
            padding: 25px;
            margin: 10px;
            border-radius: 8px;
            font-family: 'Inter', sans-serif;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border: 1px solid #000000;
            position: relative;
            transition: transform 0.3s ease;
        }

        .card-image {
            width: 250px;
            height: 170px;
            margin-right: 20px;
            border-radius: 0%;
            border: 1px solid #000000;
            object-fit: fill;
        }

        .card-content {
            display: flex;
            align-items: center;
        }

        .card-text {
            flex: 1;
            width: 800px;
            height: 170px;
        }

        .btn {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            font-size: 20px;
            border: 1px solid #000000;
            border-radius: 50%;
            padding: 10px;
            align-items: center;
            background: none;
            cursor: pointer;
            text-decoration: none;
            color: #000000;

        }

        .navbar-hamburger {
            display: flex;
            margin-right: auto;
        }

        .hamburger-icon {
            color: #000000;
            /* Set the color of the hamburger icon */
            font-size: 20px;
            /* Adjust the size of the icon */
            text-decoration: none;
        }

        .hamburger-icon:hover {
            color: #808080;
            /* Set the color of the hamburger icon on hover */
            transition: color 0.3s ease;
        }

        /* ... Your existing styles ... */

        .sidebar {
            position: fixed;
            top: 0;
            left: -200px;
            /* Initially hide the sidebar off the screen */
            width: 200px;
            height: 100vh;
            background-color: #f1f1f1;
            transition: left 0.3s ease;
            z-index: 9999;
        }

        .sidebar-links {
            list-style: none;
            padding: 20px;
        }

        .sidebar-links li {
            margin-bottom: 10px;
            border-bottom: 1px solid #ccc;
            padding-bottom: 5px;

        }

        .sidebar-links li a {
            color: #000000;
            text-decoration: none;
        }

        .sidebar-links li a:hover {
            color: #808080;
        }

        .sidebar.open {
            left: 0;
            /* Show the sidebar when 'open' class is applied */
        }

        .dropdown-menu {
            display: none;
            padding-left: 10px;
        }

        .dropdown-menu li {
            margin-bottom: 5px;
        }

        .dropdown-link.active+.dropdown-menu {
            display: block;
        }

        /* Add responsive styles */
        /* Media Queries */
        @media only screen and (max-width: 768px) {
            .searchbar input[type="text"] {
                width: 100%;
                max-width: 400px;
            }

            .card {
                width: 100%;
            }

            .navbar-links li {
                margin-right: 40px;
            }
        }

        /* ... Rest of your styles ... */
    </style>
</head>



<body>
    <nav class="navbar">
        <div class="navbar-hamburger">
            <a href="#" class="hamburger-icon">
                <i class="fas fa-bars"></i>
            </a>
        </div>

        <ul class="navbar-links">
            <li><a href="#">Home</a></li>
            <li><a href="#">Toko</a></li>
            <li><a href="#">Bandingkan Harga</a></li>
        </ul>
        <div class="navbar-profile">
            <i class="fas fa-user profile-icon"></i>
        </div>
    </nav>

    <div class="searchbar">
        <form action="{{ route('search') }}" method="GET">
            <input type="text" placeholder="Cari Toko" name="search" required />
            <input type="submit" value="CARI" style="display: none;">
        </form>
    </div>

    <div class="search-results">
        <div class="card-container">
            @if ($toko->isNotEmpty())
                @foreach ($toko as $t)
                    <div class="card">
                        <div class="card-content">
                            <img class="card-image" src={{ $t->foto_toko }} alt="Card Image">
                            <div class="card-text">
                                <h2>{{ $t->name }}</h2>
                                <p>{{ $t->kategori_toko }}</p>
                            </div>
                            <a href="{{ route('show', ['id' => $t->id]) }}" class="btn card-button">→</a>
                        </div>
                    </div>
                @endforeach
            @else
                <div>
                    <h2>No posts found</h2>
                </div>
            @endif
        </div>

        <br />
    </div>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>

    <div class="sidebar">
        <ul class="sidebar-links">
            <li><a href="#">Homepage</a></li>
            <li><a href="#">Pengaturan Akun</a></li>
            <li class="dropdown-link"><a href="#">Kategori Toko <i class="fas fa-chevron-down"></i></a></li>
            <ul class="dropdown-menu">
                <li><a href="#">Category 1</a></li>
                <li><a href="#">Category 2</a></li>
                <li><a href="#">Category 3</a></li>
            </ul>
            <li> <a href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log out</a>
            </li>


            <!-- Add more sidebar links as needed -->
        </ul>
    </div>

    <script>
        var hamburgerIcon = document.querySelector('.hamburger-icon');
        var sidebar = document.querySelector('.sidebar');
        var body = document.querySelector('body');
        var dropdownLinks = document.querySelectorAll('.dropdown-link');

        hamburgerIcon.addEventListener('click', function(e) {
            e.stopPropagation(); // Prevent the click event from bubbling up to the body
            sidebar.classList.toggle('open');
        });

        body.addEventListener('click', function() {
            sidebar.classList.remove('open');
        });

        dropdownLinks.forEach(function(link) {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation(); // Prevent the click event from bubbling up to the body
                this.classList.toggle('active');
            });
        });
    </script>
</body>

</html>
