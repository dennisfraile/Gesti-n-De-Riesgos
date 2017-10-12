<?php

namespace App\Models\Empresa;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    //
    protected $table = 'empresa';
    protected $primparykey = 'idempresa';
    protected $fillable = ['idempresa', 'nombreempresa', 'descripempresa','politica',
    'objetivo','alcance'];
    public $timestamps =false;
    public function empleado(){
        return $this->hasmany(Empleado::class);
    }
}
