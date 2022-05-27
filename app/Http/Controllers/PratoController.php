<?php

namespace App\Http\Controllers;

use App\Models\Prato;
use Illuminate\Http\Request;

class PratoController extends Controller
{
    public function index() {
        $pratos = Prato::all();
        return view('pratos/index', [
            'pras' => $pratos,
        ]);
    }


    public function criar() {
        return view('pratos/criar');
    }

    public function ver(Prato $pra) {

        return view('pratos/ver', [
            'prato' => $pra,
        ]);
    }

    public function inserir(Request $form) {
        $dados = $form->validate([
            'prato' => 'required',
            'preco' => 'required',
            'descricao' => 'required'
        ]);
        

        Prato::create($dados);



        return redirect()->route('prato');
    }



}
