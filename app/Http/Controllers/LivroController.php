<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;
use App\Models\Livro;

class LivroController extends Controller
{
    public function index(){
        $book = Livro::with('area')->get();
        return view('livros/index',['books'=>$book]);
    }

    public function criar(){
        $areas = Area::all();        
        return view('livros/criar', ['areas_nome'=>$areas]);
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
            'edicao' => 'required',
            'area_id' => 'required',
            'imagem' => 'required'
        ]);

        $imgCaminho = $form -> file('imagem') -> store('', 'imagens');
        $dados['img'] = $imgCaminho;

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
            'area' => 'required',
            'edicao' => 'required'
        ]);

        $book->fill($dados);
        $book->save();

        return redirect()->route('livro');
    }

    // ALTERAÇÃO DA AULA DO DIA 30/06/2022

    public function apagar(Livro $book){
        
    }
}
