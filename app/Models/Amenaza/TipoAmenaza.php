<?php

namespace App\Models\Amenaza;

use Illuminate\Database\Eloquent\Model;

class TipoAmenaza extends Model
{
    //
    protected $table = 'tipoamenaza';

    protected $primparykey = 'idtipoamenaza';

    public $timestamps =false;


    protected $fillable = [ 
    	'nombretipoame', 
    	'descriptipoame'
    ];
    
    public function amenaza(){
    	return $this->belongsto(Amenaza::class);
    }
}
