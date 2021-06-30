<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
    //vincular modelo a tabla
    protected $table = "employee";
    //establecer la pk para la entidad por defecto el id
    protected $primaryKey = "EmployeeId";
    //omitir campos de ouditorio
    public $timestamps = false;

    //relacion 1 - m cliente
    public function clientes(){
        return $this->hasMany('App\Clientes', 'SupportRepId');
    }

    //relacion 1 - facturas(a traves del cliente)
    public function facturas(){
        return $this->hasManyThrough('App\Factura', 
                                     'App\Clientes',
                                     'SupportRepId', //fk del abuelo en el papa
                                     'CustomerId',
                                     'EmployeeId',
                                     'CustomerId'
                                    );
    }
}
