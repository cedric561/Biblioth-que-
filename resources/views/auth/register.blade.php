@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-4">
        <h2>Inscription</h2>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="mb-3">
                <input type="text" name="name" placeholder="Nom" class="form-control" required>
            </div>
            <div class="mb-3">
                <input type="email" name="email" placeholder="Email" class="form-control" required>
            </div>
            <div class="mb-3">
                <input type="password" name="password" placeholder="Mot de passe" class="form-control" required>
            </div>
            <div class="mb-3">
                <select name="role" class="form-control" required>
                    <option value="">Choisir le rôle</option>
                    <option value="etudiant">Étudiant</option>
                    <option value="professeur">Professeur</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success w-100">S'inscrire</button>
        </form>
    </div>
</div>
@endsection
