@extends('layouts.app')

@section('content')

<style>
       .container {
        position: fixed;
        top: 56px;
        left: 0;
        width: 250px;
        height: 100%;
        background-color: #4b5157;
        padding: 20px;
        color: #fff;
    }

    .container h2 {
        text-align: center;
        margin-bottom: 30px;
    }



    .container ul li {
        list-style: none;
        margin-top: 40px ;
        cursor: pointer;
        transition: 0.3s;
    }

    .container .nav-link:hover {
        background-color: #0d6efd;
        border-radius: 6px;
        color: #fff;
    }

    .container .nav-link i {
        margin-right: 10px;
        font-size: 1.2rem;
    }
    .container .nav-link {
        color: #fff;
        margin-bottom: 1rem;
        display: flex;
        align-items: center;
        transition: 0.3s;
    }

</style>

<div class="container-fluid">
        <div class="row">
            <div class="container">
                <h2>Etudiant Panel</h2>

                <ul >
                    <li >
                        <a class="nav-link" style="text-decoration:none; color:white" href="{{ route('etudiant.dashboard') }}"><i class="bi bi-house-fill me-2"></i>Accueil</a>
                    </li>
                    <li >
                        <a class="nav-link" style="text-decoration:none; color:white" href="{{ route('etudiant.notes') }}"><i class="bi bi-journal-bookmark me-2"></i>Mes notes</a>
                    </li>
                    <li  class="nav-item mb-2">
                        <a class="nav-link" href="{{ route('etudiant.profils') }}" class="nav-link text-white"><i class="bi bi-person-circle me-2"></i> Mon Profil</a>
                    </li>
                </ul>
            </div>

        </div>

        <div style="margin-top: 30px; margin-right:90px;  " class=" offset-md-2 p-4">
            <h2 style="margin-left:50px; margin-top:20px;" class="mb-4">Profil Étudiant</h2>
            <div style="width:730px;margin-left: 50px;" class="card ">
                <div class="card-body">
                    <p><strong>Nom :</strong>  {{ auth()->user()->name }} </p>
                    <p><strong>Email :</strong> {{ auth()->user()->email }}</p>
                    <p><strong>Mot de passe :</strong> xxxxxxxx</p>

                </div>
            </div>
        </div>

    </div>
</div>
@endsection
