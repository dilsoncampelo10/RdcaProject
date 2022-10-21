@extends('layouts.main')

@section('title','RDCA')

@section('content')


@if(count($learningcenters)>0)
<div class="container-fluid">
    <p>Aulas marcadas:</p>


    @foreach($learningcenters as $center)
    <div id="container">
        <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">

            <div class="card-header">Info 3M
            </div>

            <div class="card-body">
                <div>
                    <label class="card-title">Disciplina: </label>
                    <label>{{$center->discipline}}</label>
                </div>
                <div>
                    <label class="card-text">Horário:</label>
                    <label>{{$center->time_center}}</label>
                </div>
                <div>
                    <label>Local:</label>
                    <label>{{$center->place}}</label>
                </div>
                <button class="btn btn-info">Ver lista de alunos</button>

                <button type="button" class="btn btn-success">Confirmar</button>
            </div>
        </div>
        <button type="button" class="btn btn-outline-success btn_teacher create_center">+</button>
    </div>
    @endforeach
    @else
    <div class="alert alert-light container-sm" role="alert">
        <h2>Agende uma aula</h2>
        Parece que você não agendou nenhum centro de aprendizagem, tente <a href="#" class="alert-link create_center">criar agora mesmo</a> nesse link ou no botão abaixo.
    </div>


    @endif

    <div>
        <button type="button" class="btn btn-success create_center">Criar Centro de Aprendizagem</button>
    </div>
</div>
@endsection