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

    /* Main content */
    .main-content {
        margin-left: 250px; /* Espace pour sidebar */
        padding: 40px;
        margin-top: 70px; /* Décalage pour navbar */
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
            <a href="#" class="nav-link"><i class="bi bi-speedometer2"></i> Dashboard</a>
        </li>
        <li class="nav-item mb-2">
            <a href="{{ route('admin.professeurs') }}" class="nav-link"><i class="bi bi-person-badge"></i> Professeurs</a>
        </li>
        <li class="nav-item mb-2">
            <a href="{{ route('admin.etudiants') }}" class="nav-link"><i class="bi bi-mortarboard"></i> Étudiants</a>
        </li>
        <li class="nav-item mb-2">
            <a href="{{ route('admin.notes') }}" class="nav-link"><i class="bi bi-journal-text"></i> Notes</a>
        </li>
        <li class="nav-item mt-4">
            <a href="{{ route('register') }}" class="btn btn-outline-light w-100"><i class="bi bi-plus-circle"></i> Ajouter un rôle</a>
        </li>
    </ul>
</div>

<div class="main-content">
    <h2 class="mb-4">Dashboard Admin</h2>

    <div class="row g-4">


        <div class="col-md-4">
            <div class="card card-custom text-center">
                <h5 class="card-title"><i class="bi bi-person-badge"></i> Professeurs</h5>
                <h2 class="text-primary">{{ $nbProfesseurs }}</h2>
                <a href="{{ route('admin.professeurs') }}" class="btn btn-primary btn-sm mt-2"><i class="bi bi-gear"></i> Gérer</a>
            </div>
        </div>


        <div class="col-md-4">
            <div class="card card-custom text-center">
                <h5 class="card-title"><i class="bi bi-mortarboard"></i> Étudiants</h5>
                <h2 class="text-success">{{ $nbEtudiants }}</h2>
                <a href="{{ route('admin.etudiants') }}" class="btn btn-success btn-sm mt-2"><i class="bi bi-gear"></i> Gérer</a>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card card-custom text-center">
                <h5 class="card-title"><i class="bi bi-journal-text"></i> Notes</h5>
                <h2 class="text-warning"><i class="bi bi-graph-up"></i></h2>
                <a href="{{ route('admin.notes') }}" class="btn btn-warning btn-sm mt-2"><i class="bi bi-eye"></i> Voir</a>
            </div>
        </div>

    </div>
</div>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

@endsection
