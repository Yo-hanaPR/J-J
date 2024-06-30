<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    use HasFactory;
    protected $table='categorias';

    protected $fillable= [
        'nombre'
    ];

    public function productos(){
        return $this->hasMany(productos::class, 'id_categoria','id');
    }
}
