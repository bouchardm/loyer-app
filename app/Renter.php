<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Renter
 *
 * @property integer $id
 * @property string $name
 * @property string $photo
 * @property integer $apartments_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \App\Apartments $apartments
 * @method static \Illuminate\Database\Query\Builder|\App\Renter whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Renter whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Renter wherePhoto($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Renter whereApartmentsId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Renter whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Renter whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Renter extends Model
{
    protected $fillable = ['name', 'photo'];

    public function apartments()
    {
        return $this->belongsTo('App\Apartments');
    }
}
