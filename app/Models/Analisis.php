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
    public static function degradacion($degradacion){
    if (($degradacion>=0)&&($degradacion<0.01)) {
        return $deg=0.01;
    } else {
        if (($degradacion>=0.01)&&($degradacion<0.250)) {
            return $deg=0.25;
        } else {
            if (($degradacion>=0.25)&&($degradacion<0.50)) {
                return $deg=0.50;
            } else {
                if (($degradacion>=0.50)&&($degradacion<0.75)) {
                    return $deg = 0.75;
                } else {
                    return $deg =1;
                }
            }
            
        }
        
    }
    
    }
    
    public static function probabilidad($probabilidad){
        if (($probabilidad>=0)&&($probabilidad<0.01)) {
            return $prob=0.01;
        } else {
            if (($probabilidad>=0.01)&&($probabilidad<0.10)) {
                return $prob=0.10;
            } else {
                if (($probabilidad>=0.10)&&($probabilidad<0.50)) {
                    return $prob=0.50;
                } else {
                    if (($probabilidad>=0.50)&&($probabilidad<0.70)) {
                        return $prob = 0.70;
                    } else {
                        return $prob =1;
                    }
                }
                
            }
            
        }
        
        }
}
