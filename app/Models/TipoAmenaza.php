<?php

namespace GestionDeRiesgos\Models;

use Illuminate\Database\Eloquent\Model;

class TipoAmenaza extends Model
{
    //
    protected $table = 'tipoamenaza';

    protected $primparyKey = 'idtipoamenaza';

    public $timestamps =false;


    protected $fillable = [ 
    	'nombretipoame', 
    	'descriptipoame'
    ];
    
    public function amenaza(){
    	return $this->belongsto(Amenaza::class);
    }
}
