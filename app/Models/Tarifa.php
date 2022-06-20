<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarifa extends Model
{
    /**Obtener el tipo de vehiculo al cual pertenece una tarifa */
    public function vehiculo(){
        return $this->belongsTo(vehiculo::class);
    }
}
