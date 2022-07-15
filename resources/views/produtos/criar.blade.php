@extends('templates/layout')

@section('titulo', 'Criar novo Texto')

@section('corpo')

    <h1>Textos - Criar</h1>
    <form action="{{ route('texto/inserir') }}" method="post" enctype="multipart/form-data">
        @csrf
        
        <p><input type="text" name="titulo" placeholder="Título"></p>

        <p>Foto: <input type="file" name="imagem"></p>

        <p><textarea name="descricao" cols="30" rows="10" placeholder="Descrição"></textarea></p>
        <p><input type="submit" value="Gravar"></p>
    </form>
    
@endsection