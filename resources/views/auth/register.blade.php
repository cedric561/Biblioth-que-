@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <h2>Inscription</h2>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <input type="text" name="name" class="form-control mb-2" placeholder="Nom" required>
        <input type="email" name="email" class="form-control mb-2" placeholder="Email" required>
        <input type="password" name="password" class="form-control mb-2" placeholder="Mot de passe" required>
        <select name="role" class="form-control mb-2" required>
            <option value="">Sélectionner un rôle</option>
            <option value="professeur">Professeur</option>
            <option value="etudiant">Étudiant</option>
        </select>
        <button type="submit" class="btn btn-success">S'inscrire</button>
    </form>
</div>
@endsection
