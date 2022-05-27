@extends('templates/layout')

@section('titulo', 'Página de Pratos - Incluir')

@section('corpo')

    <h1>Pratos - Criar</h1>

    @if( $errors ->any())
        <p>Preencha os campos corretamente!</p>

        <ul>
            @foreach($errors->all() as $erro)
                <li>{{ $erro }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('prato/inserir') }}" method="post">
        @csrf
        
        <p><input value="{{ old('prato') }}" type="text" name="prato" placeholder="Nome do prato"></p>
        <p><input type="number" name="preco" placeholder="Preço"></p>
        <p><textarea name="descricao" cols="30" rows="10" placeholder="Descrição"></textarea></p>
        <p><input type="submit" value="Gravar"></p>
    </form>
    
@endsection