<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    //vincular modelo a tabla
    protected $table = "invoice";
    //establecer la pk para la entidad por defecto el id
    protected $primaryKey = "InvoiceId";
    //omitir campos de ouditorio
    public $timestamps = false;

    //relacion m:m entre factura y canciones
    public function canciones(){
        //relacion mm: belongsToMany()
        //parametros:
        //1. modelo a relacionar
        //4. la tabla pivot
        //3. fk del presente modelo en la tabla pivot
        //4. fk del modelo relacionado en la tabla pivot
        return $this->belongsToMany('App\Cancion',
                                    'invoiceline', 
                                    'InvoiceId',
                                    'TrackId'
                                    );
    }
}
