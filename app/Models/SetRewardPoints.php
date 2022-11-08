<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SetRewardPoints extends Model
{
    use HasFactory;
    protected $fillable = ['garbage_type','points','image'];
}
