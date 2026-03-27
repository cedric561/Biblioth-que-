@extends('layouts.app')

@section('content')

<style>
    body {
        background-color: #f4f6f9;
    }

    .sidebar {
        height: 100vh;
        background: #1e293b;
        color: white;
        position: fixed;
        width: 250px;
        padding-top: 20px;
        margin-left: -75px;
        margin-top: -32px;
    }

    .sidebar h4 {
        text-align: center;
        margin-bottom: 30px;
    }

    .sidebar a {
        display: block;
        color: #cbd5e1;
        padding: 12px 20px;
        text-decoration: none;
        transition: 0.3s;
    }

    .sidebar a:hover {
        background: #334155;
        color: white;
        padding-left: 25px;
    }

    .main-content {
        margin-left: 260px;
        padding: 20px;
        margin-top: 10px;
    }

    .card-custom {
        border: none;
        border-radius: 15px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        padding: 20px;
    }

    .stat-card {
        border-radius: 15px;
        color: white;
        padding: 20px;
    }

    .bg-blue {
        background: linear-gradient(135deg, #3b82f6, #2563eb);
    }

    .bg-green {
        background: linear-gradient(135deg, #22c55e, #16a34a);
    }

    .stat-card h2 {
        font-size: 40px;
        font-weight: bold;
    }

</style>


<div class="sidebar">
    <h4>Admin Panel</h4>

    <a href="{{ route('admin.dashboard') }}">🏠 Dashboard</a>
    <a href="{{ route('admin.etudiants') }}">🎓 Gérer Étudiants</a>
    <a href="{{ route('admin.professeurs') }}">👨‍🏫 Gérer Professeurs</a>
    <a href="{{ route('admin.notes') }}">📝 Gérer Notes</a>
    <a href="{{ route('register') }}">➕ Ajouter un rôle</a>
</div>

<div class="main-content" style="margin-left: 260px; padding: 20px;">

    <div style="display:flex" >
        <h1 > Bienvenue,</h1> <h1 class="mb-4" style="color: #c9509d"> <strong>{{ Auth::user()->name }}</strong> </h1>
    </div>

    <div class="row g-4">

        <div class="col-md-6">
            <div class="card shadow-lg border-0 rounded-4 bg-gradient-blue text-white p-4">
                <div class="d-flex align-items-center">
                    <div class="me-3">
                        <i class="bi bi-person-badge" style="font-size: 50px;"></i>
                    </div>
                    <div>
                        <h6 class="mb-2">Professeurs</h6>
                        <h2 class="fw-bold">{{ $nbProfesseurs }}</h2>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-md-6">
            <div class="card shadow-lg border-0 rounded-4 bg-gradient-green text-white p-4">
                <div class="d-flex align-items-center">
                    <div class="me-3">
                        <i class="bi bi-mortarboard" style="font-size: 50px;"></i>
                    </div>
                    <div>
                        <h6 class="mb-2">Étudiants</h6>
                        <h2 class="fw-bold">{{ $nbEtudiants }}</h2>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<style>
    .bg-gradient-blue {
        background: linear-gradient(135deg, #3b82f6, #2563eb);
    }
    .bg-gradient-green {
        background: linear-gradient(135deg, #22c55e, #16a34a);
    }
    .card h2 {
        font-size: 40px;
    }
    .card h6 {
        font-size: 16px;
        text-transform: uppercase;
        opacity: 0.85;
    }
</style>

<!-- Pour les icônes, ajoute Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

@endsection
