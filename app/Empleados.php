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
}
