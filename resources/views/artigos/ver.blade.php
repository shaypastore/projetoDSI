@extends('templates/layout')

@section('titulo', 'Página de Artigos - Ver')

@section('corpo')
    <h1>Ver Artigo</h1>
    <p><strong>{{$artigo->titulo}}</strong></p>
    <p>Descrição: {{$artigo->descricao}}</p>
    <p><img src="{{asset('/img/'.$artigo->img)}}"></p>
    
    <form action="{{ route('artigo/inserir') }}" method="post" enctype="multipart/form-data">
        <p><textarea name="descricao" cols="30" rows="5" placeholder="Adicionar comentário"></textarea></p>
        <p><input type="submit" value="Gravar"></p>
    </form>

@endsection
