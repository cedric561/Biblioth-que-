@extends('layouts.app')
@section('content')
<div class="container mt-4">
    <h1>Bienvenue M. <h1 class="mb-4" style="color: #c9509d"> <strong>{{ Auth::user()->name }}</strong></h1>
    <a href="{{ route('professeur.notes') }}" class="btn btn-primary mt-3">Gérer les Notes</a>

</div>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

@endsection
