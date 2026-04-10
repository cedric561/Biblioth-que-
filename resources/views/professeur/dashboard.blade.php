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
        display: flex;
        align-items: center;
        transition: 0.3s;
    }

    .sidebar .nav-link:hover {
        background-color: #0d6efd;
        border-radius: 6px;
        color: #fff;
    }

    .sidebar .nav-link i {
        margin-right: 10px;
        font-size: 1.2rem;
    }

    .main-content {
        margin-left: 250px;
        padding: 40px;
        margin-top: 70px;
        background-color: #f4f6f9;
        min-height: 100vh;
    }

    .card-custom {
        border: none;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.08);
    }

    .btn i {
        margin-right: 5px;
    }
</style>


        <div class="sidebar">
            <h4>Prof Panel</h4>
            <ul class="nav flex-column">
                <li class="nav-item mb-3">
                    <a href="{{ route('professeur.dashboard') }}" class="nav-link">
                        <i class="bi bi-house-fill"></i> Accuel
                    </a>
                </li>
                <li class="nav-item mb-3">
                    <a href="{{ route('professeur.notes') }}" class="nav-link">
                        <i class="bi bi-journal-text"></i> Mes Notes
                    </a>
                </li>
                <li class="nav-item mb-3">
                    <a href="{{ route('professeur.createNote') }}" class="nav-link">
                        <i class="bi bi-plus-circle"></i> Ajouter Note
                    </a>
                </li>
                <li class="nav-item mb-3">
                    <a href="{{ route('professeur.profils') }}" class="nav-link text-white"><i class="bi bi-person-circle"></i> Mon Profil</a>
                </li>
            </ul>
        </div>


<div class="main-content">

    <div class="mb-5">
        <h2 class="fw-bold" style="text-align: center;">Tableau de bord </h2>
        <h3 class="text-muted">Bienvenue,<b style=" color: #0d6efd;">{{ auth()->user()->name }}</b> </h3>
    </div>

    <div class="row g-4">

        <div class="col-lg-6 ">
            <div class="card card-custom h-100">
                <div class="card-body text-center p-5 d-flex flex-column justify-content-center">
                    <h5 class="mb-3"><i class="bi bi-journal-text"></i> Gérer les Notes</h5>
                    <p class="text-muted">Voir, modifier et supprimer vos notes</p>
                    <a href="{{ route('professeur.notes') }}" class="btn btn-primary mt-3">
                        <i class="bi bi-arrow-right-circle"></i> Accéder
                    </a>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-12">
            <div class="card card-custom h-100">
                <div class="card-body text-center p-5 d-flex flex-column justify-content-center">
                    <h5 class="mb-3"><i class="bi bi-plus-circle"></i> Ajouter une Note</h5>
                    <p class="text-muted">Créer une nouvelle note pour un étudiant</p>
                    <a href="{{ route('professeur.createNote') }}" class="btn btn-success mt-3">
                        <i class="bi bi-plus-lg"></i> Ajouter
                    </a>
                </div>
            </div>
        </div>

    </div>

</div>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

@endsection
