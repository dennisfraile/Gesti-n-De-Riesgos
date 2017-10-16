<?php

namespace GestionDeRiesgos\Models;

use Illuminate\Database\Eloquent\Model;

class Amenaza extends Model
{
    //
    protected $table = 'amenaza';

    protected $primparykey = 'idamenaza';

    public $timestamps =false;


    protected $fillable = [
    	'idtipoamenaza', 
    	'nombreamenaza', 
    	'descripamenaza'
    ];
    
    public function tipoamenaza(){
        return $this->hasmany(TipoAmenaza::class);
    }
    
}
