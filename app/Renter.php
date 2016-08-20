<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Renter extends Model
{
    protected $fillable = ['name', 'photo'];

    public function apartments()
    {
        return $this->belongsTo('App\Apartments');
    }
}
