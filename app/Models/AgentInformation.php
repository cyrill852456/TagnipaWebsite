<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgentInformation extends Model
{
    use HasFactory;
    protected $table = 'agent_information';
    protected $primaryKey = 'id';
    protected $fillable = ['firstname','lastname','email','address','phonenumber','birthDate','gender' ];
    public function users()
    {
        return $this->belongsTo(User::class, 'agent_id','id');
    }
}
