<?php

namespace App\Models;
use App\Models\Member;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class CitizenReportVideo extends Model
{
    use HasFactory,Notifiable;
    protected $table = 'citizen_report_videos';
    protected $primaryKey = 'id';
    protected $fillable = ['member_id','address','date','video','comments','reply'];
    public function members()
    {
        return $this->belongsTo(Member::class, 'member_id', 'id');
    }
}
