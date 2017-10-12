<?php

namespace App\Models\Control;

use Illuminate\Database\Eloquent\Model;

class Paso extends Model
{
    //
    protected $table = 'paso';
    protected $primparykey = 'idpaso';
    protected $fillable = ['idpaso', 'nombrepaso', 'descripaso','realizado',
    'correlativo', 'idproc'];
    public $timestamps =false;
    public function procedimiento(){
        return $this->belongsto(Procedimiento::class);
    }
}
