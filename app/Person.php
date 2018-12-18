<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $primaryKey = 'id';
    protected $table = "persons";
    protected $fillable = [
        'firstname', 'lastname',
    ];
}
