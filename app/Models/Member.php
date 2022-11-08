<?php

namespace App\Models;
use App\Models\CizitenReport;
use App\Models\CitizenReportVideo;
use App\Models\ReplyToMembers;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Member extends Model
{
    use HasFactory,Notifiable;
    public function citizen_reportImage()
    {
       
        return $this->hasMany(CizitenReport::class, 'member_id', 'id');
    }
    public function citizen_reportVideo()
    {
       
        return $this->hasMany(CitizenReportVideo::class, 'member_id', 'id');
    }
    public function reply()
    {
       
        return $this->hasMany(ReplyToMembers::class, 'member_id', 'id');
    }
}
