@extends('layouts.app')

@section('content')

<style>

.sidebar {
    position: fixed;
    top: 55px;
    left: 0;
    width: 250px;
    height: 100%;
        background-color: #4b5157;
    color: #fff;
    padding: 20px;
}

.sidebar h4 {
    font-weight: bold;
    margin-bottom: 2rem;
    text-align: center;
}

.sidebar .nav-link {
    color: #fff;
    font-weight: 500;
    margin-bottom: 1rem;
    transition: 0.3s;
}

.sidebar .nav-link:hover {
    background-color: #0d6efd;
    border-radius: 6px;
}


    .main-content {
        margin-left: 250px;
        padding: 40px;
        margin-top: 70px;
        min-height: 100vh;
        background-color: #f4f6f9;
    }

    .card-custom {
        border: none;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.08);
        padding: 20px;
    }

    .card-custom h2 {
        font-weight: bold;
    }

    .btn i {
        margin-right: 5px;
    }
</style>

<div class="sidebar">
    <h4>Admin Panel</h4>
    <ul class="nav flex-column">
        <li class="nav-item mb-2">
            <a href="{{ route('admin.dashboard') }}" class="nav-link">
                <i class="bi bi-house-door-fill me-2"></i> Accueil
            </a>
        </li>
        <li class="nav-item mb-2">
            <a href="{{ route('admin.professeurs') }}" class="nav-link">
                <i class="bi bi-person-badge me-2"></i> Professeurs
            </a>
        </li>
        <li class="nav-item mb-2">
            <a href="{{ route('admin.etudiants') }}" class="nav-link active bg-primary rounded">
                <i class="bi bi-people-fill me-2"></i> Étudiants
            </a>
        </li>
        <li class="nav-item mb-2">
            <a href="{{ route('admin.notes') }}" class="nav-link">
                <i class="bi bi-journal-bookmark-fill me-2"></i> Notes
            </a>
        </li>
         <li class="nav-item mt-4">
            <a href="{{ route('register') }}" class="btn btn-outline-light w-100"><i class="bi bi-plus-circle me-2"></i> Ajouter un Membre</a>
        </li>
    </ul>
</div>

<div class="main-content">

    <h2 class="mb-4 text-primary">
        <i class="bi bi-pencil-square me-2"></i> Modifier l'étudiant
    </h2>

    <div class="card shadow p-4">

        <form action="{{ route('admin.updateEtudiant', $etudiant->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label>Nom</label>
                <input type="text" name="name" class="form-control"
                       value="{{ $etudiant->name }}" required>
            </div>

            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" class="form-control"
                       value="{{ $etudiant->email }}" required>
            </div>

            <button type="submit" class="btn btn-success">
                <i class="bi bi-check-circle"></i> Mettre à jour
            </button>

            <a href="{{ route('admin.etudiants') }}" class="btn btn-secondary">
                Retour
            </a>
        </form>

    </div>

</div>

@endsection
