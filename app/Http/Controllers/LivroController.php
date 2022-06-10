<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;

class LivroController extends Controller
{
    public function index(){
        $book = Livro::all();
        return view('livros/index',['books'=>$book]);
    }

    public function criar(){
        return view('livros/criar');
    }

    public function ver(Livro $book){
        return view('livros/ver',[
            'livros' => $book,
        ]);
    }

    public function inserir(Request $form){
        $dados = $form -> validate([
            'titulo' => 'required',
            'autor' => 'required',
            'editora' => 'required',
            'edicao' => 'required'
        ]);

        Livro::create($dados);

        return redirect()->route('livro');
    }

    public function editar(Livro $book) {
        return view('livros/editar', ['book' => $book]);
    }

    public function editarGravar(Request $form, Livro $book){
        $dados = $form -> validate([
            'titulo' => 'required|max:255',
            'autor' => 'required',
            'editora' => 'required',
            'edicao' => 'required'
        ]);

        $book->fill($dados);
        $book->save();

        return redirect()->route('livro');
    }
}
