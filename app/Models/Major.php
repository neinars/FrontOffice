<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'class'
    ];

    protected $primaryKey = 'major_id';


    public function teachers(){
        return $this->belongsToMany(Teacher::class, 'id', 'teacher_id');
    }

    public function student(){
        return $this->belongsTo(Student::class, 'id', 'student_id');
    }
}
