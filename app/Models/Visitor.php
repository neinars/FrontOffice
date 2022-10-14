<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'instance',
        'phone_number',
        'meet_with',
        'utilities',
        'date'
    ];
}
