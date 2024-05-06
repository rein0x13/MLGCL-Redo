<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class idCards extends Model
{
    use HasFactory;

    protected $fillable = [
        'profile_id',
        'picture',
        'signature',
        'validity',
        'validation_start',
        'validation_end'
    ];
}
