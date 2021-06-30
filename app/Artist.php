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

    //definir relcion artista 1 - m albums
    public function discos(){
        //hasmany: parametros
        //1. modelo a relacion
        //2. fk del modelo papa
        //3. pk del modelo hijo
        return $this->hasMany('App\Disco', 'ArtistId');
    }

    //definir la relacion de multitablas entre: artistas y sus caciones
    public function canciones(){
        //hasManyThrough: parametros
        //1. modelo nieto
        //2. modelo pap
        //3. fk del abuelo en el papa
        //4. fk del pap en el nieto
        //5. pk del abuelo
        //6. pk del papa
        return $this->hasManyThrough('App\Cancion',
                                    'App\Disco', 
                                    'ArtistId', 
                                    'AlbumId', 
                                    'ArtistId', 
                                    'AlbumId');
    }
}
