<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Apartments
 *
 * @property integer $id
 * @property string $no
 * @property float $price
 * @property integer $buildings_id
 * @property integer $renter_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \App\Buildings $buildings
 * @property-read \App\Renter $renter
 * @method static \Illuminate\Database\Query\Builder|\App\Apartments whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Apartments whereNo($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Apartments wherePrice($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Apartments whereBuildingsId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Apartments whereRenterId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Apartments whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Apartments whereUpdatedAt($value)
 * @mixin \Eloquent
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
