@extends('layouts.app')

@section('content') 
    <h1 class="text-center mt-3">Titolo: {{$project->title}}</h1>
    <h3 class="text-center mt-5">Descrizione:</h3>
    <p class="text-center">{{$project->description}}</p>
    <p class="text-end me-5 mt-4">Data di consegna: {{$project->end_date}}</p>
@endsection