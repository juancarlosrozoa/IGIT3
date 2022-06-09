<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tarifa
 *
 * @property $id
 * @property $idtipovehiculofk
 * @property $tarifa
 * @property $created_at
 * @property $updated_at
 *
 * @property Tipo $tipo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tarifa extends Model
{
    
    static $rules = [
		'idtipovehiculofk' => 'required',
		'tarifa' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idtipovehiculofk','tarifa'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tipo()
    {
        return $this->hasOne('App\Models\Tipo', 'id', 'idtipovehiculofk');
    }
    

}
