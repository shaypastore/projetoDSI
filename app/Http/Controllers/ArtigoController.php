<?php

namespace App\Http\Controllers;

use App\Models\Artigo;
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

        return view('artigos/ver', [
            'artigo' => $art,
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

        return redirect()->route('artigo');
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
}
