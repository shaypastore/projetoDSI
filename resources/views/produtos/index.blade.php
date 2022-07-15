@extends('templates/layout')

@section('titulo', 'Página de Textos')

@section('corpo')
    <h1>Index Textos</h1>

    <p><a href="{{ route('texto/criar') }}" class="btn btn-primary">Criar novo texto</a></p>

    <table border="1">
        <tr>
            <th>Texto</th>
        </tr>

        @foreach($texs as $tex)
        <tr>
            <td>
                <a href="{{route('texto/ver', $tex->id)}}">
                {{ $tex->titulo }}
                </a>
            </td>
        </tr>    
        @endforeach
        
    </table>

    <img src="{{ asset('img/blog.jpg') }}">

@endsection