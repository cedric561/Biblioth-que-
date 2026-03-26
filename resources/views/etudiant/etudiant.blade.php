@extends('layouts.app')

@section('content')
<h2>Liste des étudiants</h2>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>#</th>
            <th>Nom</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        @foreach($etudiants as $etudiant)
        <tr>
            <td>{{ $etudiant->id }}</td>
            <td>{{ $etudiant->name }}</td>
            <td>{{ $etudiant->email }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
