<?php

namespace GestionDeRiesgos\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table='users';
    protected $primaryKey='id';
    
    protected $fillable = [
        'name', 'email', 'password','type'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function gerente()
    {
        return $this->type;
    }

    public function coordinador()
    {
        return $this->type;
    }
    public function admin() 
    {
        return $this->type;
    }
}
