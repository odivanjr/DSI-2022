<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProdutoController extends Controller
{
    public function index(){
        $produtos = Produto::all();
        return view('produtos/index',['prods'=>$produtos]);
    }

    public function criar(){
        return view('produtos/criar');
    }

    public function ver(Produto $prod){
        //$produto = Produto::find($id);
        
        return view('produtos/ver',[
            'produto' => $prod,
        ]);
    }

    public function inserir(Request $form){
        $dados = $form -> validate([
            'nome' => 'required',
            'preco' => 'required',
            'descricao' => 'required'
        ]);

        Produto::create($dados);

        // $produto = new Produto();

        // $produto->nome = $form->nome;
        // $produto->preco = $form->preco;
        // $produto->descricao = $form->descricao;

        // $produto->save();

        return redirect()->route('produto');
    }
}