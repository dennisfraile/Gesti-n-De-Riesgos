<?php

namespace App\Models\Control;

use Illuminate\Database\Eloquent\Model;

class Procedimiento extends Model
{
    //
    protected $table = 'procedimiento';
    protected $primparykey = 'idprocedimiento';
    protected $fillable = ['idprocedimiento', 'nombreproced', 'descripproced',
     'idctrl'];
    public $timestamps =false;
    public function control(){
        return $this->hasmany(Control::class);
    }
    public function Paso(){
        return $this->belognsto(Paso::class);
    }
}
