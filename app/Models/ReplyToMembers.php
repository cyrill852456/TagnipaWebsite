<?php

namespace App\Models;
use App\Models\Member;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReplyToMembers extends Model
{
    use HasFactory;
    protected $table = 'reply_to_members';
    protected $primaryKey = 'id';
    protected $fillable = ['member_id','comments'];
    public function members()
    {
        return $this->belongsTo(Member::class, 'member_id', 'id');
    }
}
