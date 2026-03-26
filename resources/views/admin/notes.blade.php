@extends('layouts.app')

@section('content')
<h2>Liste des notes</h2>

<a href="{{ route('admin.createNote') }}" class="btn btn-primary mb-3">Ajouter une note</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>#</th>
            <th>Étudiant</th>
            <th>Professeur</th>
            <th>Matière</th>
            <th>Note</th>
        </tr>
    </thead>
    <tbody>
        @foreach($notes as $note)
        <tr>
            <td>{{ $note->id }}</td>
            <td>{{ $note->etudiant->name ?? 'N/A' }}</td>
            <td>{{ $note->professeur->name ?? 'N/A' }}</td>
            <td>{{ $note->matiere }}</td>
            <td>{{ $note->note }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
