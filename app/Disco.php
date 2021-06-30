<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disco extends Model
{
    //vincular modelo a tabla
    protected $table = "album";
    //establecer la pk para la entidad por defecto el id
    protected $primaryKey = "AlbumId";
    //omitir campos de ouditorio
    public $timestamps = false;
    //inverso de la relacion muchos a 1
    public function artista(){
        //belongsTo: relacion m a 1
        return $this->belongsTo('App\Artist', 'ArtistId');
    }
}
