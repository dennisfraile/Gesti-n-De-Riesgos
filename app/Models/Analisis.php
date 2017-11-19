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
    
}
