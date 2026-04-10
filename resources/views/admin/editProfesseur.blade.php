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
        transition: 0.3s;
    }

    .sidebar .nav-link:hover {
        background-color: #0d6efd;
        border-radius: 6px;
        color: #fff;
    }


.content {
    margin-left: 270px;
}

.form-card {
    background: #fff;
    border-radius: 12px;
    padding: 30px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.08);
}

.form-title {
    font-weight: bold;
    margin-bottom: 20px;
}

.btn-custom {
    padding: 10px 20px;
    border-radius: 8px;
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
<div class="content container py-5">

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="form-card mt-5">

                <h3 class="form-title text-center">Modifier </h3>

                <form method="POST" action="{{ route('admin.updateProfesseur', $professeur->id) }}">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label class="form-label fw-bold">Nom</label>
                        <input type="text" name="name" class="form-control" value="{{ $professeur->name }}" required>
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-bold">Email</label>
                        <input type="email" name="email" class="form-control" value="{{ $professeur->email }}" required>
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="{{ route('admin.professeurs') }}" class="btn btn-outline-secondary btn-custom">
                             Retour
                        </a>

                        <button type="submit" class="btn btn-primary btn-custom">
                             Mettre à jour
                        </button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>

@endsection
