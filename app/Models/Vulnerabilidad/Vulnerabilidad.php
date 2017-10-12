<?php

namespace App\Models\Vulnerabilidad;

use Illuminate\Database\Eloquent\Model;

class Vulnerabilidad extends Model
{
    //
    protected $table = 'vulnerabilidad';
    protected $primparykey = 'idvulnerabilidad';
    protected $fillable = ['idvulnerabilidad', 'nombrevulne', 'descripvulne','id_amz'];
    public $timestamps =false;
    public function amenaza(){
        return $this->belongsto(Amenaza::class);
    }
}
