@extends('layouts.app')

@section('content')

<div class="container py-5">
    <div class="row justify-content-center align-items-center">

        <div class="col-md-5">
            <div class="card shadow-sm border-0 rounded p-4">

                <h3 class="card-title text-center fw-bold text-primary mb-4">
                     Connexion
                </h3>


                @if(session('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <i class="bi bi-exclamation-triangle-fill me-2"></i>
                        {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif


                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label fw-semibold">Adresse Email</label>
                        <input type="email" id="email" name="email" placeholder="exemple@mail.com"
                               class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autofocus>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label fw-semibold">Mot de passe</label>
                        <input type="password" id="password" name="password" placeholder="••••••••"
                               class="form-control @error('password') is-invalid @enderror" required>
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary w-100 d-flex justify-content-center align-items-center">
                        <i class="bi bi-box-arrow-in-right me-2"></i> Se connecter
                    </button>



                </form>
            </div>
        </div>
    </div>
</div>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
@endsection
