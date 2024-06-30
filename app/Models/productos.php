<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
    use HasFactory;
    protected $table='productos';

    protected $fillable= [
        'nombre',
        'descripcion',
        'categoria',
        'id_categoria',
        'color',
        'tamanio',
        'imagen'
    ];

    public function categorias(){
        return $this->belongsTo(categoria::class, 'id_categoria','id');
    }
}
