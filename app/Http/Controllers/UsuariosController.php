<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function index(){
        return view('usuarios.index');
    }

    public function login(Request $form){
        $email=$form->email;
        $senha=$form->senha;
        $usuario = Usuario::select('id', 'nome', 'email', 'papel')->where('email', $email)->where('senha', $senha)->get();
        
        if ($usuario->count()){
            request()->session()->put('usuario', $usuario[0]);
            return redirect()->route('produto'); //apenas para indicar que será acessada uma determinada página após o sucesso do login
        }else{
            return redirect()->route('usuario.index')->with('erro', 'Usuário ou senha inválidos');
        }
    }

    public function logout(){
        session()->forget('usuario');
        return redirect()->route('produto');
    }
}
