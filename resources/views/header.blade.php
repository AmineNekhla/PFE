<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .header {
            
            background-color: #f8f9fa;
            padding: 15px 0;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand, .navbar-nav a {
    font-size: 1.5rem;
	font-weight: 500;
	letter-spacing: 0.2rem;
	text-decoration: none;
	color: gainsboro;
	text-transform: uppercase;
	padding: 20px;
	display: block;
}




.navbar-toggler-icon {
    background-color: #6c757d;
}

.navbar-toggler:focus,
.navbar-toggler:hover {
    outline: none;
}

.navbar-toggler {
    border: 1px solid #6c757d;
}

.navbar-toggler:focus-visible {
    outline: auto;
}

.navbar-nav {
    margin-left: auto;
}

.navbar-nav a {
    margin: 0 15px;
    color: #6c757d;
}

.navbar-nav a:hover {
    color:  blue;
}

        @media (max-width: 768px) {
            .navbar-nav {
                margin: 15px 0;
            }

            .navbar-nav a {
                margin: 10px 0;
            }
        }

        .line {
        border-left: 2px solid #6c757d;
        height: 120%;
        color: #6c757d;
    }


    h2 {
    color: #dc3545;
    margin-bottom: 20px;
}
.btn {
    margin-top: 10px;
}
.display {
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 10px;
    margin-top: 15px;
    max-height: 200px;
    overflow-y: auto;
}

    </style>
</head>

<body>
    <header class="header">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="/home">Titre 1</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    @if (auth()->check())
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/service">Home</a>
                        </li>
                       
                        <li class="nav-item">
                            <a class="nav-link" href="/test">Resume</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}">logout</a>
                        </li>
                    </ul>
                    @else
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Register</a>
                        </li>
                    </ul>
                    @endif
                </div>
            </div>
        </nav>
    </header>
    <div class="container mt-4">
        @yield('content')
    </div>
</body>
</html>
