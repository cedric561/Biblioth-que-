@extends('layouts.app')

@section('content')
<h2>Liste des professeurs</h2>

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
