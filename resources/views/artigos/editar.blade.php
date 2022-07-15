@extends('templates/layout')
@section('titulo', 'Página de Artigos - Editar')
@section('corpo')

<h1>Artigos - Editar</h1>

@if( $errors ->any())
<p>Preencha os campos corretamente!</p>

<ul>
    @foreach($errors->all() as $erro)
    <li>{{ $erro }}</li>
    @endforeach
</ul>
@endif

<form action="{{ route('artigo/editar', $art->id) }}" method="post">
    @csrf
    @method('put')
    <p><input value="{{ old('titulo') ?: $art->titulo }}" type="text" name="titulo" placeholder="Nome do artigo" value=""></p>
    <p><textarea name="descricao" cols="30" rows="10" placeholder="Descrição">{{
    old('descricao') ?: $art->descricao }}</textarea></p>
    <p><input type="submit" value="Gravar"></p>
</form>

@endsection
