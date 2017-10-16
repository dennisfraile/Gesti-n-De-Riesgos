<?php

namespace GestionDeRiesgos\Models;

use Illuminate\Database\Eloquent\Model;

class Vulnerabilidad extends Model
{

    protected $table = 'vulnerabilidad';

    protected $primaryKey = 'idvulnerabilidad';

    public $timestamps =false;


    protected $fillable = [
    	'idamenza', 
    	'nombrevulne', 
    	'descripvulne'
    ];
    

    public function amenaza(){
        return $this->belongsto(Amenaza::class);
    } 
}
