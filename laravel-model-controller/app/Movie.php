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
            case 2:
                return 'https://m.media-amazon.com/images/I/51FvKgUQ1lL.jpg';
                break;
            case 3:
                return 'https://www.hollywood-video.it/components/com_virtuemart/shop_image/product/PSYCO_A.Hitchcoc_4f3fbe78b2445.png';
                break;
            case 4:
                return 'https://pad.mymovies.it/filmclub/2010/09/146/locandina.jpg';
                break;
            case 5:
                return 'https://pad.mymovies.it/filmclub/2006/08/330/locandinapg1.jpg';
                break;
            case 6:
                return 'https://m.media-amazon.com/images/I/71563g-IMbL._AC_SY606_.jpg';
                break;
            case 7:
                return 'https://pad.mymovies.it/filmclub/2006/08/130/locandina.jpg';
                break;
            case 8:
                return 'https://www.cinemadelsilenzio.it/images/film/poster/699_big.jpg';
                break;
            case 9:
                return 'https://pad.mymovies.it/filmclub/2006/05/253/locandina.jpg';
                break;
            case 10:
                return 'https://pad.mymovies.it/filmclub/2006/08/058/locandina.jpg';
                break;
        }
    }

}
