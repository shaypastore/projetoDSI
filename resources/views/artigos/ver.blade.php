@extends('templates/layout')

@section('titulo', 'Página de Artigos - Ver')

@section('corpo')
    <h1>Ver Artigo</h1>
    <p><strong>{{$artigo->titulo}}</strong></p>
    <p>Descrição: {{$artigo->descricao}}</p>
    <p><img src="{{asset('/img/'.$artigo->img)}}"></p>
    
    <form action="{{ route('comentar') }}" method="post" enctype="multipart/form-data">
    @csrf
    @if (session('usuario'))   
    <p><textarea name="comentario" cols="30" rows="5" placeholder="Adicionar comentário"></textarea></p>
    <p><input type="submit" value="Gravar"></p>
    <input type="hidden" name="id" value="{{$artigo->id}}">
    @else
    Para comentar, é necessário estar autenticado
    @endif
    <p></p>
    </form>

    {{--@foreach($comentario as $com)          
            <div>
                <p>Comentário: {{$comentario}}</p>
            </div>
            <!-- Divider-->
            <hr class="my-4">
    @endforeach--}}

@endsection
