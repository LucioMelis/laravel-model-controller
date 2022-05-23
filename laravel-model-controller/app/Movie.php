<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'movies';
    // funzione per invertire la direzione della data
    public function getDataUser(){
        return date('d/m/Y', strtotime($this->date));
    }
    // funzione per ritornare l'immagine
    public function getImage(){
        switch ($this->id) {
            case 1:
                return 'https://www.cincincinema.it/wp-content/uploads/2017/10/Il-Padrino.jpg';
                break;
            case 1:
                echo "i equals 1";
                break;
            case 2:
                echo "i equals 2";
                break;
        }
    }

}
