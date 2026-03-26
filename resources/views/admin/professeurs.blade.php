@extends('layouts.app')

@section('content')
<h2>Liste des professeurs</h2>

<a href="{{ route('admin.createProfesseur') }}" class="btn btn-primary mb-3">Ajouter un professeur</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>#</th>
            <th>Nom</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        @foreach($professeurs as $prof)
        <tr>
            <td>{{ $prof->id }}</td>
            <td>{{ $prof->name }}</td>
            <td>{{ $prof->email }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
