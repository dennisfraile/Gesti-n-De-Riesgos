<?php

namespace GestionDeRiesgos\Models;

use Illuminate\Database\Eloquent\Model;

class Analisis extends Model
{
    //
    protected $table = 'analisis';
    protected $primaryKey = 'idanalisis';
    public $timestamps = false;

    protected $fillable = [
        'idactivo',
        'disponibilidad',
        'confidencialidad',
        'integridad',
        'valoractivo',
        'degradacion',
        'impacto',
        'probocurrencia',
        'riesgo'
    ];
    public function activo(){
        return $this->belongsto(Activo::class);
    }
    public static function valor($d1,$d2,$d3){
        $valor =$d1+$d2+$d3;
        return $valor;
    }
    public static function impacto($deg,$valor){
     $impacto=$deg*$valor;
     return $impacto;
    }
    public static function riesgo($prob,$impacto){
        $riesgo=$prob*$impacto;
        return $riesgo;
    }
}
