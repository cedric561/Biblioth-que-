@extends('layouts.app')

@section('content')
<div style=" display:flex;">
    <h1>Liste de tes notes</h1>
    <h1><span style=" color:rgb(255, 150, 21); display:flex;  margin-left:15px;"> {{ Auth::user()->name ?? 'N/A' }}</span></h1>

</div>


<table class="table table-bordered">
    <thead>
        <tr>
            <th>#</th>
            <th>Professeur</th>
            <th>Matière</th>
            <th>Note</th>
        </tr>
    </thead>
    <tbody>

        @foreach($notes as $note)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $note->professeur->name ?? 'N/A' }}</td>
            <td>{{ $note->matiere }}</td>
            <td>{{ $note->note }}</td>
        </tr>

        @endforeach

    </tbody>
</table>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

@endsection
