<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    // Asi se asocia la tabla menu de SQL
    protected $table = "menu";

    // Para llenado Masivo de Campos
    protected $fillable = ['nombre','url', 'icono'];

    // Campos para NO modificar
    protected $guarded = ['id'];

    // En caso de NO usar el Created_at o Updated_at
    //public $timestamps = false;
}
