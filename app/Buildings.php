<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buildings extends Model
{
    protected $fillable = ['name', 'address', 'photo'];

    public function apartments()
    {
        return $this->hasMany('\App\Apartments');
    }
}
