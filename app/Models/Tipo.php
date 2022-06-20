<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    /**obtener la tarifa para cada tipo de vehiculo */
    public function tarifa(){
        return $this->hasOne(Tarifa::class);
    }

}
