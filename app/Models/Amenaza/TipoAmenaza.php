<?php

namespace App\Models\Amenaza;

use Illuminate\Database\Eloquent\Model;

class TipoAmenaza extends Model
{
    //
    protected $table = 'tipoamenaza';
    protected $primparykey = 'idtipoamenaza';
    protected $fillable = ['idtipoamenaza', 'nombretipoamenaza', 'descriptipoamenaza'];
    public $timestamps =false;
    public function amenaza(){
    	return $this->belongsto(Amenaza::class);
    }
}
