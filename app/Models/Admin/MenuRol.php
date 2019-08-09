<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class MenuRol extends Model
{
     // Asi se asocia la tabla menu de SQL
     protected $table = "menu-rol";

    // En caso de NO usar el Created_at o Updated_at
    // para No generar Error
    public $timestamps = false;
}
