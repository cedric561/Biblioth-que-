@extends('layouts.app')
@section('content')
<div class="container mt-4">
    <h1>Bienvenue M. <h1 class="mb-4" style="color: #c9509d"> <strong>{{ Auth::user()->name }}</strong></h1>
    <a href="{{ route('professeur.notes') }}" class="btn btn-primary mt-3">Gérer les Notes</a>
</div>
@endsection
