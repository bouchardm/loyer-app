<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Buildings
 *
 * @property integer $id
 * @property string $name
 * @property string $address
 * @property string $photo
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Apartments[] $apartments
 * @method static \Illuminate\Database\Query\Builder|\App\Buildings whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Buildings whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Buildings whereAddress($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Buildings wherePhoto($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Buildings whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Buildings whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Buildings extends Model
{
    protected $fillable = ['name', 'address', 'photo'];

    public function apartments()
    {
        return $this->hasMany('\App\Apartments');
    }
}
