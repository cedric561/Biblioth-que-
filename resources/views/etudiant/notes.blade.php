@extends('layouts.app')
@section('content')
<h2>Mes Notes</h2>
@if($notes->isEmpty())
    <p>Aucune note disponible</p>
@else
<table class="table table-striped">
    <tr>
        <th>Matière</th>
        <th>Note</th>
        <th>Professeur</th>
    </tr>
    @foreach($notes as $note)
    <tr>
        <td>{{ $note->matiere }}</td>
        <td>{{ $note->note }}</td>
        <td>{{ $note->professeur->name }}</td>
    </tr>
    @endforeach
</table>
@endif
@endsection
