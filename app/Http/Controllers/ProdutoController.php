<?php

namespace App\Http\Controllers;

use App\Models\Texto;
use Illuminate\Http\Request;

class TextoController extends Controller
{
    public function index()
    {
        $textos = Texto::all();
        return view('textos/index', [
            'texs' => $textos,
        ]);
    }


    public function criar()
    {
        return view('textos/criar');
    }

    public function ver(Texto $tex)
    {

        return view('textos/ver', [
            'texto' => $tex,
        ]);
    }

    public function inserir(Request $form)
    {
        $dados = $form->validate([
            'titulo' => 'required',
            'descricao' => 'required'
        ]);

        $imgCaminho = $form->file('imagem')->store('', 'imagens');
        $dados['img'] = $imgCaminho;

        Texto::create($dados);



        return redirect()->route('textos');
    }


    public function editar(Texto $tex)
    {
        return view('textos/editar', ['tex' => $tex]);
    }

    
    public function editarGravar(Request $form, Texto $tex)
    {
        $dados = $form->validate([
            'titulo' => 'required|max:255',
            'descricao' => 'required'
        ]);

        $tex->fill($dados);
        $tex->save();
        return redirect()->route('texto');
    }
}
