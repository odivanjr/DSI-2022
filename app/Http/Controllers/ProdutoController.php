<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index(){
        return view("produtos/index");
    }

    public function criar(){
        return view("produtos/criar");
    }

    public function ver(){
        return view("produtos/ver");
    }
}