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

        .form-card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            padding: 30px;
            background-color: #fff;
        }

        .form-card h2 {
            font-weight: bold;
            margin-bottom: 20px;
        }

        .form-label {
            font-weight: 500;
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
                    <i class="bi bi-house-fill"></i> Accueil
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
            <li class="nav-item mb-2">
                <a href="{{ route('professeur.profils') }}" class="nav-link text-white"><i class="bi bi-person-circle"></i>
                    Mon Profil</a>
            </li>
        </ul>
    </div>

    <div class="main-content">
        <div class="row justify-content-center">

            <div class="col-lg-6 col-md-8 col-12">
                <div class="form-card">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}

                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <h2><i class="bi bi-plus-circle"></i> Ajouter une Note</h2>
                    <form method="POST" action="{{ route('professeur.storeNote') }}">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Étudiant</label>
                            <select name="etudiant_id" class="form-select" required>
                                <option value="">Sélectionner un étudiant</option>
                                @foreach ($etudiants as $etudiant)
                                    <option value="{{ $etudiant->id }}">{{ $etudiant->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Matière</label>
                            <input type="text" name="matiere" class="form-control" placeholder="Ex: Mathématiques"
                                required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Note</label>
                            <input type="number" name="note" class="form-control" placeholder="0 - 20" required
                                min="0" max="20">
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-success btn-lg">
                                <i class="bi bi-check-circle"></i> Ajouter
                            </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
@endsection
