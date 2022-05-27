@extends('templates/layout')

@section('titulo', 'Página de Produtos - Ver')

@section('corpo')
    <h1>Ver Pratos</h1>
    <p><strong>{{$prato->nome}}</strong></p>
    <p>Descrição: {{$prato->descricao}}</p>
    <p>Preço: {{ number_format($prato->preco, 2)}}</p>

    
@endsection
