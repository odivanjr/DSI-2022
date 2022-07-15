<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'editora',
        'edicao',
        'autor',
        'area_id',
        'img'
    ];

    public function area(){
        return $this -> belongsTo(Area::class);
    }

}
