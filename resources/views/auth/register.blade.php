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
        color: #fff;
    }

    .main-content {
        margin-left: 250px;
        padding: 40px;
        margin-top: 70px;
        min-height: 100vh;
        background-color: #f4f6f9;
    }

    .card {
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.08);
    }

    .header-section {
        margin-bottom: 30px;
    }
</style>

<div class="sidebar">
    <h4>Admin Panel</h4>
    <ul class="nav flex-column">
        <li class="nav-item mb-2">
            <a href="{{ route('admin.dashboard') }}" class="nav-link">
                <i class="bi bi-speedometer2 me-2"></i> Dashboard
            </a>
        </li>
        <li class="nav-item mb-2">
            <a href="{{ route('admin.professeurs') }}" class="nav-link">
                <i class="bi bi-person-badge me-2"></i> Professeurs
            </a>
        </li>
        <li class="nav-item mb-2">
            <a href="{{ route('admin.etudiants') }}" class="nav-link">
                <i class="bi bi-mortarboard-fill me-2"></i> Étudiants
            </a>
        </li>
        <li class="nav-item mb-2">
            <a href="{{ route('admin.notes') }}" class="nav-link">
                <i class="bi bi-journal-text me-2"></i> Notes
            </a>
        </li>
        <li class="nav-item mt-4">
            <a href="{{ route('register') }}" class="btn btn-outline-light w-100 active">
                <i class="bi bi-person-plus me-2"></i> Ajouter un rôle
            </a>
        </li>
    </ul>
</div>

<div class="main-content">


    <div class="header-section">
        <h2 class="fw-bold text-primary">
            <i class="bi bi-person-plus-fill me-2"></i> Ajouter un utilisateur
        </h2>
    </div>


    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card p-4">

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Nom</label>
                        <input type="text" name="name" class="form-control" placeholder="Entrer le nom" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Entrer l'email" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Mot de passe</label>
                        <input type="password" name="password" class="form-control" placeholder="Mot de passe" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Rôle</label>
                        <select name="role" class="form-select" required>
                            <option value="">Sélectionner un rôle</option>
                            <option value="professeur">Professeur</option>
                            <option value="etudiant">Étudiant</option>
                        </select>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-success">
                            <i class="bi bi-check-circle me-2"></i> Enregistrer
                        </button>
                    </div>

                </form>

            </div>

        </div>
    </div>

</div>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

@endsection
