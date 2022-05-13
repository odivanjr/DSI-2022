<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index(){
        $produtos = Produto::all();
        return view('produtos/index',['prods'=>$produtos]);
    }

    public function criar(){
        return view('produtos/criar');
    }

    public function ver(){
        return view('produtos/ver');
    }
}