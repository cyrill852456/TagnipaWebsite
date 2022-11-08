<?php

namespace App\Models;
use App\Models\Member;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CizitenReport extends Model
{
    use HasFactory;
    protected $table = 'ciziten_reports';
    protected $primaryKey = 'id';
    protected $fillable = ['address','date','img','video','comments','reply'];
    public function members()
    {
        return $this->belongsTo(Member::class, 'member_id', 'id');
    }

}
