<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    //vincular modelo a tabla
    protected $table = "playlist";
    //establecer la pk para la entidad por defecto el id
    protected $primaryKey = "PlaylistId";
    //omitir campos de ouditorio
    public $timestamps = false;

    //relacion mm(playlist y cancion)
    public function canciones(){
        //metodo: belongsToMany parametros:
        //1. modelo destino
        //2. tabla pivote
        //3. fk tabla origen
        //4. fk tabla destinos
        return $this->belongsToMany('App\Cancion', 
                                    'playlisttrack',
                                    'PlaylistId',
                                    'TrackId');
    }
}
