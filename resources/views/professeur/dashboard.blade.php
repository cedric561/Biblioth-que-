@extends('layouts.app')
@section('content')
<div class="container mt-4">
    <h1>Bienvenue Professeur {{ Auth::user()->name }}</h1>
    <a href="{{ route('professeur.notes') }}" class="btn btn-primary mt-3">Gérer les Notes</a>
</div>
@endsection
