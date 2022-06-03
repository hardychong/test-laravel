<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AvActress extends Model
{
    //use HasFactory;
	
	protected $fillable = [
		'name' , 'otherName' , 'avatar' , 
	];
	
	public function videos()
	{
		return $this->belongsToMany(AvVideo::class, 'av_actresses_videos', 'actresses_id', 'video_id');
	}
}
