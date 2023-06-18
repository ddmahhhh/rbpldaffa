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
            margin: auto;
            padding: 0;
            font-family: 'Inter', sans-serif;
            width: 80%;
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
            font-weight: 100;
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

        .navbar-tittle {
            display: flex;
            margin-right: auto;
            color: #000000;
            font-weight: 700;
        }
        /* ... Your existing styles ... */

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
        <div class="navbar-tittle">
            <p><strong>E-PASAR</strong></p>
        </div>

        <ul class="navbar-links">
            <li><a href="/dashboard">Beranda</a></li>
            <li><a href="/listtoko">Toko</a></li>
            <li><a href="/banding">Bandingkan Harga</a></li>
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
                            <img class="card-image" src="{{ $t->foto_toko }}" alt="Card Image">
                            <div class="card-text">
                                <h2>{{ $t->name }}</h2>
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

    <script>
        var body = document.querySelector('body');
        var dropdownLinks = document.querySelectorAll('.dropdown-link');


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

