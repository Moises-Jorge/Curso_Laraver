<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class CarrinhoController extends Controller
{
    // Função que lista todos os itens de um carrinho
    public function carrinhoLista() {
        //$itens = \Cart::getContent(); <-- AQUI
        //dd($itens);
        // PAREI O CURSO AQUI PORQUE ENCOTREI DIFICULDADE AO TRABALHAR COM "darryldecode/cart".
        // O CÓDIGO NÃO RECONHECE O COMANDO: "\Cart::getContent();"
    }
}
