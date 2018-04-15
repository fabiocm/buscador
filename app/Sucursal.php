<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    protected $table = 'sucursales';

    public $timestamps = false;

    protected $fillable = [
        'nombre', 'direccion','telefono','longitud','latitud','empresa_id'
    ];

    protected $hidden = [
        'id'
    ];
    
    public function empresa(){
        return $this->belongsTo('App\Empresa');
    }
}
