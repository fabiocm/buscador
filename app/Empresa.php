<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $table = 'empresas';

    public $timestamps = false;

    protected $fillable = [
        'nombre', 'descripcion'
    ];

    protected $hidden = [
        'id'
    ];

    public function palabraclave() {
        return $this->hasMany('App\PalabraClave');
    }

    public function sucursales(){
        return $this->hasMany('App\Sucursal');
    }

    
}
