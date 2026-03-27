@extends('layouts.app')

@section('content')
<h1>Bienvenue Admin {{ Auth::user()->name }}</h1>
<a href="{{ route('admin.etudiants') }}" class="btn btn-primary mt-3">Gérer Étudiants</a>
<a href="{{ route('admin.professeurs') }}" class="btn btn-warning mt-3">Gérer Professeurs</a>
<a href="{{ route('admin.notes') }}" class="btn btn-success mt-3">Gérer Notes</a>
<a href="{{ route('register') }}" class="btn btn-secondary mt-3">Ajouter un Role</a>

@endsection
