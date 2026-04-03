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

    .table-responsive {
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 12px rgba(0,0,0,0.08);
    }

    .table-hover tbody tr:hover {
        background-color: #e9f5ff;
    }

    .header-section {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 30px;
    }

    .header-section h2 i {
        font-size: 1.5rem;
    }
</style>


<div class="sidebar">

    <h4>Admin Panel</h4>

    <ul class="nav flex-column">
        <li class="nav-item mb-2">
            <a href="{{ route('admin.dashboard') }}" class="nav-link"><i class="bi bi-house-door-fill me-2"></i> Accueil</a>
        </li>
        <li class="nav-item mb-2">
            <a href="{{ route('admin.professeurs') }}" class="nav-link"><i class="bi bi-person-badge me-2"></i> Professeurs</a>
        </li>
        <li class="nav-item mb-2">
            <a href="{{ route('admin.etudiants') }}" class="nav-link"><i class="bi bi-people-fill me-2"></i> Étudiants</a>
        </li>
        <li class="nav-item mb-2">
            <a href="{{ route('admin.notes') }}" class="nav-link"><i class="bi bi-journal-text me-2"></i> Notes</a>
        </li>
        <li class="nav-item mt-4">
            <a href="{{ route('register') }}" class="btn btn-outline-light w-100"><i class="bi bi-plus-circle me-2"></i> Ajouter un rôle</a>
        </li>
    </ul>
</div>

<div class="main-content">

    <div class="header-section">
        <h2 class="fw-bold text-primary">
            <i class="bi bi-journal-text me-2"></i> Liste des notes
        </h2>
    </div>

    <div class="table-responsive">
        <table class="table table-hover table-bordered align-middle mb-0">
            <thead class="table-dark text-center">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Étudiant</th>
                    <th scope="col">Professeur</th>
                    <th scope="col">Matière</th>
                    <th scope="col">Note</th>
                </tr>
            </thead>
            <tbody>
                @forelse($notes as $note)
                <tr>
                    <td class="text-center">{{ $loop->iteration }}</td>
                    <td>{{ $note->etudiant->name ?? 'N/A' }}</td>
                    <td>{{ $note->professeur->name ?? 'N/A' }}</td>
                    <td>{{ $note->matiere }}</td>
                    <td class="text-center">
                        <span class="badge bg-primary fs-6">{{ $note->note }}</span>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center text-muted py-3">
                        <i class="bi bi-file-earmark-text me-2"></i> Aucune note trouvée
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</div>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

@endsection
