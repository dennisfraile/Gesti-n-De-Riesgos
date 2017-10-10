<?php

namespace App\Models\Riesgo;

use Illuminate\Database\Eloquent\Model;

class Riesgo extends Model
{
    //
    protected $table = 'riesgo';
    protected $primparykey = 'idriesgo';
    protected $fillable = ['idriesgo', 'descripriesgo', 'estimacion','impacto'
    , 'idactivo','idvulnerabilidad'];
    public $timestamps =false;
    public function activos(){
        return $this->belongsto(Activo::class);
    }
    public function vulnerabilidades(){
        return $this->belongsto(Vulnerabilidad);
    }
}
