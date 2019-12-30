<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{

    protected $table = 'autores';
    public $timestamp = false;

    protected $fillable = ['nombre','estilo'];

    public function discos()
    {

        // FK => 'id_autores' (No 'id_autor')
        return $this->hasMany('App\Disco', 'id_autores');
    }
}
