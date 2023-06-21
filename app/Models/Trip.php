<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;
    protected $fillable = ['id',
    'trip_name','train_id'];


    public function train(){
        $this->belongsTo(Train::class);
    }

    public function tripStations()
    {
        return $this->hasMany(TripStation::class, 'trip_id');
    }

}
