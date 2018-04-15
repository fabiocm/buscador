<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PalabraClave extends Model
{
    protected $table = 'palabras_claves';

    public $timestamps = false;

    protected $fillable = [
        'palabra', 'empresa_id'
    ];

    protected $hidden = [
        'id'
    ];
    public function empresa(){
        return $this->belongsTo('App\Empresa');
    }
}
