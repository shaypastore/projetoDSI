@extends('templates/layout')

@section('titulo', 'Página Textos - Ver')

@section('corpo')
    <h1>Textos Ver</h1>
    <p><strong>{{$texto->titulo}}</strong></p>
    <p>Descrição: {{$texto->descricao}}</p>
    <p><img src="{{asset('/img/'.$texto->img)}}"></p>

@endsection
