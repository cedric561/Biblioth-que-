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
    }

    .sidebar .nav-link {
        color: #fff;
        font-weight: 500;
        margin-bottom: 1rem;
        transition: 0.3s;
        display: flex;
        align-items: center;
    }

    .sidebar .nav-link:hover {
        background-color: #0d6efd;
        border-radius: 6px;
        color: #fff;
    }

    .sidebar .nav-link i {
        margin-right: 10px;
        font-size: 1.1rem;
    }

    /* Main content */
    .main-content {
        margin-left: 250px; /* Décalage pour sidebar */
        padding: 40px;
        margin-top: 70px; /* Décalage pour navbar */
        min-height: 100vh;
        background-color: #f4f6f9;
    }

    .card-custom {
        border: none;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.08);
    }

    /* Table styling */
    .table thead {
        background-color: #0d6efd;
        color: #fff;
    }

    .table tbody tr:hover {
        background-color: #e9f5ff;
    }

    .btn-sm {
        font-size: 0.85rem;
    }
</style>

<div class="sidebar">
    <h4>Prof Panel</h4>
    <ul class="nav flex-column">
        <li class="nav-item mb-2">
            <a href="{{ route('professeur.dashboard') }}" class="nav-link">
                <i class="bi bi-speedometer2"></i> Dashboard
            </a>
        </li>
        <li class="nav-item mb-2">
            <a href="{{ route('professeur.notes') }}" class="nav-link">
                <i class="bi bi-journal-text"></i> Mes Notes
            </a>
        </li>
        <li class="nav-item mb-2">
            <a href="{{ route('professeur.createNote') }}" class="nav-link">
                <i class="bi bi-plus-circle"></i> Ajouter Note
            </a>
        </li>
    </ul>
</div>


<div class="main-content">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold mb-1">Mes Notes</h2>
            <small class="text-muted">Gérez toutes vos notes de manière professionnelle</small>
        </div>


    </div>

    <div class="card card-custom p-4">

        @if($notes->isEmpty())
            <div class="text-center py-5">
                <h5 class="text-muted">
                    <i class="bi bi-file-earmark-text"></i> Aucune note trouvée
                </h5>
            </div>
        @else
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead>
                        <tr>
                            <th><i class="bi bi-person"></i> Étudiant</th>
                            <th><i class="bi bi-book"></i> Matière</th>
                            <th><i class="bi bi-123"></i> Note</th>
                            <th class="text-center"><i class="bi bi-gear"></i> Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($notes as $note)
                        <tr>
                            <td class="fw-semibold">{{ $note->etudiant->name }}</td>
                            <td>{{ $note->matiere }}</td>
                            <td>
                                <span class="badge bg-primary fs-6">
                                    {{ $note->note }}
                                </span>
                            </td>
                            <td class="text-center">
                                <a href="{{ route('professeur.editNote', $note->id) }}"
                                   class="btn btn-warning btn-sm me-2">
                                    <i class="bi bi-pencil-square"></i> Modifier
                                </a>
                                <form action="{{ route('professeur.deleteNote', $note->id) }}"
                                      method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Supprimer cette note ?')">
                                        <i class="bi bi-trash"></i> Supprimer
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif

    </div>

</div>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

@endsection
