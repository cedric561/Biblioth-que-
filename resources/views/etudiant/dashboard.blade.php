@extends('layouts.app')

@section('content')
<style>

    .siders {
        position: fixed;
        top: 56px;
        left: 0;
        width: 250px;
        height: 100%;
        background-color: #212529;
        padding: 20px;
        color: #fff;
    }

    .siders h2 {
        text-align: center;
        margin-bottom: 30px;
    }



    .siders ul li {
        list-style: none;
        margin-top: 35px ;

        cursor: pointer;
        transition: 0.3s;

    }

    .siders ul li:hover {
        color: #0d6efd;
    }

    .dashboard {
        margin-left: 260px;
        padding: 30px;
    }


    .card-box {
        border-radius: 15px;
        padding: 20px;
        color: white;
        transition: 0.3s;
    }

    .card-box:hover {
        transform: translateY(-5px);
    }

    .bg-blue { background-color: #0d6efd; }
    .bg-green { background-color: #198754; }

</style>

<div class="siders">
    <h2>Etudiant Panel</h2>

    <ul >
        <li>
            <i class="bi bi-house-fill me-2"></i> <a style="text-decoration:none; color:white" href="{{ route('etudiant.dashboard') }}">Accueil</a>
        </li>
        <li>
            <i class="bi bi-journal-bookmark me-2"></i> <a style="text-decoration:none; color:white" href="{{ route('etudiant.notes') }}">Mes notes</a>
        </li>
         <li class="nav-item mb-2">
            <a href="{{ route('etudiant.profils') }}" class="nav-link text-white"><i class="bi bi-person-circle"></i> Mon Profil</a>
        </li>
    </ul>
</div>

<div class="dashboard">
    <div class="container-fluid mt-5">

        <h2 class="mb-3">Tableau de bord</h2>
        <p>Bienvenue, {{ auth()->user()->name }}</p>

        <div class="row g-4 mt-3">

            <div class="col-md-4">
                <div class="card-box bg-blue">
                    <h5>Mes Notes</h5>
                    <p>Consulte tes résultats</p>
                    <a href="{{ route('etudiant.notes') }}" class="btn btn-light btn-sm">Voir</a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card-box bg-green">
                    <h5>Profil</h5>
                    <p>Gérer ton compte</p>
                    <a href="#" class="btn btn-light btn-sm">Voir</a>
                </div>
            </div>



        </div>

    </div>
</div>

@endsection
