<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class TripStation extends Model
{
    use HasFactory;
    protected $fillable = ['id',
    'stop_time' => 'time:H:i',
    'trip_id',
    'station_id'];
    public function trip()
    {
        return $this->belongsTo(Trip::class, 'trip_id');
    }

    public function station()
    {
        return $this->belongsTo(Station::class, 'station_id');
    }
    public function setYourTimeAttribute($value)
    {
        $this->attributes['stop_time'] = Carbon::createFromFormat('H:i', $value)->format('H:i');
    }

    public function getYourTimeAttribute($value)
    {
        return Carbon::createFromFormat('H:i:s', $value)->format('H:i');
    }
}
