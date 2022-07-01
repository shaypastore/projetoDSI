@extends('templates/layout')

@section('titulo', 'Página de Produtos - Ver')

@section('corpo')
    <h1>Produtos Ver</h1>
    <p><strong>{{$produto->nome}}</strong></p>
    <p>Descrição: {{$produto->descricao}}</p>
    <p>Preço: {{ number_format($produto->preco, 2)}}</p>
    <p><img src="{{asset('/img/'.$produto->img)}}"></p>

@endsection
