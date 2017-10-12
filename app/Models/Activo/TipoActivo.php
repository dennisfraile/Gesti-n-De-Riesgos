<?php

namespace App\Models\Activo;

use Illuminate\Database\Eloquent\Model;

class TipoActivo extends Model
{
    //
    protected $table = 'tipoactivo';
    protected $primparykey = 'idtipoactivo';
    protected $fillable = ['idtipoactivo', 'nombretipoactivo', 'descriptipoactivo'];
    public $timestamps =false;
    public function activo(){
    	return $this->belongsto(Activo::class);
    }
}
