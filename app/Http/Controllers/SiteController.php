<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class SiteController extends Controller
{
    public function index()
    {
        //return "IndexController";
        $produtos = Produto::paginate(3);

        return view('site/home', compact('produtos'));
    }

    public function details($slug) {
        $produto = Produto::where('slug', $slug)->first();

        return view('site/details', compact('produto'));
    }

    // Criando o Metodo "categoria" que vai ser executado na rota "/categoria"
    public function categoria($id) {
        $produtos = Produto::where('id_categoria', $id)->paginate(3);

        return view('site/categoria', compact('produtos'));
    }
}
