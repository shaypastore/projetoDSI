<?php

namespace App\Http\Controllers;

use App\Models\Artigo;
use App\Models\Comentario;
use Illuminate\Http\Request;

class ArtigoController extends Controller
{
    public function index()
    {
        $artigos = Artigo::all();
        return view('artigos/index', [
            'arts' => $artigos,
        ]);
    }


    public function criar()
    {
        return view('artigos/criar');
    }

    public function ver(Artigo $art)
    {
        $comentario = Comentario::where('artigo_id', $art->id)->with('usuario')->get();
        return view('artigos/ver', [
            'artigo' => $art,
            'comentarios' => $comentario,
        ]);
    }


    public function inserir(Request $form)
    {
        $dados = $form->validate([
            'titulo' => 'required',
            'descricao' => 'required'
        ]);
        $imgCaminho = $form->file('img')->store('', 'imagens');
        $dados['img'] = $imgCaminho;
        Artigo::create($dados);

        return redirect()->route('inicio');
    }


    public function editar(Artigo $art)
    {
        return view('artigos/editar', ['art' => $art]);
    }

    
    public function editarGravar(Request $form, Artigo $art)
    {
        $dados = $form->validate([
            'titulo' => 'required|max:255',
            'descricao' => 'required'
        ]);

        $art->fill($dados);
        $art->save();
        return redirect()->route('artigo');
    }

    public function comentar (Request $form)
    {
        $comentario = new Comentario();
        $comentario->comentario = $form->comentario;
        $comentario->usuario_id = session()->get("usuario.id");
        $comentario->artigo_id = $form->id;
        $comentario->save();

        return back();

    }

}
