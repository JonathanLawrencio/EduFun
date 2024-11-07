<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset(path:'/bootstrap/css/bootsrap.min.css')}}">
    <style>
        .navbar {
            background-color: white;
            height: 60px;
            /* position: sticky; */
            width: 100%;
        }

        .navbar-nav .nav-link {
            font-weight: 600; /* Bold font sesuai gambar */
            margin-right: 20px; /* Memberikan jarak antar link */
        }
        .navbar-nav .nav-link:last-child {
            margin-right: 0; /* Menghilangkan margin pada link terakhir */
        }
       
    </style>
</head>

<body>
    <div class="row">
        <div class="col-12">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="{{ asset('images/Logo.jpg') }}" alt="EduFun Logo" width="40" height="40">
                    </a>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="{{ route('home') }}">Home</a>
                            </li>
                            
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Category
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="{{ route('category', 1) }}">Interactive Multimedia</a></li>
                                    <li><a class="dropdown-item" href="{{ route('category', 2) }}">Software Engineering</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('writer') }}">Writers</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('about') }}">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('popular') }}">Popular</a>
                            </li>
                        </ul>
                       
                    </div>
                </div>
            </nav>
        </div>
    </div>
     
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>