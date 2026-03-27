@extends('layouts.app')
@section('content')
<div class="container mt-4">
    <h1>Bienvenue  <strong style="color: #c9509d">{{ Auth::user()->name }}</strong></h1>
    <a href="{{ route('etudiant.notes') }}" class="btn btn-primary mt-3">Voir mes Notes</a>
</div>
@endsection
