<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tipo
 *
 * @property $id
 * @property $tipovehiculo
 * @property $created_at
 * @property $updated_at
 *
 * @property Tarifa[] $tarifas
 * @property Vehiculo[] $vehiculos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tipo extends Model
{
    
    static $rules = [
		'tipovehiculo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['tipovehiculo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tarifas()
    {
        return $this->hasMany('App\Models\Tarifa', 'idtipovehiculofk', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function vehiculos()
    {
        return $this->hasMany('App\Models\Vehiculo', 'idtipovehiculofk', 'id');
    }
    

}
