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
        return $valoractivo;
    }
    public static function impacto($degradacion,$valoractivo){
     $impacto=$degradacion*$valoractivo;
     return $impacto;
    }
    public static function riesgo($probabilidad,$impacto){
        $riesgo=$probabilidad*$impacto;
        return $riesgo;
    }
    public static function degradacion($deg){
    if (($deg>=0)&&($deg<0.01)) {
        return $degradacion=0.01;
    } else {
        if (($deg>=0.01)&&($deg<0.250)) {
            return $degradacion=0.25;
        } else {
            if (($deg>=0.25)&&($deg<0.50)) {
                return $degradacion=0.50;
            } else {
                if (($deg>=0.50)&&($deg<0.75)) {
                    return $degradacion = 0.75;
                } else {
                    return $degradacion =1;
                }
            }
            
        }
        
    }
    
    }
    
    public static function probabilidad($prob){
        if (($prob>=0)&&($prob<0.01)) {
            return $probabilidad=0.01;
        } else {
            if (($prob>=0.01)&&($prob<0.10)) {
                return $probabilidad=0.10;
            } else {
                if (($prob>=0.10)&&($prob<0.50)) {
                    return $probabilidad=0.50;
                } else {
                    if (($prob>=0.50)&&($prob<0.70)) {
                        return $probabilidad = 0.70;
                    } else {
                        return $probabilidad =1;
                    }
                }
                
            }
            
        }
        
        }
}
