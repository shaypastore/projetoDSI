@extends('templates/layout')

@section('titulo', 'Página inicial')

@section('corpo')
    <h1>Página inicial Blog</h1>
    <p>Você está entrando no site legal</p>
    <p><a href="{{ route('produto') }}">Produtos</a></p>
    <p><a href="{{ route('prato') }}">Pratos</a></p>

@endsection