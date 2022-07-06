@extends('templates/layout')

@section('titulo', 'Edição de Textos')

@section('corpo')

<h1>Textos - Editar</h1>

@if( $errors ->any())
<p>Preencha os campos corretamente!</p>

<ul>
    @foreach($errors->all() as $erro)
    <li>{{ $erro }}</li>
    @endforeach
</ul>
@endif

<form action="{{ route('texto/editar', $tex->id) }}" method="post">
    @csrf
    @method('put')

    <p><input value="{{ old('titulo') ?: $tex->titulo }}" type="text" name="titulo" placeholder="Título para o Texto" value=""></p>
    <p><textarea name="descricao" cols="30" rows="10" placeholder="Descrição">{{
    old('descricao') ?: $tex->descricao }}</textarea></p>
    <p><input type="submit" value="Gravar"></p>
</form>

@endsection
