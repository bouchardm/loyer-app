<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apartments extends Model
{
    protected $fillable = ['no', 'price'];

    public function buildings()
    {
        return $this->belongsTo('App\Buildings');
    }
}
