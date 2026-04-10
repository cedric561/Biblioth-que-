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

            .dashboard {
                margin-left: 260px;
                padding: 30px;
            }


            .card-custom {
                border-radius: 15px;
                padding: 20px;
            }


            .table thead {
                background-color: #0d6efd;
                color: white;
            }

            .table tbody tr:hover {
                background-color: #f2f2f2;
            }
    </style>

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


    <div class="dashboard" style="margin-top: 45px;">
        <div class="container-fluid">

            <h2 class="mb-4">Mes Notes</h2>
            <div class="card shadow card-custom">

                @if ($notes->isEmpty())
                    <div class="text-center p-4">
                        <p class="text-muted">Aucune note disponible</p>
                    </div>
                @else
                    <div class="table-responsive">
                        <table class="table table-hover align-middle">
                            <thead>
                                <tr>
                                    <th>Matière</th>
                                    <th>Note</th>
                                    <th>Professeur</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($notes as $note)
                                    <tr>
                                        <td>{{ $note->matiere }}</td>

                                        <td>
                                            <span
                                                class="badge
                                                @if ($note->note >= 10) bg-success
                                                @else bg-danger @endif">
                                                {{ $note->note }}
                                            </span>
                                        </td>

                                        <td>{{ $note->professeur->name }}</td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                @endif

            </div>

        </div>
    </div>

@endsection
