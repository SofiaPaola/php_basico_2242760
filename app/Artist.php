<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    //vincular modelo a tabla
    protected $table = "artist";
    //establecer la pk para la entidad por defecto el id
    protected $primaryKey = "ArtistId";
    //omitir campos de ouditorio
    public $timestamps = false;
}
