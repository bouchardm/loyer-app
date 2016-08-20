<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apartments extends Model
{
    public function building()
    {
        return $this->belongsTo('App\Buildings');
    }
}
