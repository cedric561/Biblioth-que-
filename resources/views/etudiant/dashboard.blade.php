@extends('layouts.app')
@section('content')
<h2>Dashboard Étudiant</h2>
<p>Bienvenue, {{ auth()->user()->name }}</p>
<a href="{{ route('etudiant.notes') }}" class="btn btn-primary">Voir mes Notes</a>
@endsection
