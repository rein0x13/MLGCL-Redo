<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prospectus extends Model
{
    use HasFactory;

    protected $fillable = [
        'prospectus_id',
        'course',
        'curriculum_year',
        'subject_id'
    ];
}
