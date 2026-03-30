@extends('layouts.app')
@section('content')
@if($notes->isEmpty())
    <div class="alert alert-warning text-center mt-4" role="alert">
        Aucune note trouvée
    </div>
@else
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <div class="container mt-5">
        <div class="card shadow-lg border-0">
            <div class="card-header bg-dark text-white text-center">
                <h4 class="mb-0">Notes des Étudiants</h4>
            </div>

            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover table-striped align-middle mb-0">

                        <thead class="table-dark text-center">
                            <tr>
                                <th>#</th>
                                <th>Nom de l'Étudiant</th>
                                <th>Matière</th>
                                <th>Note</th>
                                <th>Actions</th>
                            </tr>
                        </thead>

                        <tbody class="text-center">

                            @php
                                $counter = 1;
                            @endphp

                            @foreach($notes as $note)
                                <tr>
                                    <td>{{ $counter++ }}</td>
                                    <td class="fw-semibold text-primary">
                                        {{ $note->etudiant->name ?? 'Inconnu' }}
                                    </td>
                                    <td>{{ $note->matiere }}</td>
                                    <td>
                                        <span class="badge {{ $note->note >= 10 ? 'bg-success' : 'bg-danger' }} px-3 py-2">
                                            {{ $note->note }}
                                        </span>
                                    </td>
                                    <td>

                                        <a href="" class="text-warning me-2">
                                            <i class="bi bi-pencil-fill"></i>
                                        </a>


                                        <form action="{{ route('professeur.delete', $note->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Voulez-vous vraiment supprimer cette note ?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-link p-0 m-0 text-danger">
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

        </div>
    </div>
@endif

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
@endsection
