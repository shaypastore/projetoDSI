@extends('templates/layout')
@section('titulo', 'Página inicial')
@section('corpo')

<div class="px-4 pt-5 my-5 text-center border-bottom">
    <h1 class="display-4 fw-bold">Blog de Notícias</h1>
    <div class="col-lg-6 mx-auto">
        <p class="lead mb-4">Notícias, reportagens, entrevistas, fotos e vídeos sobre programas e audiências de televisão. Um blog ligado em cultura, literatura e tudo que gira ao redor do mundo do livro e seus autores. Informações exclusivas, análises e bastidores do mundo dos negócios.</p>
    </div>
    <div class="overflow-hidden" style="max-height: 30vh;">
        <div class="container px-5">
            <img src="https://jucirqueira.com/wp-content/uploads/2018/08/return-blog-1200x775.png" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image" width="700" height="500" loading="lazy">
        </div>
    </div>
</div>

<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">

            @foreach($arts as $art)          
            <div class="post-preview">
                <a href="{{route('artigo/ver', $art->id)}}">
                    <h2 class="post-title">{{$art->titulo}}</h2>
                </a>
            </div>
            <!-- Divider-->
            <hr class="my-4">
            @endforeach
        </div>
    </div>
</div>
@endsection