<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    //vincular modelo a tabla
    protected $table = "customer";
    //establecer la pk para la entidad por defecto el id
    protected $primaryKey = "CustomerId";
    //omitir campos de ouditorio
    public $timestamps = false;

    //relacion 1 - m Clientes  y sus facturas
    public function facturas(){
        //utilizo el metodo de eloquent: hasmany
        return $this->hasMany('App\Factura', 'CustomerId');
    }
}
