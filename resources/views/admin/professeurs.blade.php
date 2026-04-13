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

    .btn i {
        margin-right: 5px;
    }

    .header-section {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 30px;
        height: 65px;
        color: #0d6efd;
    }

    .header-section h2 i {
        font-size: 1.5rem;
    }
</style>


<div class="sidebar">
    <h4>Admin Panel</h4>
    <ul class="nav flex-column">
        <li class=" mb-2">
            <a href="{{ route('admin.dashboard') }}" class="nav-link"><i class="bi bi-house-door-fill me-2"></i> Accueil</a>
        </li>
        <li class=" mb-2">
            <a href="{{ route('admin.professeurs') }}" class="nav-link active bg-primary rounded"><i class="bi bi-person-badge me-2"></i> Professeurs</a>
        </li>
        <li class=" mb-2">
            <a href="{{ route('admin.etudiants') }}" class="nav-link"><i class="bi bi-people-fill me-2"></i> Étudiants</a>
        </li>
        <li class=" mb-2">
            <a href="{{ route('admin.notes') }}" class="nav-link"><i class="bi bi-journal-bookmark-fill me-2"></i>Notes</a>
        </li>
        <li class=" mt-4">
            <a href="{{ route('register') }}" class="btn btn-outline-light w-100"><i class="bi bi-plus-circle me-2"></i> Ajouter un Membre</a>
        </li>
    </ul>
</div>


<div class="main-content">
    <div class="p-3">
        <div class="header-section">
            <h2 class="fw-bold mb-0">
                <i class="bi bi-person-badge me-2"></i> Liste des professeurs
            </h2>

        </div>
    </div>



    <div class="table-responsive">
        <table class="table table-hover table-bordered align-middle mb-0">
            <thead class="table-dark text-center">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Email</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($professeurs as $prof)
                <tr>
                    <td class="text-center">{{ $loop->iteration }}</td>
                    <td>{{ $prof->name }}</td>
                    <td>{{ $prof->email }}</td>
                    <td class="text-center">
                        <a href="{{ route('admin.editProfesseur', $prof->id) }}" class="btn btn-sm btn-primary me-1">
                            <i class="bi bi-pencil-square"></i>
                        </a>
                        <form action="{{ route('admin.deleteProfesseur', $prof->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" >
                                <i class="bi bi-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="text-center text-muted py-3">
                        <i class="bi bi-file-earmark-text me-2"></i> Aucun professeur trouvé
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</div>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

@endsection
