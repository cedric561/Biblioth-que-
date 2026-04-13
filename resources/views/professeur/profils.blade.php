@extends('layouts.app')

@section('content')

<style>
    .sidebar {
        position: fixed;
        top: 55px;
        left: 0;
        width: 250px;
        height: 100%;
        background-color: #4b5157;
        padding: 20px;
        color: #fff;
    }

    .sidebar h4 {
        margin-bottom: 2rem;
        font-weight: bold;
        text-align: center;
    }

    .sidebar .nav-link {
        color: #fff;
        font-weight: 500;
        margin-bottom: 1rem;
        display: flex;
        align-items: center;
        transition: 0.3s;
    }

    .sidebar .nav-link:hover {
        background-color: #0d6efd;
        border-radius: 6px;
        color: #fff;
    }

    .sidebar .nav-link i {
        margin-right: 10px;
        font-size: 1.2rem;
    }

</style>
<div class="container-fluid">
    <div class="row">

        <div class="sidebar">
            <h4>Prof Panel</h4>
            <ul class="nav flex-column">
                <li class="nav-item mb-3">
                    <a href="{{ route('professeur.dashboard') }}" class="nav-link">
                        <i class="bi bi-house-fill"></i> Accuel
                    </a>
                </li>
                <li class="nav-item mb-3">
                    <a href="{{ route('professeur.notes') }}" class="nav-link">
                        <i class="bi bi-journal-text"></i> Mes Notes
                    </a>
                </li>
                <li class="nav-item mb-3">
                    <a href="{{ route('professeur.createNote') }}" class="nav-link">
                        <i class="bi bi-plus-circle"></i> Ajouter Note
                    </a>
                </li>
                <li class="nav-item mb-3">
                    <a href="{{ route('professeur.profils') }}" class="nav-link text-white"><i class="bi bi-person-circle"></i> Mon Profil</a>
                </li>
            </ul>
        </div>



        <div style="margin-top: 30px; margin-right:90px;  " class=" offset-md-2 p-4">
            <h2 style="margin-left:50px; margin-top:20px;" class="mb-4">Profil Professeur</h2>
            <div style="width:730px;margin-left: 50px;" class="card ">
                <div class="card-body">
                    <p><strong>Nom :</strong> {{ auth()->user()->name }}</p>
                    <p><strong>Email :</strong> {{ auth()->user()->email }}</p>
                    <p><strong>Mot de passe :</strong> xxxxxxx</p>


                </div>
            </div>
        </div>

    </div>
</div>
@endsection
