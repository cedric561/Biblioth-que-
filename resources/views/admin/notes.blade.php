@extends('layouts.app')

@section('content')

<div class="container py-4">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold text-primary">
            <i class="bi bi-journal-text me-2"></i> Liste des notes
        </h2>

        <a href="{{ route('admin.createNote') }}" class="btn btn-success d-flex align-items-center">
            <i class="bi bi-plus-circle me-2"></i> Ajouter une note
        </a>
    </div>

    <div class="table-responsive shadow-sm rounded">
        <table class="table table-hover table-bordered align-middle mb-0">
            <thead class="table-dark text-center">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Étudiant</th>
                    <th scope="col">Professeur</th>
                    <th scope="col">Matière</th>
                    <th scope="col">Note</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($notes as $note)
                <tr>
                    <td class="text-center">{{ $note->id }}</td>
                    <td>{{ $note->etudiant->name ?? 'N/A' }}</td>
                    <td>{{ $note->professeur->name ?? 'N/A' }}</td>
                    <td>{{ $note->matiere }}</td>
                    <td>{{ $note->note }}</td>
                    <td class="text-center">

                        <a href="" class="btn btn-sm btn-primary me-1">
                            <i class="bi bi-pencil-square"></i>
                        </a>
                        <form action="" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Voulez-vous vraiment supprimer cette note ?')">
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

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

@endsection
