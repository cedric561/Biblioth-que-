@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h2>Modifier Professeur</h2>

    <form method="POST" action="{{ route('admin.updateProfesseur', $professeur->id) }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Nom</label>
            <input type="text" name="name" class="form-control" value="{{ $professeur->name }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" value="{{ $professeur->email }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Mettre à jour</button>
        <a href="{{ route('admin.professeurs') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
@endsection
