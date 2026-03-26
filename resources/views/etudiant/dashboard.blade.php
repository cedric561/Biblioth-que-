@extends('layouts.app')
@section('content')
<div class="container mt-4">
    <h1>Bienvenue Étudiant {{ Auth::user()->name }}</h1>
    <a href="{{ route('etudiant.notes') }}" class="btn btn-primary mt-3">Voir mes Notes</a>
</div>
@endsection
