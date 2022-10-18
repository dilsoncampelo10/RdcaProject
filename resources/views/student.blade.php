@extends('layouts.main')
@section('title','RDCA alunos')

@section('content')

@if(count($learningcenters)>0)
@foreach($learningcenters as $center)
<div class="card text-dark bg-light mb-3" style="max-width: 18rem;">

    <div class="card-header">{{$center->discipline}}
        <button type="button" class="btn btn-outline-success btn_student">+</button>

    </div>

    <div class="card-body">
        <h5 class="card-title">Professor: </h5>
        <span class="card-text">Paulo Orlando</span>
        <h5 class="card-title">Horário: </h5>
        <span class="card-text">{{$center->time_center}}</span>
        <h5 class="card-title">Local: </h5>
        <span class="card-text">{{$center->place}}</span>
    </div>
</div>
@endforeach

@else
<div class="alert alert-light container-sm" role="alert">
    <h2>Não há centros disponíveis no momento</h2>
</div>
@endif

@endsection