<?php

namespace App\Http\Controllers;
use App\Models\Artigo;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index () {
        $artigos = Artigo::all();
        return view('entrada', [
            'arts' => $artigos,
        ]);
    }
}
