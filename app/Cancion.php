<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cancion extends Model
{
    //vincular modelo a tabla
    protected $table = "track";
    //establecer la pk para la entidad por defecto el id
    protected $primaryKey = "TrackId";
    //omitir campos de ouditorio
    public $timestamps = false;
}
