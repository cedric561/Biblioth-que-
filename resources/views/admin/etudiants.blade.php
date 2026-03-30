@extends('layouts.app')

@section('content')
<div class="container py-4">

    {{-- Titre avec icône 🎓 --}}
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold text-primary">
            <i class="bi bi-mortarboard-fill me-2"></i> Liste des étudiants
        </h2>

        {{-- Bouton Ajouter avec icône + hover effet --}}
        <a href="{{ route('admin.createEtudiant') }}" class="btn btn-success d-flex align-items-center">
            <i class="bi bi-plus-circle me-2"></i> Ajouter un étudiant
        </a>
    </div>

    {{-- Table responsive --}}
    <div class="table-responsive shadow-sm rounded">
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
                @foreach($etudiants as $etudiant)
                <tr>
                    <td class="text-center">{{ $etudiant->id }}</td>
                    <td>{{ $etudiant->name }}</td>
                    <td>{{ $etudiant->email }}</td>
                    <td class="text-center">
                   
                        <a href="" class="btn btn-sm btn-primary me-1">
                            <i class="bi bi-pencil-square"></i>
                        </a>
                        <form action="" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Voulez-vous vraiment supprimer cet étudiant ?')">
                                <i class="bi bi-trash-fill"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>

{{-- Bootstrap Icons CDN --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

@endsection
