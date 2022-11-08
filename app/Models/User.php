<?php

namespace App\Models;
use App\Models\JunkshowOwnerInformation;
use App\Models\AgentInformation;
// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Casts\Attribute;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'profile',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $table = 'users';
    protected $primaryKey = 'id';
    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    protected function role(): Attribute
    {
        return new Attribute(
            get: fn($value) => ["admin","junkshop_admin","agent"][$value],

        );
    }
    public function junkshop()
    {
        return $this->hasMany(JunkshowOwnerInformation::class,'junkshop_id','id');
    }
    public function agents()
    {
        return $this->hasMany(AgentInformation::class,'agent_id','id');
    }
}
