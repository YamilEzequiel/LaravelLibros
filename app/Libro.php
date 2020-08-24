<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    public function categoria()
    {
        return $this->belongsTo(Categoria::class); //Pertenece a una categoria
    }

    public function etiquetas(){
        return $this->belongsToMany(Etiqueta::class); //Muchos a muchos
    }

    protected $dates = ['fecha']; // pasar fechas a carbon
}
