<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AvVideo extends Model
{
    //use HasFactory;
	
	public function actresses()
	{
		return $this->belongsToMany(AvActress::class, 'av_actresses_videos', 'video_id', 'actresses_id');
	}
}
