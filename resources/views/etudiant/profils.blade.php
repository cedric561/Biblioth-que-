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
</style>

<div class="container-fluid">
    <div class="row">

    <div class="siders">
    <h2>Etudiant Panel</h2>

    <ul >
        <li>
            <i class="bi bi-house-fill me-2"></i> <a style="text-decoration:none; color:white" href="{{ route('etudiant.dashboard') }}">Accueil</a>
        </li>
        <li>
            <i class="bi bi-journal-bookmark me-2"></i> <a style="text-decoration:none; color:white" href="{{ route('etudiant.notes') }}">Mes notes</a>
        </li>
         <li class="nav-item mb-2 ">
            <a href="#" class="nav-link text-white me-2"><i class="bi bi-person-circle"></i> Mon Profil</a>
        </li>
    </ul>
</div>

        <div style="margin-top: 30px; margin-right:90px;  " class=" offset-md-2 p-4">
            <h2 style="margin-left:50px; margin-top:20px;" class="mb-4">Profil Étudiant</h2>
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
