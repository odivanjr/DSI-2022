<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;

class AreaController extends Controller
{
    public function index(){
        $area = Area::all();
        return view('area/index',['areas'=>$area]);
    }

    public function criar(){
        return view('area/criar');
    }

    public function inserir(Request $form){
        $dados = $form -> validate([
            'nome' => 'required'
        ]);

        Area::create($dados);
        return redirect()->route('area');
    }

    public function editar(Area $area) {
        return view('area/editar', ['areas' => $area]);
    }

    public function editarGravar(Request $form, Area $area){
        $dados = $form -> validate([
            'nome' => 'required|max:255',
        ]);

        $area->fill($dados);
        $area->save();

        return redirect()->route('area');
    }
    
    public function apagar(Area $area){
        
    }
}