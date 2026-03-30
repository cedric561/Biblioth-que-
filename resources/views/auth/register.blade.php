@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-5 col-lg-5">


            <div class="card shadow-sm border-0 rounded">
                <div class="card-body p-4">


                    <h3 class="card-title text-center mb-4 fw-bold text-primary">
                        <i class="bi bi-person-plus-fill me-2"></i> Enregistrer un rôle
                    </h3>


                    <form method="POST" action="{{ route('register') }}">
                        @csrf


                        <div class="mb-3">
                            <label for="name" class="form-label">Nom</label>
                            <input type="text" id="name" name="name" placeholder="Nom complet" class="form-control" required>
                        </div>


                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" name="email" placeholder="exemple@mail.com" class="form-control" required>
                        </div>


                        <div class="mb-3">
                            <label for="password" class="form-label">Mot de passe</label>
                            <input type="password" id="password" name="password" placeholder="Mot de passe" class="form-control" required>
                        </div>


                        <div class="mb-4">
                            <label for="role" class="form-label">Rôle</label>
                            <select id="role" name="role" class="form-select" required>
                                <option value="">Choisir le rôle</option>
                                <option value="etudiant">Étudiant</option>
                                <option value="professeur">Professeur</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-success w-100 d-flex justify-content-center align-items-center">
                            <i class="bi bi-check2-circle me-2"></i> Enregistrer
                        </button>
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
@endsection
