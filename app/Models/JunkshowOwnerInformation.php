<?php

namespace App\Models;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JunkshowOwnerInformation extends Model
{
    use HasFactory;
    protected $table = 'junkshow_owner_information';
    protected $primaryKey = 'id';
    protected $fillable = ['firstname','lastname','email','address','phonenumber','birthDate','gender' ];
    public function users()
    {
        return $this->belongsTo(User::class, 'junkshop_id','id');
    }
}
