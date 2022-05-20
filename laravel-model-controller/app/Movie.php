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

    public function getDataUser(){
        return date('d/m/Y', strtotime($this->date));
    }

}
