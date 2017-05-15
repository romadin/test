<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fabriek extends Model
{
    /**
     * The table name of the database.
     * 
     * @var string
     */
    protected $table = 'fabriek';

    /**
     * The primary key of the model Fabriek.
     * 
     * @var string
     */
    public $primaryKey = 'Fabriekcode';

    /**
     * There is no timestamps in the database.
     * 
     * @var boolean
     */
    public $timestamps  = false;
}
