<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed id
 */
class Apartments extends Model
{
    protected $fillable = ['no', 'price'];

    public function buildings()
    {
        return $this->belongsTo('App\Buildings');
    }

    public function renter()
    {
        return $this->belongsTo('App\Renter');
    }
}
