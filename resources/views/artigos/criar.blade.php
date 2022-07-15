@extends('templates/layout')

@section('titulo', 'Página de Artigos - Criar')

@section('corpo')

    <h1>Artigos - Criar</h1>
    <form action="{{ route('artigo/inserir') }}" method="post" enctype="multipart/form-data">
        @csrf
        
        <p><input type="text" name="titulo" placeholder="Nome"></p>

        <p>Foto: <input type="file" name="img"></p>

        <p><textarea name="descricao" cols="30" rows="10" placeholder="Descrição"></textarea></p>
        <p><input type="submit" value="Gravar"></p>
    </form>
    
@endsection