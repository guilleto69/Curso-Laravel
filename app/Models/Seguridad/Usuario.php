<?php

namespace App\Models\Seguridad;

use App\Models\Admin\Rol;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class Usuario extends Authenticatable
{
    protected $remember_token = false;

    protected $table = 'usuario';
    
    protected $fillable = ['usuario', 'nombre', 'email', 'password'];
    //protected $guarded = ['id'];

    public function roles()
    {
        return $this->belongsToMany(Rol::class, 'usuario_rol');
    }

    public function setSession($roles)
    {
        if (count($roles) == 1) {
            Session::put(
                [
                    'rol_id' => $roles[0]['id'],
                    'rol_nombre' => $roles[0]['nombre'],
                    'usuario' => $this->usuario,
                    'email' => $this->email,
                    'usuario_id' => $this->id,
                    'nombre_usuario' => $this->nombre
                ]
            );
        }
    }

    public function setPasswordAttribute($pass)
    {
        $this->attributes['password'] = Hash::make($pass);
    }
}
