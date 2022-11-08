<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BasuraStation extends Model
{
    use HasFactory;
    protected $fillable = ['location','station_name','station_image'];
}
