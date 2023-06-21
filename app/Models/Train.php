<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'train_name'];

    public function trips(){
        $this->hasMany(Trip::class);
    }
}
