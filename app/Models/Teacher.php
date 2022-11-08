<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'hour_start',
        'hour_end',
        'subject',
        'days_id',
        'rooms_id',
        'majors_id'
    ];

    public function days(){
        return $this->belongsTo(Day::class);
    }

    public function rooms(){
        return $this->belongsToMany(Room::class);
    }

    public function majors(){
        return $this->belongsToMany(Major::class);
    }
}
