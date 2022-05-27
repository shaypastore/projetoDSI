@extends('templates/layout')

@section('titulo', 'Página de Pratos')

@section('corpo')
    <h1>Index de Pratos</h1>

    <p><a href="{{ route('prato/criar') }}">Incluir um Prato</a></p>

    <table border="1">
        <tr>
            <th>Prato</th>
            <th>Valor</th>
            <th>Descrição</th>
        </tr>

        @foreach($pras as $pra)
        <tr>
            <td>
                <a href="{{route('prato/ver', $pra->id)}}">
                {{ $pra->prato }}
                </a>
            </td>
            <td>{{ $pra->preco }}</td>
            <td>{{ $pra->descricao }}</td>
        </tr>    
        @endforeach
        
    </table>
@endsection