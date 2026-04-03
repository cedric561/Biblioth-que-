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
        margin-bottom: 2rem;
        font-weight: bold;
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
        padding: 30px;
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
            <a href="{{ route('admin.etudiants') }}" class="nav-link">
                <i class="bi bi-people-fill me-2"></i> Étudiants
            </a>
        </li>
        <li class="nav-item mb-2">
            <a href="{{ route('admin.notes') }}" class="nav-link">
                <i class="bi bi-journal-bookmark-fill me-2"></i> Notes
            </a>
            <li class="nav-item mt-4">
            <a href="{{ route('register') }}" class="btn btn-outline-light w-100"><i class="bi bi-plus-circle me-2"></i> Ajouter un rôle</a>
        </li>
        </li>
    </ul>
</div>

<div class="main-content">

    @if (session('professeur'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('professeur') }}

            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card card-custom">
        <h2 class="fw-bold mb-4 text-primary"><i class="bi bi-person-plus-fill me-2"></i>Ajouter un professeur</h2>

        <form method="POST" action="{{ route('admin.storeProfesseur') }}">
            @csrf

            <div class="mb-3">
                <label class="form-label">Nom</label>
                <input type="text" name="name" placeholder="Nom" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" placeholder="Email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Mot de passe</label>
                <input type="password" name="password" placeholder="Mot de passe" class="form-control" required>
            </div>

            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-success">
                    <i class="bi bi-check-lg"></i> Ajouter
                </button>
                <a href="{{ route('admin.professeurs') }}" class="btn btn-secondary">
                    <i class="bi bi-arrow-left me-2"></i> Retour
                </a>
            </div>
        </form>
    </div>
</div>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection
