<?php

namespace App\Models\Control;

use Illuminate\Database\Eloquent\Model;

class Procedimiento extends Model
{
    //
    protected $table = 'procedimiento';

    protected $primparykey = 'idprocedimiento';

    public $timestamps =false;


    protected $fillable = [
        'idcontrol', 
        'nombreproced', 
        'descripproced'
    ];

    
    public function control(){
        return $this->belongsto(Control::class);
    }
    public function Paso(){
        return $this->hasmany(Paso::class);
    }
}
