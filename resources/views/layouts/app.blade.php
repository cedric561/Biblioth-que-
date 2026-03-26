<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mon Projet BTS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Mon Projet BTS</a>
        <ul class="navbar-nav ms-auto">
            @auth
                @php $role = Auth::user()->role; @endphp
                @if($role == 'admin')
                    <li class="nav-item"><a href="{{ route('admin.dashboard') }}" class="btn btn-primary btn-sm">Dashboard</a></li>
                @elseif($role == 'professeur')
                    <li class="nav-item"><a href="{{ route('professeur.dashboard') }}" class="btn btn-primary btn-sm">Dashboard</a></li>
                @elseif($role == 'etudiant')
                    <li class="nav-item"><a href="{{ route('etudiant.dashboard') }}" class="btn btn-primary btn-sm">Dashboard</a></li>
                @endif

                <li class="nav-item ms-2">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm">Déconnexion</button>
                    </form>
                </li>
            @endauth
        </ul>
    </div>
</nav>

<div class="container mt-4">
    @yield('content')
</div>
</body>
</html>
