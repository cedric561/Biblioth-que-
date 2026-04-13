@extends('layouts.app')

@section('content')
<style>

    .sidebar {
        position: fixed;
        top: 56px;
        left: 0;
        width: 250px;
        height: 100%;
        background-color: #4b5157;
        padding: 20px;
        color: #fff;
    }

    .sidebar h2 {
        text-align: center;
        margin-bottom: 30px;
    }

    .sidebar ul li {
        list-style: none;
        margin-top: 20px ;
        cursor: pointer;
        transition: 0.3s;
    }



    .sidebar .nav-link i {
        margin-right: 10px;
        font-size: 1.2rem;
    }
    .sidebar .nav-link {
        color: #fff;
        font-weight: bold;
        margin-bottom: 1rem;
        transition: 0.3s;
    }

    .sidebar .nav-link:hover {
        background-color: #0d6efd;
        border-radius: 6px;
        color: #fff;
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

    .bg-blue {
         background-color: #0d6efd;
    }
    .bg-green {
         background-color: #198754;
     }

</style>

<div class="sidebar">
    <h2>Etudiant Panel</h2>

    <ul class="nav flex-column">
        <li class="">
             <a  href="{{ route('etudiant.dashboard') }}" class="nav-link"><i class="bi bi-house-fill  "></i>Accueil</a>
        </li>
        <li >
             <a   href="{{ route('etudiant.notes') }}" class="nav-link"><i class="bi bi-journal-bookmark me-2"></i>Mes notes</a>
        </li>
         <li  >
            <a  href="{{ route('etudiant.profils') }}" class="nav-link"><i class="bi bi-person-circle me-2"></i> Mon Profil</a>
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
                    <a href="{{ route('etudiant.profils') }}" class="btn btn-light btn-sm">Voir</a>
                </div>
            </div>



        </div>

    </div>
</div>

@endsection
