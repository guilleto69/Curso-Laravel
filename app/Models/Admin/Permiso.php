<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
    // Asi se asocia la tabla permiso de SQL
    protected $table = "permiso"; 
    protected $fillable = ['nombre','slug'];
     // Campos para NO modificar
     protected $guarded = ['id'];
}
