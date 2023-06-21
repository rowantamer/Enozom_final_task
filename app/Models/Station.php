<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    use HasFactory;
    protected $fillable = ['id','station_name'];

    public function tripStations()
    {
        return $this->hasMany(TripStation::class, 'station_id');
    }
}
