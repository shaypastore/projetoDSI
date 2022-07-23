@extends('templates/layout')

@section('titulo', 'Criar novos Artigos')

@section('corpo')

    <div class="row">    
	    <div class="col-md-8 col-md-offset-2">
    		<h1>Criar novo artigo</h1>	
            <form action="{{ route('artigo/inserir') }}" method="post" enctype="multipart/form-data">
            @csrf    		     		    
    		    <div class="form-group">
    		        <label for="title">Título <span class="require">*</span></label>
    		        <input type="text" class="form-control" name="titulo" placeholder="Nome">
    		    </div> 		    
    		    <div class="form-group">
    		        <label for="description">Descrição</label>
    		        <textarea rows="5" name="descricao" class="form-control" name="description" placeholder="Descrição"></textarea>
    		    </div>
    		    
    		    <div class="form-group">
                    <p>Foto: <input type="file" name="img"></p>
    		    </div>
    		    
    		    <div class="form-group">
    		        <button type="submit" value="Gravar" class="btn btn-primary">
    		            Criar
    		        </button>
    		        <button class="btn btn-default">
    		            Cancel
    		        </button>
    		    </div> 
    		</form>
		</div>
		
	</div>
    
@endsection