@extends('layouts.app')
@section('content')
<div class="container mt-4">
    <h1>Bienvenue  <strong style="color: #c9509d">{{ Auth::user()->name }}</strong></h1>
    <a href="{{ route('etudiant.notes') }}" class="btn btn-primary mt-3">Voir mes Notes</a>
</div>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

@endsection
