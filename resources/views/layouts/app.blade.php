<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mon Projet BTS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">


<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm fixed-top">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand fw-bold" href="#">G_Student</a>

        <!-- Toggle pour mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Liens -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto align-items-center">

                @auth
                    @php $role = Auth::user()->role; @endphp

                    <!-- Dashboard selon rôle -->
                    @if($role == 'admin')
                        <li class="nav-item me-2">
                            <a href="{{ route('admin.dashboard') }}" class="btn btn-primary btn-sm rounded-pill shadow-sm">
                                Dashboard
                            </a>
                        </li>
                    @elseif($role == 'professeur')
                        <li class="nav-item me-2">
                            <a href="{{ route('professeur.dashboard') }}" class="btn btn-primary btn-sm rounded-pill shadow-sm">
                                Dashboard
                            </a>
                        </li>
                    @elseif($role == 'etudiant')
                        <li class="nav-item me-2">
                            <a href="{{ route('etudiant.dashboard') }}" class="btn btn-primary btn-sm rounded-pill shadow-sm">
                                Dashboard
                            </a>
                        </li>
                    @endif

                    <!-- Bouton Déconnexion -->
                    <li class="nav-item">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm rounded-pill shadow-sm">
                                Déconnexion
                            </button>
                        </form>
                    </li>
                @endauth

            </ul>
        </div>
    </div>
</nav>

<style>
    .navbar-brand {
        font-size: 1.5rem;
        letter-spacing: 1px;
    }

    .btn-sm {
        padding: 0.35rem 0.9rem;
        font-size: 0.85rem;
    }

    .rounded-pill {
        border-radius: 50px !important;
    }

    .shadow-sm {
        box-shadow: 0 2px 6px rgba(0,0,0,0.15);
    }

    body {
        padding-top: 70px; /* Pour que le contenu ne soit pas caché sous la navbar fixe */
    }
</style>


<div class="container mt-4">
    @yield('content')
</div>
</body>
</html>
