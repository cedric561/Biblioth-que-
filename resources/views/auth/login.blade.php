@extends('layouts.app')

@section('content')

<style>
    body {
        background-color: #f4f6f9;
    }

    .login-card {
        max-width: 400px;
        margin: 80px auto;
        padding: 30px;
        background-color: #fff;
        border-radius: 12px;
        box-shadow: 0 4px 20px rgba(0,0,0,0.1);
    }

    .login-card h2 {
        font-weight: bold;
        margin-bottom: 25px;
        text-align: center;
    }

    .login-card .form-control {
        height: 45px;
    }

    .login-card .btn i {
        margin-right: 5px;
    }

    .alert {
        margin-bottom: 20px;
    }
</style>

<div class="login-card">
    <h2><i class="bi bi-person-circle"></i> Connexion</h2>

    @if(session('error'))
        <div class="alert alert-danger text-center">
            {{ session('error') }}
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="mb-3">
            <input type="email" name="email" class="form-control" placeholder="Email" required>
        </div>

        <div class="mb-3">
            <input type="password" name="password" class="form-control" placeholder="Mot de passe" required>
        </div>

        <div class="d-grid">
            <button type="submit" class="btn btn-primary btn-lg">
                <i class="bi bi-box-arrow-in-right"></i> Se connecter
            </button>
        </div>
    </form>
</div>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

@endsection
