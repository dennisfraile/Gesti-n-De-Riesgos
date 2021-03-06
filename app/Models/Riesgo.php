<?php

namespace GestionDeRiesgos\Models;

use Illuminate\Database\Eloquent\Model;

class Riesgo extends Model
{

    protected $table = 'riesgo';

    protected $primparyKey = 'idriesgo';

    public $timestamps =false;

    protected $fillable = [
            'idactivo',
            'idvulnerabilidad',
            'descripriesgo', 
            'estimacion',
            'impacto'
        ];
        

    public function activos(){
        return $this->belongsto(Activo::class);
    }
    public function vulnerabilidades(){
        return $this->belongsto(Vulnerabilidad);
    }
}
