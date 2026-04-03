@extends('layouts.app')

@section('content')

<style>

    .sidebar {
        position: fixed;
        top: 55px;
        left: 0;
        width: 250px;
        height: 100%;
        background-color: #212529;
        padding: 20px;
        color: #fff;
    }

    .sidebar h4 {
        text-align: center;
        margin-bottom: 2rem;
        font-weight: bold;
    }

    .sidebar .nav-link {
        color: #fff;
        margin-bottom: 1rem;
        display: flex;
        align-items: center;
        transition: 0.3s;
        padding: 10px;
    }

    .sidebar .nav-link:hover {
        background-color: #0d6efd;
        border-radius: 6px;
        color: #fff;
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
    }

    .card-header {
        font-weight: bold;
        font-size: 1.2rem;
    }

</style>


<div class="sidebar">
    <h4>Admin Panel</h4>
    <ul class="nav flex-column">

        <li class="nav-item">
            <a href="{{ route('admin.dashboard') }}" class="nav-link">
                <i style="margin-right: 10px;" class="bi bi-house-door-fill"></i> Accueil
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('admin.professeurs') }}" class="nav-link">
                <i style="margin-right: 10px;" class="bi bi-person-badge"></i> Professeurs
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('admin.etudiants') }}" class="nav-link">
                <i style="margin-right: 10px;" class="bi bi-people-fill"></i> Étudiants
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('admin.notes') }}" class="nav-link">
                <i style="margin-right: 10px;" class="bi bi-journal-bookmark-fill"></i> Notes
            </a>
        </li>

        <li class="nav-item mt-4">
            <a href="{{ route('register') }}" class="btn btn-outline-light w-100">
                <i style="margin-right: 10px;" class="bi bi-plus-circle"></i> Ajouter un rôle
            </a>
        </li>

    </ul>
</div>

<div class="main-content">

    <div class="container">
        @if (session('etudiant'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('etudiant') }}

                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="card card-custom">

            <div class="card-header bg-primary text-white">
                <i class="bi bi-person-plus"></i> Ajouter un étudiant
            </div>

            <div class="card-body">

                <form method="POST" action="{{ route('admin.storeEtudiant') }}">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Nom</label>
                        <input type="text" name="name" class="form-control" placeholder="Entrez le nom" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Entrez l'email" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Mot de passe</label>
                        <input type="password" name="password" class="form-control" placeholder="Entrez le mot de passe" required>
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="{{ route('admin.etudiants') }}" class="btn btn-secondary">
                            <i class="bi bi-arrow-left"></i> Retour
                        </a>

                        <button type="submit" class="btn btn-success">
                            <i class="bi bi-check-circle"></i> Ajouter
                        </button>
                    </div>

                </form>

            </div>
        </div>
    </div>

</div>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

@endsection
