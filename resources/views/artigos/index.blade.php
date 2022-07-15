@extends('templates/layout')

@section('titulo', 'Página de Artigos')

@section('corpo')
    <table border="1">
        <tr>
            <th>artigo</th>
        </tr>
        @foreach($arts as $art)
        <tr>
            <td>
                <a href="{{route('artigo/ver', $art->id)}}">
                {{ $art->titulo }}
                </a>
            </td>
        </tr>    
        @endforeach     
    </table>
@endsection