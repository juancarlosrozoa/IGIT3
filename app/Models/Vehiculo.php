<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Vehiculo
 *
 * @property $id
 * @property $placa
 * @property $idtipovehiculofk
 * @property $ingreso
 * @property $estadoingreso
 * @property $salida
 * @property $estadosalida
 * @property $created_at
 * @property $updated_at
 *
 * @property Pago[] $pagos
 * @property Tipo $tipo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Vehiculo extends Model
{
    
    static $rules = [
		'placa' => 'required',
		'idtipovehiculofk' => 'required',
		'ingreso' => 'required',
		'estadoingreso' => 'required',
		'salida' => 'required',
		'estadosalida' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['placa','idtipovehiculofk','ingreso','estadoingreso','salida','estadosalida'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pagos()
    {
        return $this->hasMany('App\Models\Pago', 'idvehiculofk', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tipo()
    {
        return $this->hasOne('App\Models\Tipo', 'id', 'idtipovehiculofk');
    }
    

}
