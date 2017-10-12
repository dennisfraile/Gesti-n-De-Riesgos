<?php

namespace App\Models\Amenaza;

use Illuminate\Database\Eloquent\Model;

class Amenaza extends Model
{
    //
    protected $table = 'amenaza';
    protected $primparykey = 'idamenaza';
    protected $fillable = ['idtamenaza', 'nombreamenaza', 'descripamenaza', 'idtamz'];
    public $timestamps =false;
    public function tipoamenaza(){
        return $this->hasmany(TipoAmenaza::class);
    }
    
}
