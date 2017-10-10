<?php

namespace App\Models\Control;

use Illuminate\Database\Eloquent\Model;

class Paso extends Model
{
    //
    protected $table = 'paso';
    protected $primparykey = 'idpaso';
    protected $fillable = ['idpaso', 'nombrepaso', 'descripaso','realizado',
    'correlativo', 'idproceso'];
    public $timestamps =false;
    public function paso(){
        return $this->belongsto(Paso::class);
    }
}
